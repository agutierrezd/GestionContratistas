<?php
$strTableName="informe_intersup_anexos_tipo";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="informe_intersup_anexos_tipo";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("informe_intersup_anexos_tipo");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["informe_intersup_anexos_tipo"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>