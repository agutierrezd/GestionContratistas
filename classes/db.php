<?php
class DB
{
	public static function CurrentConnection()
	{
		global $currentConnection;
		return $currentConnection ? $currentConnection : DB::DefaultConnection();
	}

	public static function CurrentConnectionId()
	{
		$conn = DB::CurrentConnection();
		return $conn->connId;
	}

	public static function DefaultConnection()
	{
		global $cman;
		return $cman->getDefault();
	}

	public static function ConnectionByTable( $table )
	{
		global $cman;
		return $cman->byTable($table);
	}

	public static function ConnectionByName( $name )
	{
		global $cman;
		return $cman->byName( $name );
	}

	public static function SetConnection( $connection )
	{
		global $currentConnection;
		if ( is_string( $connection ) )
		{
			$currentConnection = DB::ConnectionByName( $connection );
		}
		else if ( is_a($connection, 'Connection') ) {
		 	$currentConnection = $connection;
		}
	}

	public static function LastId()
	{
		return DB::CurrentConnection()->getInsertedId();
	}

	public static function Query( $sql )
	{
		return DB::CurrentConnection()->querySilent( $sql );
	}

	public static function Exec( $sql )
	{
		return DB::CurrentConnection()->execSilent( $sql ) != NULL;
	}

	public static function LastError()
	{
		return DB::CurrentConnection()->lastError();
	}

	public static function Select($table, $userConditions = array() )
	{
		$tableInfo = DB::_getTableInfo($table);

		if ( !$tableInfo )
			return false;

		$whereSql = DB::_getWhereSql($userConditions, $tableInfo["fields"]);

		$sql = "SELECT * FROM ".DB::CurrentConnection()->addTableWrappers( $tableInfo['fullName'] ) . $whereSql;
		$queryResult = DB::CurrentConnection()->querySilent( $sql );

		return $queryResult;
	}

	public static function Delete($table, $userConditions = array() )
	{
		$tableInfo = DB::_getTableInfo($table);

		if ( !$tableInfo )
			return false;

		$whereSql = DB::_getWhereSql($userConditions, $tableInfo["fields"]);

		if( $whereSql == "" )
			return false;

		$sql = "DELETE FROM ".DB::CurrentConnection()->addTableWrappers( $tableInfo['fullName'] ) . $whereSql;
		$ret = DB::CurrentConnection()->execSilent( $sql );

		return $ret;
	}

	public static function Insert($table, $data)
	{
		$result = false;
		$tableInfo = DB::_getTableInfo($table);

		if ( !$tableInfo )
			return false;

		$iFields = "";
		$iValues = "";
		$blobs = array();
		foreach($data as $fieldname => $value)
		{
			$field = getArrayElementNC($tableInfo["fields"], $fieldname);

			// user field not found in table
			if ( is_null($field) )
				continue;

			$iFields.= DB::CurrentConnection()->addFieldWrappers( $field["name"] ).",";
			$iValues.= DB::_prepareValue($value, $field["type"]) . ",";

			if( DB::CurrentConnection()->dbType == nDATABASE_Oracle || DB::CurrentConnection()->dbType == nDATABASE_DB2 || DB::CurrentConnection()->dbType == nDATABASE_Informix )
			{
				if( IsBinaryType( $field["type"] ) )
					$blobs[ $field["name"] ] = $value;

				if( DB::CurrentConnection()->dbType == nDATABASE_Informix && IsTextType( $field["type"] ) )
					$blobs[ $field["name"] ] = $value;
			}
		}

		if( $iFields != "" && $iValues != "" )
		{
			$iFields = substr($iFields, 0, -1);
			$iValues = substr($iValues, 0, -1);
			$sql = "INSERT INTO ".DB::CurrentConnection()->addTableWrappers( $tableInfo['fullName'] )." (".$iFields.") values (".$iValues.")";

			if ( count($blobs) > 0 )
				$result = DB::_execSilentWithBlobProcessing($blobs, $sql, $tableInfo['fields']);
			else
				$result = DB::CurrentConnection()->execSilent( $sql );
		}

		return $result;
	}

