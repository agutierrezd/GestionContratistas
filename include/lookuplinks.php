<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

		if( !isset( $lookupTableLinks["cargo"] ) ) {
			$lookupTableLinks["cargo"] = array();
		}
		if( !isset( $lookupTableLinks["cargo"]["funcionario.idCargo"] )) {
			$lookupTableLinks["cargo"]["funcionario.idCargo"] = array();
		}
		$lookupTableLinks["cargo"]["funcionario.idCargo"]["edit"] = array("table" => "funcionario", "field" => "idCargo", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["funcionario.idDependencia"] )) {
			$lookupTableLinks["dependencia"]["funcionario.idDependencia"] = array();
		}
		$lookupTableLinks["dependencia"]["funcionario.idDependencia"]["edit"] = array("table" => "funcionario", "field" => "idDependencia", "page" => "edit");
		if( !isset( $lookupTableLinks["funcionario"] ) ) {
			$lookupTableLinks["funcionario"] = array();
		}
		if( !isset( $lookupTableLinks["funcionario"]["funcionario.idEvaluador"] )) {
			$lookupTableLinks["funcionario"]["funcionario.idEvaluador"] = array();
		}
		$lookupTableLinks["funcionario"]["funcionario.idEvaluador"]["edit"] = array("table" => "funcionario", "field" => "idEvaluador", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato"] ) ) {
			$lookupTableLinks["contrato"] = array();
		}
		if( !isset( $lookupTableLinks["contrato"]["funcionario.idContrato"] )) {
			$lookupTableLinks["contrato"]["funcionario.idContrato"] = array();
		}
		$lookupTableLinks["contrato"]["funcionario.idContrato"]["edit"] = array("table" => "funcionario", "field" => "idContrato", "page" => "edit");
		if( !isset( $lookupTableLinks["nombramiento"] ) ) {
			$lookupTableLinks["nombramiento"] = array();
		}
		if( !isset( $lookupTableLinks["nombramiento"]["funcionario.idNombramiento"] )) {
			$lookupTableLinks["nombramiento"]["funcionario.idNombramiento"] = array();
		}
		$lookupTableLinks["nombramiento"]["funcionario.idNombramiento"]["edit"] = array("table" => "funcionario", "field" => "idNombramiento", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_estados"] ) ) {
			$lookupTableLinks["tparam_estados"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_estados"]["funcionario.estado_funcionario"] )) {
			$lookupTableLinks["tparam_estados"]["funcionario.estado_funcionario"] = array();
		}
		$lookupTableLinks["tparam_estados"]["funcionario.estado_funcionario"]["edit"] = array("table" => "funcionario", "field" => "estado_funcionario", "page" => "edit");
		if( !isset( $lookupTableLinks["funcionario"] ) ) {
			$lookupTableLinks["funcionario"] = array();
		}
		if( !isset( $lookupTableLinks["funcionario"]["global_users.id_fk"] )) {
			$lookupTableLinks["funcionario"]["global_users.id_fk"] = array();
		}
		$lookupTableLinks["funcionario"]["global_users.id_fk"]["edit"] = array("table" => "global_users", "field" => "id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["global_rol_almacen"] ) ) {
			$lookupTableLinks["global_rol_almacen"] = array();
		}
		if( !isset( $lookupTableLinks["global_rol_almacen"]["global_users.global_rol_almacen"] )) {
			$lookupTableLinks["global_rol_almacen"]["global_users.global_rol_almacen"] = array();
		}
		$lookupTableLinks["global_rol_almacen"]["global_users.global_rol_almacen"]["edit"] = array("table" => "global_users", "field" => "global_rol_almacen", "page" => "edit");
		if( !isset( $lookupTableLinks["global_rol_c"] ) ) {
			$lookupTableLinks["global_rol_c"] = array();
		}
		if( !isset( $lookupTableLinks["global_rol_c"]["global_users.global_rol_contratos"] )) {
			$lookupTableLinks["global_rol_c"]["global_users.global_rol_contratos"] = array();
		}
		$lookupTableLinks["global_rol_c"]["global_users.global_rol_contratos"]["edit"] = array("table" => "global_users", "field" => "global_rol_contratos", "page" => "edit");
		if( !isset( $lookupTableLinks["tipo_docidentidad"] ) ) {
			$lookupTableLinks["tipo_docidentidad"] = array();
		}
		if( !isset( $lookupTableLinks["tipo_docidentidad"]["contractor_master.contractor_type"] )) {
			$lookupTableLinks["tipo_docidentidad"]["contractor_master.contractor_type"] = array();
		}
		$lookupTableLinks["tipo_docidentidad"]["contractor_master.contractor_type"]["edit"] = array("table" => "contractor_master", "field" => "contractor_type", "page" => "edit");
		if( !isset( $lookupTableLinks["q_divipola"] ) ) {
			$lookupTableLinks["q_divipola"] = array();
		}
		if( !isset( $lookupTableLinks["q_divipola"]["contractor_master.contractor_city"] )) {
			$lookupTableLinks["q_divipola"]["contractor_master.contractor_city"] = array();
		}
		$lookupTableLinks["q_divipola"]["contractor_master.contractor_city"]["edit"] = array("table" => "contractor_master", "field" => "contractor_city", "page" => "edit");
		if( !isset( $lookupTableLinks["tipo_banco"] ) ) {
			$lookupTableLinks["tipo_banco"] = array();
		}
		if( !isset( $lookupTableLinks["tipo_banco"]["contractor_master.bank_name"] )) {
			$lookupTableLinks["tipo_banco"]["contractor_master.bank_name"] = array();
		}
		$lookupTableLinks["tipo_banco"]["contractor_master.bank_name"]["edit"] = array("table" => "contractor_master", "field" => "bank_name", "page" => "edit");
		if( !isset( $lookupTableLinks["tipo_cta_banco"] ) ) {
			$lookupTableLinks["tipo_cta_banco"] = array();
		}
		if( !isset( $lookupTableLinks["tipo_cta_banco"]["contractor_master.bank_cta_type"] )) {
			$lookupTableLinks["tipo_cta_banco"]["contractor_master.bank_cta_type"] = array();
		}
		$lookupTableLinks["tipo_cta_banco"]["contractor_master.bank_cta_type"]["edit"] = array("table" => "contractor_master", "field" => "bank_cta_type", "page" => "edit");
		if( !isset( $lookupTableLinks["tipo_regimen"] ) ) {
			$lookupTableLinks["tipo_regimen"] = array();
		}
		if( !isset( $lookupTableLinks["tipo_regimen"]["contractor_master.iva_regimen"] )) {
			$lookupTableLinks["tipo_regimen"]["contractor_master.iva_regimen"] = array();
		}
		$lookupTableLinks["tipo_regimen"]["contractor_master.iva_regimen"]["edit"] = array("table" => "contractor_master", "field" => "iva_regimen", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_fondosalud"] ) ) {
			$lookupTableLinks["tparam_fondosalud"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_fondosalud"]["contractor_master.contractor_eps"] )) {
			$lookupTableLinks["tparam_fondosalud"]["contractor_master.contractor_eps"] = array();
		}
		$lookupTableLinks["tparam_fondosalud"]["contractor_master.contractor_eps"]["edit"] = array("table" => "contractor_master", "field" => "contractor_eps", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_fondopension"] ) ) {
			$lookupTableLinks["tparam_fondopension"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_fondopension"]["contractor_master.contractor_fondopensiones"] )) {
			$lookupTableLinks["tparam_fondopension"]["contractor_master.contractor_fondopensiones"] = array();
		}
		$lookupTableLinks["tparam_fondopension"]["contractor_master.contractor_fondopensiones"]["edit"] = array("table" => "contractor_master", "field" => "contractor_fondopensiones", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_cajacomp"] ) ) {
			$lookupTableLinks["tparam_cajacomp"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_cajacomp"]["contractor_master.contractor_cajacompensacion"] )) {
			$lookupTableLinks["tparam_cajacomp"]["contractor_master.contractor_cajacompensacion"] = array();
		}
		$lookupTableLinks["tparam_cajacomp"]["contractor_master.contractor_cajacompensacion"]["edit"] = array("table" => "contractor_master", "field" => "contractor_cajacompensacion", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_tipo_ct_arl"] ) ) {
			$lookupTableLinks["tparam_tipo_ct_arl"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_tipo_ct_arl"]["contractor_master.contractor_arl"] )) {
			$lookupTableLinks["tparam_tipo_ct_arl"]["contractor_master.contractor_arl"] = array();
		}
		$lookupTableLinks["tparam_tipo_ct_arl"]["contractor_master.contractor_arl"]["edit"] = array("table" => "contractor_master", "field" => "contractor_arl", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_genero"] ) ) {
			$lookupTableLinks["tparam_genero"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_genero"]["contractor_master.dem_genero"] )) {
			$lookupTableLinks["tparam_genero"]["contractor_master.dem_genero"] = array();
		}
		$lookupTableLinks["tparam_genero"]["contractor_master.dem_genero"]["edit"] = array("table" => "contractor_master", "field" => "dem_genero", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_discapacidad"] ) ) {
			$lookupTableLinks["tparam_discapacidad"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_discapacidad"]["contractor_master.dem_discapacidad"] )) {
			$lookupTableLinks["tparam_discapacidad"]["contractor_master.dem_discapacidad"] = array();
		}
		$lookupTableLinks["tparam_discapacidad"]["contractor_master.dem_discapacidad"]["edit"] = array("table" => "contractor_master", "field" => "dem_discapacidad", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_sn"] ) ) {
			$lookupTableLinks["tparam_sn"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_sn"]["contractor_master.terms_acepta"] )) {
			$lookupTableLinks["tparam_sn"]["contractor_master.terms_acepta"] = array();
		}
		$lookupTableLinks["tparam_sn"]["contractor_master.terms_acepta"]["edit"] = array("table" => "contractor_master", "field" => "terms_acepta", "page" => "edit");
}

?>