	public static function Update($table, $data, $userConditions)
	{
		$result = false;
		$tableInfo = DB::_getTableInfo($table);

		if ( !$tableInfo )
			return false;

		$whereSql = DB::_getWhereSql($userConditions, $tableInfo["fields"]);

		if( $whereSql == "" )
			return false;

		$updateValues = array();
		$blobs = array();
		foreach( $data as $fieldname => $value )
		{
			$field = getArrayElementNC($tableInfo["fields"], $fieldname);

			// user field not found in table
			if ( is_null($field) )
				continue;

			$prepareFieldName = DB::CurrentConnection()->addFieldWrappers( $field["name"] );
			$prepareValue = DB::_prepareValue($value, $field["type"]);
			$updateValues[] = $prepareFieldName."=".$prepareValue;

			if ( DB::CurrentConnection()->dbType == nDATABASE_Oracle || DB::CurrentConnection()->dbType == nDATABASE_DB2 || DB::CurrentConnection()->dbType == nDATABASE_Informix )
			{
				if ( IsBinaryType( $field["type"] ) )
					$blobs[ $field["name"] ] = $value;

				if ( DB::CurrentConnection()->dbType == nDATABASE_Informix && IsTextType( $field["type"] ) )
					$blobs[ $field["name"] ] = $value;
			}
		}

		if ( count($updateValues) > 0 )
		{
			$updateSQL = implode(",", $updateValues);
			$sql = "UPDATE ".DB::CurrentConnection()->addTableWrappers( $tableInfo['fullName'] )." SET ". $updateSQL . $whereSql;

			if ( count($blobs) > 0 )
				$result = DB::_execSilentWithBlobProcessing($blobs, $sql, $tableInfo['fields']);
			else
				$result = DB::CurrentConnection()->execSilent( $sql );
		}

		return $result;
	}

	protected static function _getWhereSql($userConditions, $founedfields)
	{
		if( !is_array( $userConditions ) )
		{
			$whereSql = trim( $userConditions );
			if( $whereSql != "")
				$whereSql = " WHERE " . $whereSql;
			return $whereSql;
		}

		$conditions = array();
		foreach($userConditions as $fieldname => $value)
		{
			$field = getArrayElementNC($founedfields, $fieldname);
			// user field not found in table
			if ( is_null($field) )
				continue;

			$wrappedField = DB::CurrentConnection()->addFieldWrappers( $field["name"] );
			if ( is_null($value) )
			{
				$conditions[] = $wrappedField . " IS NULL";
			}
			else
			{
				$conditions[] = $wrappedField . "=" . DB::_prepareValue($value, $field["type"]);
			}
		}

		$whereSql = "";
		if( count($conditions) > 0 )
		{
			$whereSql .= " WHERE " . implode(" AND ", $conditions);
		}

		return $whereSql;
	}

	/**
	 * @param Array blobs
	 * @param String dalSQL
	 * @param Array tableinfo
	 */
	protected static function _execSilentWithBlobProcessing($blobs, $dalSQL, $tableinfo)
	{
		$blobTypes = array();
		if( DB::CurrentConnection()->dbType == nDATABASE_Informix )
		{
			foreach( $blobs as $fname => $fvalue )
			{
				$blobTypes[ $fname ] = $tableinfo[ $fname ]["type"];
			}
		}

		DB::CurrentConnection()->execSilentWithBlobProcessing( $dalSQL, $blobs, $blobTypes );
	}

	protected static function _prepareValue($value, $type)
	{
		if ( is_null($value) )
			return "NULL";

		if( DB::CurrentConnection()->dbType == nDATABASE_Oracle || DB::CurrentConnection()->dbType == nDATABASE_DB2 || DB::CurrentConnection()->dbType == nDATABASE_Informix )
		{
			if( IsBinaryType($type) )
			{
				if( DB::CurrentConnection()->dbType == nDATABASE_Oracle )
					return "EMPTY_BLOB()";

				return "?";
			}

			if( DB::CurrentConnection()->dbType == nDATABASE_Informix  && IsTextType($type) )
				return "?";
		}

		if( IsNumberType($type) && !is_numeric($value) )
		{
			$value = trim($value);
			$value = str_replace(",", ".", $value);
			if ( !is_numeric($value) )
				return "NULL";
		}

		if( IsDateFieldType($type) || IsTimeType($type) )
		{
			if( !$value )
				return "NULL";

			// timestamp
			if ( is_int($value) )
			{
				if ( IsDateFieldType($type) )
				{
					$value = getYMDdate($value) . " " . getHISdate($value);
				}
				else if ( IsTimeType($type) )
				{
					$value = getHISdate($value);
				}
			}

			return DB::CurrentConnection()->addDateQuotes( $value );
		}

		if( NeedQuotes($type) )
			return DB::CurrentConnection()->prepareString( $value );

		return $value;
	}

	/**
	 * 	Find table info stored in the project file
	 *
	 */
	protected static function _findDalTable( $table )
	{
		global $dalTables;
		$conn = DB::CurrentConnection();
		$tableName = $conn->getTableNameComponents( $table );

		DB::_fillTablesList();

		//	exact match
		foreach( $dalTables[$conn->connId] as $t )
		{
			if( $t["schema"] == $tableName["schema"] && $t["name"] == $tableName["table"] )
				return $t;
		}

		//	case-insensitive
		$tableName["schema"] = strtoupper( $tableName["schema"] );
		$tableName["table"] = strtoupper( $tableName["table"] );

		foreach( $dalTables[$conn->connId] as $t )
		{
			if( strtoupper( $t["schema"] ) == $tableName["schema"] && strtoupper( $t["name"] ) == $tableName["table"] )
				return $t;
		}
		return null;
	}

	/**
	 * 	Get list of table field names and types
	 *	Check tables stored in the project first, then fetch it from the database.
	 *
	 */
	protected static function _getTableInfo($table)
	{
		global $dal_info, $tableinfo_cache;
		$connId = DB::CurrentConnectionId();

		//	prepare cache
		if( !isset($tableinfo_cache[ $connId ] ) )
			$tableinfo_cache[ $connId ] = array();

		$tableInfo = array();


		$tableDescriptor = DB::_findDalTable( $table );

		if ( $tableDescriptor )
		{
			importTableInfo( $tableDescriptor["varname"] );

			$tableInfo["fields"] = $dal_info[ $tableDescriptor["varname"] ];

			if( $tableDescriptor["schema"] )
				$tableInfo["fullName"] = $tableDescriptor["schema"] . "." . $tableDescriptor["name"];
			else
				$tableInfo["fullName"] = $tableDescriptor["name"];
		}
		else
		{
			//	check cache first
			if( isset($tableinfo_cache[ $connId ][ $table ] ) )
				return $tableinfo_cache[ $connId ][ $table ];

			//	fetch table info from the database
			$helpSql = "select * from " . DB::CurrentConnection()->addTableWrappers( $table ) . " where 1=0";

			$tableInfo["fullName"] = $table;
			$tableInfo["fields"] = array();

			// in case getFieldsList throws error
			$tableinfo_cache[ $connId ][ $table ] = false;

			$fieldList = DB::CurrentConnection()->getFieldsList($helpSql);
			foreach ($fieldList as $f )
			{
				$tableInfo["fields"][ $f["fieldname"] ] = array( "type" => $f["type"], "name" => $f["fieldname"] );
			}
			$tableinfo_cache[ $connId ][ $table ] = $tableInfo;
		}

		return $tableInfo;
	}


	protected static function _fillTablesList()
	{
		global $dalTables;
		$conn = DB::CurrentConnection();
		if( $dalTables[ $conn->connId ] )
			return;
		$dalTables[ $conn->connId ] = array();
		if( "dbct_at_localhost" == $conn->connId )
		{
			$dalTables[$conn->connId][] = array("name" => "contractor_master", "varname" => "dbct_at_localhost__contractor_master", "altvarname" => "contractor_master", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "contrato", "varname" => "dbct_at_localhost__contrato", "altvarname" => "contrato", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "contrato_estados", "varname" => "dbct_at_localhost__contrato_estados", "altvarname" => "contrato_estados", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "contrato_forma_pago", "varname" => "dbct_at_localhost__contrato_forma_pago", "altvarname" => "contrato_forma_pago", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "contrato_tipo", "varname" => "dbct_at_localhost__contrato_tipo", "altvarname" => "contrato_tipo", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "gestioncontratistas_ver_103_audit", "varname" => "dbct_at_localhost__gestioncontratistas_ver_103_audit", "altvarname" => "gestioncontratistas_ver_103_audit", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "gestioncontratistas_ver_103_locking", "varname" => "dbct_at_localhost__gestioncontratistas_ver_103_locking", "altvarname" => "gestioncontratistas_ver_103_locking", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "gestioncontratistas_ver_103_uggroups", "varname" => "dbct_at_localhost__gestioncontratistas_ver_103_uggroups", "altvarname" => "gestioncontratistas_ver_103_uggroups", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "gestioncontratistas_ver_103_ugmembers", "varname" => "dbct_at_localhost__gestioncontratistas_ver_103_ugmembers", "altvarname" => "gestioncontratistas_ver_103_ugmembers", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "gestioncontratistas_ver_103_ugrights", "varname" => "dbct_at_localhost__gestioncontratistas_ver_103_ugrights", "altvarname" => "gestioncontratistas_ver_103_ugrights", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "informe_intersup", "varname" => "dbct_at_localhost__informe_intersup", "altvarname" => "informe_intersup", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "informe_intersup_anexos", "varname" => "dbct_at_localhost__informe_intersup_anexos", "altvarname" => "informe_intersup_anexos", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "informe_intersup_anexos_tipo", "varname" => "dbct_at_localhost__informe_intersup_anexos_tipo", "altvarname" => "informe_intersup_anexos_tipo", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "informe_intersup_estado", "varname" => "dbct_at_localhost__informe_intersup_estado", "altvarname" => "informe_intersup_estado", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "informe_intersup_oe", "varname" => "dbct_at_localhost__informe_intersup_oe", "altvarname" => "informe_intersup_oe", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "interventor_periodos", "varname" => "dbct_at_localhost__interventor_periodos", "altvarname" => "interventor_periodos", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "tipo_banco", "varname" => "dbct_at_localhost__tipo_banco", "altvarname" => "tipo_banco", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "tipo_cta_banco", "varname" => "dbct_at_localhost__tipo_cta_banco", "altvarname" => "tipo_cta_banco", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "tipo_docidentidad", "varname" => "dbct_at_localhost__tipo_docidentidad", "altvarname" => "tipo_docidentidad", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "tipo_regimen", "varname" => "dbct_at_localhost__tipo_regimen", "altvarname" => "tipo_regimen", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "tparam_cajacomp", "varname" => "dbct_at_localhost__tparam_cajacomp", "altvarname" => "tparam_cajacomp", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "tparam_discapacidad", "varname" => "dbct_at_localhost__tparam_discapacidad", "altvarname" => "tparam_discapacidad", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "tparam_fondopension", "varname" => "dbct_at_localhost__tparam_fondopension", "altvarname" => "tparam_fondopension", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "tparam_fondosalud", "varname" => "dbct_at_localhost__tparam_fondosalud", "altvarname" => "tparam_fondosalud", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "tparam_genero", "varname" => "dbct_at_localhost__tparam_genero", "altvarname" => "tparam_genero", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "tparam_sn", "varname" => "dbct_at_localhost__tparam_sn", "altvarname" => "tparam_sn", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "tparam_sn_oe", "varname" => "dbct_at_localhost__tparam_sn_oe", "altvarname" => "tparam_sn_oe", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "tparam_tipo_ct_002", "varname" => "dbct_at_localhost__tparam_tipo_ct_002", "altvarname" => "tparam_tipo_ct_002", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "tparam_tipo_ct_arl", "varname" => "dbct_at_localhost__tparam_tipo_ct_arl", "altvarname" => "tparam_tipo_ct_arl", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		}
		if( "dbusers_at_127_0_0_1" == $conn->connId )
		{
			$dalTables[$conn->connId][] = array("name" => "q_divipola", "varname" => "dbusers_at_127_0_0_1__q_divipola", "altvarname" => "q_divipola", "connId" => "dbusers_at_127_0_0_1", "schema" => "", "connName" => "dbusers at 127.0.0.1");
		}
		if( "edl_at_127_0_0_1" == $conn->connId )
		{
			$dalTables[$conn->connId][] = array("name" => "dependencia", "varname" => "edl_at_127_0_0_1__dependencia", "altvarname" => "dependencia", "connId" => "edl_at_127_0_0_1", "schema" => "", "connName" => "edl at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "dependencias_001", "varname" => "edl_at_127_0_0_1__dependencias_001", "altvarname" => "dependencias_001", "connId" => "edl_at_127_0_0_1", "schema" => "", "connName" => "edl at 127.0.0.1");
		}
	}


	public static function PrepareSQL($sql)
	{
		$args = func_get_args();

		$conn = DB::CurrentConnection();
		$context = RunnerContext::current();

		$tokens = DB::scanTokenString($sql);

		$replacements = array();
		// build array of replacements in this format:
		//	"offset" => position in the string where replacement should be done
		//  "len" => length of original substring to cut out
		//  "insert" => string to insert in place of cut out

		foreach ($tokens["matches"] as $i => $match) {
			$offset = $tokens["offsets"][$i];
			$token = $tokens["tokens"][$i];

			$repl = array(
				"offset" => $offset,
				"len" => strlen($match)
			);

			$val = "";
			if (is_numeric($token) && count( $args ) > $token) {
				$val = $args[(int)$token];
			} else {
				$val = $context->getValue($token);
			}

			/**
			 * Don't ever dare to alter this code!
			 * Everything outside quotes must be converted to number to avoid SQL injection
			 */
			if ($conn->positionQuoted($sql, $offset))
				$repl["insert"] = $conn->addSlashes($val);
			else
				$repl["insert"] = DB::prepareNumberValue($val);

			$replacements[] = $repl;
		}

		//	do replacements
		$offsetShift = 0;
		foreach ($replacements as $r) {
			$sql = substr_replace($sql, $r["insert"], $r["offset"] + $offsetShift, $r["len"]);
			$offsetShift += strlen($r["insert"]) - $r["len"];
		}
		return $sql;
	}

	/**
	 *	@return Array
	 */
	public static function readSQLTokens( $sql )
	{
		$arr = DB::scanTokenString( $sql );
		return $arr["tokens"];
	}

	/**
	 *	@return Array
	 */
	public static function readMasterTokens( $sql )
	{
		$masterTokens = array();

		$allTokens = DB::readSQLTokens( $sql );
		foreach ( $allTokens as $key => $token )
		{
			$dotPos = strpos(  $token, "." );
			if( $dotPos !== FALSE && strtolower( substr( $token, 0, $dotPos ) ) == "master")
			{
				$masterTokens[] = $token;
			}
		}

		return $masterTokens;
	}

	/**
	 *	Scans SQL string, finds all tokens. Returns three arrays - 'tokens', 'matches' and 'offsets'
	 *  Offsets are positions of corresponding 'matches' items in the string
	 *  Example:
	 *  insert into table values (':aaa', :old.bbb, ':{master.order date}')
	 *  tokens: ["aaa", "old.bbb", "master.order date"]
	 *  matches: [":aaa", ":old.bbb", ":{master.order date}"]
	 *  offsets: [28, 35, 46]
	 *
	 *	Exceptions for tokens without {}
	 *	1. shouldn't start with number
	*		:62aaa
	 *	2. shouldn't follow letter
	 *		x:aaa
	 *	3. shouldn't follow :
	 *		::aaa
	 *
 	 *	@return Array [ "tokens" => Array, "matches" => Array, "offsets" => Array ]
	 */
	protected static function scanTokenString($sql)
	{
		$tokens = array();
		$offsets = array();
		$matches = array();

		//	match aaa, old.bbb, master.order date from:
		//	insert into table values (':aaa', :old.bbb, ':{master.order date}')

		$pattern = '/(?:[^\w\:]|^)(\:([a-zA-Z_]{1}[\w\.]*))|\:\{(.*?)\}|(?:[^\w\:]|^)(\:([1-9]+[0-9]*))/';


		$result = findMatches($pattern, $sql);
		foreach ($result as $m) {
			if ($m["submatches"][0] != "") {
				//	first variant, no {}
				$matches[] = $m["submatches"][0];
				$tokens[] = $m["submatches"][1];
				$offsets[] = $m["offset"] + strpos($m["match"], $m["submatches"][0]);
			} else if ($m["submatches"][2] != "") {
				// second variant, in {}
				$matches[] = $m["match"];
				$tokens[] = $m["submatches"][2];
				$offsets[] = $m["offset"];
			} else if ($m["submatches"][3] != "") {
				// third variant, numeric like (:1, ':2')
				$matches[] = $m["submatches"][3];
				$tokens[] = $m["submatches"][4];
				$offsets[] = $m["offset"] + strpos($m["match"], $m["submatches"][3]);
			}
		}

		return array("tokens" => $tokens, "matches" => $matches, "offsets" => $offsets);
	}


	public static function prepareNumberValue( $value )
	{
		$strvalue = (string)$value;
		if(is_numeric($strvalue))
			return str_replace(",",".",$strvalue);
		return 0;
	}

}

?>