<?php



$tdatainforme_intersup = array();
$tdatainforme_intersup[".searchableFields"] = array();
$tdatainforme_intersup[".ShortName"] = "informe_intersup";
$tdatainforme_intersup[".OwnerID"] = "";
$tdatainforme_intersup[".OriginalTable"] = "informe_intersup";


$tdatainforme_intersup[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatainforme_intersup[".originalPagesByType"] = $tdatainforme_intersup[".pagesByType"];
$tdatainforme_intersup[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatainforme_intersup[".originalPages"] = $tdatainforme_intersup[".pages"];
$tdatainforme_intersup[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatainforme_intersup[".originalDefaultPages"] = $tdatainforme_intersup[".defaultPages"];

//	field labels
$fieldLabelsinforme_intersup = array();
$fieldToolTipsinforme_intersup = array();
$pageTitlesinforme_intersup = array();
$placeHoldersinforme_intersup = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsinforme_intersup["Spanish"] = array();
	$fieldToolTipsinforme_intersup["Spanish"] = array();
	$placeHoldersinforme_intersup["Spanish"] = array();
	$pageTitlesinforme_intersup["Spanish"] = array();
	$fieldLabelsinforme_intersup["Spanish"]["inf_id"] = "Inf Id";
	$fieldToolTipsinforme_intersup["Spanish"]["inf_id"] = "";
	$placeHoldersinforme_intersup["Spanish"]["inf_id"] = "";
	$fieldLabelsinforme_intersup["Spanish"]["id_cont_fk"] = "Contrato";
	$fieldToolTipsinforme_intersup["Spanish"]["id_cont_fk"] = "";
	$placeHoldersinforme_intersup["Spanish"]["id_cont_fk"] = "";
	$fieldLabelsinforme_intersup["Spanish"]["inf_consecutivo"] = "Consecutivo";
	$fieldToolTipsinforme_intersup["Spanish"]["inf_consecutivo"] = "";
	$placeHoldersinforme_intersup["Spanish"]["inf_consecutivo"] = "";
	$fieldLabelsinforme_intersup["Spanish"]["inf_hash"] = "Código de informe";
	$fieldToolTipsinforme_intersup["Spanish"]["inf_hash"] = "";
	$placeHoldersinforme_intersup["Spanish"]["inf_hash"] = "";
	$fieldLabelsinforme_intersup["Spanish"]["inf_estado"] = "Estado";
	$fieldToolTipsinforme_intersup["Spanish"]["inf_estado"] = "";
	$placeHoldersinforme_intersup["Spanish"]["inf_estado"] = "";
	$fieldLabelsinforme_intersup["Spanish"]["inf_fechapresenta"] = "Inf Fechapresenta";
	$fieldToolTipsinforme_intersup["Spanish"]["inf_fechapresenta"] = "";
	$placeHoldersinforme_intersup["Spanish"]["inf_fechapresenta"] = "";
	$fieldLabelsinforme_intersup["Spanish"]["inf_periodicidad"] = "Inf Periodicidad";
	$fieldToolTipsinforme_intersup["Spanish"]["inf_periodicidad"] = "";
	$placeHoldersinforme_intersup["Spanish"]["inf_periodicidad"] = "";
	$fieldLabelsinforme_intersup["Spanish"]["inf_fecharep_i"] = "Fecha inicial";
	$fieldToolTipsinforme_intersup["Spanish"]["inf_fecharep_i"] = "";
	$placeHoldersinforme_intersup["Spanish"]["inf_fecharep_i"] = "";
	$fieldLabelsinforme_intersup["Spanish"]["inf_fecharep_f"] = "Fecha final";
	$fieldToolTipsinforme_intersup["Spanish"]["inf_fecharep_f"] = "";
	$placeHoldersinforme_intersup["Spanish"]["inf_fecharep_f"] = "";
	$fieldLabelsinforme_intersup["Spanish"]["inf_numerocontrato"] = "Inf Numerocontrato";
	$fieldToolTipsinforme_intersup["Spanish"]["inf_numerocontrato"] = "";
	$placeHoldersinforme_intersup["Spanish"]["inf_numerocontrato"] = "";
	$fieldLabelsinforme_intersup["Spanish"]["inf_doccontratista"] = "Inf Doccontratista";
	$fieldToolTipsinforme_intersup["Spanish"]["inf_doccontratista"] = "";
	$placeHoldersinforme_intersup["Spanish"]["inf_doccontratista"] = "";
	$fieldLabelsinforme_intersup["Spanish"]["inf_nombrecontratista"] = "Inf Nombrecontratista";
	$fieldToolTipsinforme_intersup["Spanish"]["inf_nombrecontratista"] = "";
	$placeHoldersinforme_intersup["Spanish"]["inf_nombrecontratista"] = "";
	$fieldLabelsinforme_intersup["Spanish"]["inf_valorcontrato"] = "Inf Valorcontrato";
	$fieldToolTipsinforme_intersup["Spanish"]["inf_valorcontrato"] = "";
	$placeHoldersinforme_intersup["Spanish"]["inf_valorcontrato"] = "";
	$fieldLabelsinforme_intersup["Spanish"]["inf_adicionreduc"] = "Inf Adicionreduc";
	$fieldToolTipsinforme_intersup["Spanish"]["inf_adicionreduc"] = "";
	$placeHoldersinforme_intersup["Spanish"]["inf_adicionreduc"] = "";
	$fieldLabelsinforme_intersup["Spanish"]["inf_cdp"] = "Inf Cdp";
	$fieldToolTipsinforme_intersup["Spanish"]["inf_cdp"] = "";
	$placeHoldersinforme_intersup["Spanish"]["inf_cdp"] = "";
	$fieldLabelsinforme_intersup["Spanish"]["inf_rp"] = "Inf Rp";
	$fieldToolTipsinforme_intersup["Spanish"]["inf_rp"] = "";
	$placeHoldersinforme_intersup["Spanish"]["inf_rp"] = "";
	$fieldLabelsinforme_intersup["Spanish"]["inf_rubrocode"] = "Inf Rubrocode";
	$fieldToolTipsinforme_intersup["Spanish"]["inf_rubrocode"] = "";
	$placeHoldersinforme_intersup["Spanish"]["inf_rubrocode"] = "";
	$fieldLabelsinforme_intersup["Spanish"]["inf_rubroname"] = "Inf Rubroname";
	$fieldToolTipsinforme_intersup["Spanish"]["inf_rubroname"] = "";
	$placeHoldersinforme_intersup["Spanish"]["inf_rubroname"] = "";
	$fieldLabelsinforme_intersup["Spanish"]["inf_objeto"] = "Inf Objeto";
	$fieldToolTipsinforme_intersup["Spanish"]["inf_objeto"] = "";
	$placeHoldersinforme_intersup["Spanish"]["inf_objeto"] = "";
	$fieldLabelsinforme_intersup["Spanish"]["inf_fechasuscripcion"] = "Inf Fechasuscripcion";
	$fieldToolTipsinforme_intersup["Spanish"]["inf_fechasuscripcion"] = "";
	$placeHoldersinforme_intersup["Spanish"]["inf_fechasuscripcion"] = "";
	$fieldLabelsinforme_intersup["Spanish"]["inf_fechacont_i"] = "Inf Fechacont I";
	$fieldToolTipsinforme_intersup["Spanish"]["inf_fechacont_i"] = "";
	$placeHoldersinforme_intersup["Spanish"]["inf_fechacont_i"] = "";
	$fieldLabelsinforme_intersup["Spanish"]["inf_fechacont_f"] = "Inf Fechacont F";
	$fieldToolTipsinforme_intersup["Spanish"]["inf_fechacont_f"] = "";
	$placeHoldersinforme_intersup["Spanish"]["inf_fechacont_f"] = "";
	$fieldLabelsinforme_intersup["Spanish"]["inf_plazo"] = "Inf Plazo";
	$fieldToolTipsinforme_intersup["Spanish"]["inf_plazo"] = "";
	$placeHoldersinforme_intersup["Spanish"]["inf_plazo"] = "";
	$fieldLabelsinforme_intersup["Spanish"]["inf_vigencia"] = "Inf Vigencia";
	$fieldToolTipsinforme_intersup["Spanish"]["inf_vigencia"] = "";
	$placeHoldersinforme_intersup["Spanish"]["inf_vigencia"] = "";
	$fieldLabelsinforme_intersup["Spanish"]["inf_modificacionesplazo"] = "Inf Modificacionesplazo";
	$fieldToolTipsinforme_intersup["Spanish"]["inf_modificacionesplazo"] = "";
	$placeHoldersinforme_intersup["Spanish"]["inf_modificacionesplazo"] = "";
	$fieldLabelsinforme_intersup["Spanish"]["inf_intersup"] = "Inf Intersup";
	$fieldToolTipsinforme_intersup["Spanish"]["inf_intersup"] = "";
	$placeHoldersinforme_intersup["Spanish"]["inf_intersup"] = "";
	$fieldLabelsinforme_intersup["Spanish"]["inf_nombre"] = "Inf Nombre";
	$fieldToolTipsinforme_intersup["Spanish"]["inf_nombre"] = "";
	$placeHoldersinforme_intersup["Spanish"]["inf_nombre"] = "";
	$fieldLabelsinforme_intersup["Spanish"]["inf_cargo"] = "Inf Cargo";
	$fieldToolTipsinforme_intersup["Spanish"]["inf_cargo"] = "";
	$placeHoldersinforme_intersup["Spanish"]["inf_cargo"] = "";
	$fieldLabelsinforme_intersup["Spanish"]["inf_dependencia"] = "Inf Dependencia";
	$fieldToolTipsinforme_intersup["Spanish"]["inf_dependencia"] = "";
	$placeHoldersinforme_intersup["Spanish"]["inf_dependencia"] = "";
	$fieldLabelsinforme_intersup["Spanish"]["inf_poliza"] = "Inf Poliza";
	$fieldToolTipsinforme_intersup["Spanish"]["inf_poliza"] = "";
	$placeHoldersinforme_intersup["Spanish"]["inf_poliza"] = "";
	$fieldLabelsinforme_intersup["Spanish"]["inf_avgejecucion"] = "Inf Avgejecucion";
	$fieldToolTipsinforme_intersup["Spanish"]["inf_avgejecucion"] = "";
	$placeHoldersinforme_intersup["Spanish"]["inf_avgejecucion"] = "";
	$fieldLabelsinforme_intersup["Spanish"]["inf_actividades"] = "Inf Actividades";
	$fieldToolTipsinforme_intersup["Spanish"]["inf_actividades"] = "";
	$placeHoldersinforme_intersup["Spanish"]["inf_actividades"] = "";
	$fieldLabelsinforme_intersup["Spanish"]["inf_declarainconf"] = "Inf Declarainconf";
	$fieldToolTipsinforme_intersup["Spanish"]["inf_declarainconf"] = "";
	$placeHoldersinforme_intersup["Spanish"]["inf_declarainconf"] = "";
	$fieldLabelsinforme_intersup["Spanish"]["inf_declarainconf_obs"] = "Inf Declarainconf Obs";
	$fieldToolTipsinforme_intersup["Spanish"]["inf_declarainconf_obs"] = "";
	$placeHoldersinforme_intersup["Spanish"]["inf_declarainconf_obs"] = "";
	$fieldLabelsinforme_intersup["Spanish"]["inf_incumplimiento"] = "Inf Incumplimiento";
	$fieldToolTipsinforme_intersup["Spanish"]["inf_incumplimiento"] = "";
	$placeHoldersinforme_intersup["Spanish"]["inf_incumplimiento"] = "";
	$fieldLabelsinforme_intersup["Spanish"]["inf_incumplimiento_obs"] = "Inf Incumplimiento Obs";
	$fieldToolTipsinforme_intersup["Spanish"]["inf_incumplimiento_obs"] = "";
	$placeHoldersinforme_intersup["Spanish"]["inf_incumplimiento_obs"] = "";
	$fieldLabelsinforme_intersup["Spanish"]["inf_ssparafisfecha"] = "Inf Ssparafisfecha";
	$fieldToolTipsinforme_intersup["Spanish"]["inf_ssparafisfecha"] = "";
	$placeHoldersinforme_intersup["Spanish"]["inf_ssparafisfecha"] = "";
	$fieldLabelsinforme_intersup["Spanish"]["inf_ssparafisnplanilla"] = "Inf Ssparafisnplanilla";
	$fieldToolTipsinforme_intersup["Spanish"]["inf_ssparafisnplanilla"] = "";
	$placeHoldersinforme_intersup["Spanish"]["inf_ssparafisnplanilla"] = "";
	$fieldLabelsinforme_intersup["Spanish"]["inf_otrosaspectostecnicos"] = "Inf Otrosaspectostecnicos";
	$fieldToolTipsinforme_intersup["Spanish"]["inf_otrosaspectostecnicos"] = "";
	$placeHoldersinforme_intersup["Spanish"]["inf_otrosaspectostecnicos"] = "";
	$fieldLabelsinforme_intersup["Spanish"]["inf_recomyobserva"] = "Inf Recomyobserva";
	$fieldToolTipsinforme_intersup["Spanish"]["inf_recomyobserva"] = "";
	$placeHoldersinforme_intersup["Spanish"]["inf_recomyobserva"] = "";
	$fieldLabelsinforme_intersup["Spanish"]["sign_date"] = "Sign Date";
	$fieldToolTipsinforme_intersup["Spanish"]["sign_date"] = "";
	$placeHoldersinforme_intersup["Spanish"]["sign_date"] = "";
	$fieldLabelsinforme_intersup["Spanish"]["sign_hash"] = "Sign Hash";
	$fieldToolTipsinforme_intersup["Spanish"]["sign_hash"] = "";
	$placeHoldersinforme_intersup["Spanish"]["sign_hash"] = "";
	$fieldLabelsinforme_intersup["Spanish"]["sign_file"] = "Sign File";
	$fieldToolTipsinforme_intersup["Spanish"]["sign_file"] = "";
	$placeHoldersinforme_intersup["Spanish"]["sign_file"] = "";
	$fieldLabelsinforme_intersup["Spanish"]["sign_mailnot"] = "Sign Mailnot";
	$fieldToolTipsinforme_intersup["Spanish"]["sign_mailnot"] = "";
	$placeHoldersinforme_intersup["Spanish"]["sign_mailnot"] = "";
	$fieldLabelsinforme_intersup["Spanish"]["file_verifica"] = "File Verifica";
	$fieldToolTipsinforme_intersup["Spanish"]["file_verifica"] = "";
	$placeHoldersinforme_intersup["Spanish"]["file_verifica"] = "";
	$fieldLabelsinforme_intersup["Spanish"]["sign_verificacert"] = "Sign Verificacert";
	$fieldToolTipsinforme_intersup["Spanish"]["sign_verificacert"] = "";
	$placeHoldersinforme_intersup["Spanish"]["sign_verificacert"] = "";
	$fieldLabelsinforme_intersup["Spanish"]["cert_date"] = "Cert Date";
	$fieldToolTipsinforme_intersup["Spanish"]["cert_date"] = "";
	$placeHoldersinforme_intersup["Spanish"]["cert_date"] = "";
	$fieldLabelsinforme_intersup["Spanish"]["cert_file"] = "Cert File";
	$fieldToolTipsinforme_intersup["Spanish"]["cert_file"] = "";
	$placeHoldersinforme_intersup["Spanish"]["cert_file"] = "";
	$fieldLabelsinforme_intersup["Spanish"]["cert_mail"] = "Cert Mail";
	$fieldToolTipsinforme_intersup["Spanish"]["cert_mail"] = "";
	$placeHoldersinforme_intersup["Spanish"]["cert_mail"] = "";
	$fieldLabelsinforme_intersup["Spanish"]["cert_compare"] = "Cert Compare";
	$fieldToolTipsinforme_intersup["Spanish"]["cert_compare"] = "";
	$placeHoldersinforme_intersup["Spanish"]["cert_compare"] = "";
	$fieldLabelsinforme_intersup["Spanish"]["inf_ultimopago"] = "Inf Ultimopago";
	$fieldToolTipsinforme_intersup["Spanish"]["inf_ultimopago"] = "";
	$placeHoldersinforme_intersup["Spanish"]["inf_ultimopago"] = "";
	$fieldLabelsinforme_intersup["Spanish"]["sys_date"] = "Sys Date";
	$fieldToolTipsinforme_intersup["Spanish"]["sys_date"] = "";
	$placeHoldersinforme_intersup["Spanish"]["sys_date"] = "";
	if (count($fieldToolTipsinforme_intersup["Spanish"]))
		$tdatainforme_intersup[".isUseToolTips"] = true;
}


	$tdatainforme_intersup[".NCSearch"] = true;



$tdatainforme_intersup[".shortTableName"] = "informe_intersup";
$tdatainforme_intersup[".nSecOptions"] = 0;

$tdatainforme_intersup[".mainTableOwnerID"] = "";
$tdatainforme_intersup[".entityType"] = 0;

$tdatainforme_intersup[".strOriginalTableName"] = "informe_intersup";

	



$tdatainforme_intersup[".showAddInPopup"] = false;

$tdatainforme_intersup[".showEditInPopup"] = false;

$tdatainforme_intersup[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatainforme_intersup[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatainforme_intersup[".listAjax"] = false;
//	temporary
$tdatainforme_intersup[".listAjax"] = false;

	$tdatainforme_intersup[".audit"] = true;

	$tdatainforme_intersup[".locking"] = true;


$pages = $tdatainforme_intersup[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatainforme_intersup[".edit"] = true;
	$tdatainforme_intersup[".afterEditAction"] = 1;
	$tdatainforme_intersup[".closePopupAfterEdit"] = 1;
	$tdatainforme_intersup[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatainforme_intersup[".add"] = true;
$tdatainforme_intersup[".afterAddAction"] = 1;
$tdatainforme_intersup[".closePopupAfterAdd"] = 1;
$tdatainforme_intersup[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatainforme_intersup[".list"] = true;
}



$tdatainforme_intersup[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatainforme_intersup[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatainforme_intersup[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatainforme_intersup[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatainforme_intersup[".printFriendly"] = true;
}



$tdatainforme_intersup[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatainforme_intersup[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatainforme_intersup[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatainforme_intersup[".isUseAjaxSuggest"] = true;

$tdatainforme_intersup[".rowHighlite"] = true;





$tdatainforme_intersup[".ajaxCodeSnippetAdded"] = false;

$tdatainforme_intersup[".buttonsAdded"] = false;

$tdatainforme_intersup[".addPageEvents"] = false;

// use timepicker for search panel
$tdatainforme_intersup[".isUseTimeForSearch"] = false;


$tdatainforme_intersup[".badgeColor"] = "DAA520";


$tdatainforme_intersup[".allSearchFields"] = array();
$tdatainforme_intersup[".filterFields"] = array();
$tdatainforme_intersup[".requiredSearchFields"] = array();

$tdatainforme_intersup[".googleLikeFields"] = array();
$tdatainforme_intersup[".googleLikeFields"][] = "inf_id";
$tdatainforme_intersup[".googleLikeFields"][] = "id_cont_fk";
$tdatainforme_intersup[".googleLikeFields"][] = "inf_consecutivo";
$tdatainforme_intersup[".googleLikeFields"][] = "inf_hash";
$tdatainforme_intersup[".googleLikeFields"][] = "inf_estado";
$tdatainforme_intersup[".googleLikeFields"][] = "inf_fechapresenta";
$tdatainforme_intersup[".googleLikeFields"][] = "inf_periodicidad";
$tdatainforme_intersup[".googleLikeFields"][] = "inf_fecharep_i";
$tdatainforme_intersup[".googleLikeFields"][] = "inf_fecharep_f";
$tdatainforme_intersup[".googleLikeFields"][] = "inf_numerocontrato";
$tdatainforme_intersup[".googleLikeFields"][] = "inf_doccontratista";
$tdatainforme_intersup[".googleLikeFields"][] = "inf_nombrecontratista";
$tdatainforme_intersup[".googleLikeFields"][] = "inf_valorcontrato";
$tdatainforme_intersup[".googleLikeFields"][] = "inf_adicionreduc";
$tdatainforme_intersup[".googleLikeFields"][] = "inf_cdp";
$tdatainforme_intersup[".googleLikeFields"][] = "inf_rp";
$tdatainforme_intersup[".googleLikeFields"][] = "inf_rubrocode";
$tdatainforme_intersup[".googleLikeFields"][] = "inf_rubroname";
$tdatainforme_intersup[".googleLikeFields"][] = "inf_objeto";
$tdatainforme_intersup[".googleLikeFields"][] = "inf_fechasuscripcion";
$tdatainforme_intersup[".googleLikeFields"][] = "inf_fechacont_i";
$tdatainforme_intersup[".googleLikeFields"][] = "inf_fechacont_f";
$tdatainforme_intersup[".googleLikeFields"][] = "inf_plazo";
$tdatainforme_intersup[".googleLikeFields"][] = "inf_vigencia";
$tdatainforme_intersup[".googleLikeFields"][] = "inf_modificacionesplazo";
$tdatainforme_intersup[".googleLikeFields"][] = "inf_intersup";
$tdatainforme_intersup[".googleLikeFields"][] = "inf_nombre";
$tdatainforme_intersup[".googleLikeFields"][] = "inf_cargo";
$tdatainforme_intersup[".googleLikeFields"][] = "inf_dependencia";
$tdatainforme_intersup[".googleLikeFields"][] = "inf_poliza";
$tdatainforme_intersup[".googleLikeFields"][] = "inf_avgejecucion";
$tdatainforme_intersup[".googleLikeFields"][] = "inf_actividades";
$tdatainforme_intersup[".googleLikeFields"][] = "inf_declarainconf";
$tdatainforme_intersup[".googleLikeFields"][] = "inf_declarainconf_obs";
$tdatainforme_intersup[".googleLikeFields"][] = "inf_incumplimiento";
$tdatainforme_intersup[".googleLikeFields"][] = "inf_incumplimiento_obs";
$tdatainforme_intersup[".googleLikeFields"][] = "inf_ssparafisfecha";
$tdatainforme_intersup[".googleLikeFields"][] = "inf_ssparafisnplanilla";
$tdatainforme_intersup[".googleLikeFields"][] = "inf_otrosaspectostecnicos";
$tdatainforme_intersup[".googleLikeFields"][] = "inf_recomyobserva";
$tdatainforme_intersup[".googleLikeFields"][] = "sign_date";
$tdatainforme_intersup[".googleLikeFields"][] = "sign_hash";
$tdatainforme_intersup[".googleLikeFields"][] = "sign_file";
$tdatainforme_intersup[".googleLikeFields"][] = "sign_mailnot";
$tdatainforme_intersup[".googleLikeFields"][] = "file_verifica";
$tdatainforme_intersup[".googleLikeFields"][] = "sign_verificacert";
$tdatainforme_intersup[".googleLikeFields"][] = "cert_date";
$tdatainforme_intersup[".googleLikeFields"][] = "cert_file";
$tdatainforme_intersup[".googleLikeFields"][] = "cert_mail";
$tdatainforme_intersup[".googleLikeFields"][] = "cert_compare";
$tdatainforme_intersup[".googleLikeFields"][] = "inf_ultimopago";
$tdatainforme_intersup[".googleLikeFields"][] = "sys_date";



$tdatainforme_intersup[".tableType"] = "list";

$tdatainforme_intersup[".printerPageOrientation"] = 0;
$tdatainforme_intersup[".nPrinterPageScale"] = 100;

$tdatainforme_intersup[".nPrinterSplitRecords"] = 40;

$tdatainforme_intersup[".geocodingEnabled"] = false;










$tdatainforme_intersup[".pageSize"] = 20;

$tdatainforme_intersup[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatainforme_intersup[".strOrderBy"] = $tstrOrderBy;

$tdatainforme_intersup[".orderindexes"] = array();

$tdatainforme_intersup[".sqlHead"] = "SELECT inf_id,  	id_cont_fk,  	inf_consecutivo,  	inf_hash,  	inf_estado,  	inf_fechapresenta,  	inf_periodicidad,  	inf_fecharep_i,  	inf_fecharep_f,  	inf_numerocontrato,  	inf_doccontratista,  	inf_nombrecontratista,  	inf_valorcontrato,  	inf_adicionreduc,  	inf_cdp,  	inf_rp,  	inf_rubrocode,  	inf_rubroname,  	inf_objeto,  	inf_fechasuscripcion,  	inf_fechacont_i,  	inf_fechacont_f,  	inf_plazo,  	inf_vigencia,  	inf_modificacionesplazo,  	inf_intersup,  	inf_nombre,  	inf_cargo,  	inf_dependencia,  	inf_poliza,  	inf_avgejecucion,  	inf_actividades,  	inf_declarainconf,  	inf_declarainconf_obs,  	inf_incumplimiento,  	inf_incumplimiento_obs,  	inf_ssparafisfecha,  	inf_ssparafisnplanilla,  	inf_otrosaspectostecnicos,  	inf_recomyobserva,  	sign_date,  	sign_hash,  	sign_file,  	sign_mailnot,  	file_verifica,  	sign_verificacert,  	cert_date,  	cert_file,  	cert_mail,  	cert_compare,  	inf_ultimopago,  	sys_date";
$tdatainforme_intersup[".sqlFrom"] = "FROM informe_intersup";
$tdatainforme_intersup[".sqlWhereExpr"] = "";
$tdatainforme_intersup[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatainforme_intersup[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatainforme_intersup[".arrGroupsPerPage"] = $arrGPP;

$tdatainforme_intersup[".highlightSearchResults"] = true;

$tableKeysinforme_intersup = array();
$tableKeysinforme_intersup[] = "inf_id";
$tdatainforme_intersup[".Keys"] = $tableKeysinforme_intersup;


$tdatainforme_intersup[".hideMobileList"] = array();




//	inf_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "inf_id";
	$fdata["GoodName"] = "inf_id";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup","inf_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "inf_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup["inf_id"] = $fdata;
		$tdatainforme_intersup[".searchableFields"][] = "inf_id";
//	id_cont_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_cont_fk";
	$fdata["GoodName"] = "id_cont_fk";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup","id_cont_fk");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "id_cont_fk";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_cont_fk";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "contrato";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_cont";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "id_cont";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup["id_cont_fk"] = $fdata;
		$tdatainforme_intersup[".searchableFields"][] = "id_cont_fk";
//	inf_consecutivo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "inf_consecutivo";
	$fdata["GoodName"] = "inf_consecutivo";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup","inf_consecutivo");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "inf_consecutivo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_consecutivo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup["inf_consecutivo"] = $fdata;
		$tdatainforme_intersup[".searchableFields"][] = "inf_consecutivo";
//	inf_hash
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "inf_hash";
	$fdata["GoodName"] = "inf_hash";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup","inf_hash");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "inf_hash";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_hash";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=10";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup["inf_hash"] = $fdata;
		$tdatainforme_intersup[".searchableFields"][] = "inf_hash";
//	inf_estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "inf_estado";
	$fdata["GoodName"] = "inf_estado";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup","inf_estado");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "inf_estado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_estado";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "informe_intersup_estado";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "estadoi_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "estadoname";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup["inf_estado"] = $fdata;
		$tdatainforme_intersup[".searchableFields"][] = "inf_estado";
//	inf_fechapresenta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "inf_fechapresenta";
	$fdata["GoodName"] = "inf_fechapresenta";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup","inf_fechapresenta");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "inf_fechapresenta";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_fechapresenta";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup["inf_fechapresenta"] = $fdata;
		$tdatainforme_intersup[".searchableFields"][] = "inf_fechapresenta";
//	inf_periodicidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "inf_periodicidad";
	$fdata["GoodName"] = "inf_periodicidad";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup","inf_periodicidad");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "inf_periodicidad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_periodicidad";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup["inf_periodicidad"] = $fdata;
		$tdatainforme_intersup[".searchableFields"][] = "inf_periodicidad";
//	inf_fecharep_i
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "inf_fecharep_i";
	$fdata["GoodName"] = "inf_fecharep_i";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup","inf_fecharep_i");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "inf_fecharep_i";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_fecharep_i";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup["inf_fecharep_i"] = $fdata;
		$tdatainforme_intersup[".searchableFields"][] = "inf_fecharep_i";
//	inf_fecharep_f
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "inf_fecharep_f";
	$fdata["GoodName"] = "inf_fecharep_f";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup","inf_fecharep_f");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "inf_fecharep_f";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_fecharep_f";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup["inf_fecharep_f"] = $fdata;
		$tdatainforme_intersup[".searchableFields"][] = "inf_fecharep_f";
//	inf_numerocontrato
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "inf_numerocontrato";
	$fdata["GoodName"] = "inf_numerocontrato";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup","inf_numerocontrato");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "inf_numerocontrato";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_numerocontrato";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=20";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup["inf_numerocontrato"] = $fdata;
		$tdatainforme_intersup[".searchableFields"][] = "inf_numerocontrato";
//	inf_doccontratista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "inf_doccontratista";
	$fdata["GoodName"] = "inf_doccontratista";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup","inf_doccontratista");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "inf_doccontratista";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_doccontratista";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=15";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup["inf_doccontratista"] = $fdata;
		$tdatainforme_intersup[".searchableFields"][] = "inf_doccontratista";
//	inf_nombrecontratista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "inf_nombrecontratista";
	$fdata["GoodName"] = "inf_nombrecontratista";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup","inf_nombrecontratista");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "inf_nombrecontratista";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_nombrecontratista";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=120";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup["inf_nombrecontratista"] = $fdata;
		$tdatainforme_intersup[".searchableFields"][] = "inf_nombrecontratista";
//	inf_valorcontrato
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "inf_valorcontrato";
	$fdata["GoodName"] = "inf_valorcontrato";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup","inf_valorcontrato");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "inf_valorcontrato";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_valorcontrato";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup["inf_valorcontrato"] = $fdata;
		$tdatainforme_intersup[".searchableFields"][] = "inf_valorcontrato";
//	inf_adicionreduc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "inf_adicionreduc";
	$fdata["GoodName"] = "inf_adicionreduc";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup","inf_adicionreduc");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "inf_adicionreduc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_adicionreduc";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup["inf_adicionreduc"] = $fdata;
		$tdatainforme_intersup[".searchableFields"][] = "inf_adicionreduc";
//	inf_cdp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "inf_cdp";
	$fdata["GoodName"] = "inf_cdp";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup","inf_cdp");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "inf_cdp";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_cdp";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=15";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup["inf_cdp"] = $fdata;
		$tdatainforme_intersup[".searchableFields"][] = "inf_cdp";
//	inf_rp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "inf_rp";
	$fdata["GoodName"] = "inf_rp";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup","inf_rp");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "inf_rp";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_rp";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=20";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup["inf_rp"] = $fdata;
		$tdatainforme_intersup[".searchableFields"][] = "inf_rp";
//	inf_rubrocode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "inf_rubrocode";
	$fdata["GoodName"] = "inf_rubrocode";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup","inf_rubrocode");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "inf_rubrocode";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_rubrocode";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=20";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup["inf_rubrocode"] = $fdata;
		$tdatainforme_intersup[".searchableFields"][] = "inf_rubrocode";
//	inf_rubroname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "inf_rubroname";
	$fdata["GoodName"] = "inf_rubroname";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup","inf_rubroname");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "inf_rubroname";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_rubroname";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=200";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup["inf_rubroname"] = $fdata;
		$tdatainforme_intersup[".searchableFields"][] = "inf_rubroname";
//	inf_objeto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "inf_objeto";
	$fdata["GoodName"] = "inf_objeto";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup","inf_objeto");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "inf_objeto";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_objeto";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup["inf_objeto"] = $fdata;
		$tdatainforme_intersup[".searchableFields"][] = "inf_objeto";
//	inf_fechasuscripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "inf_fechasuscripcion";
	$fdata["GoodName"] = "inf_fechasuscripcion";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup","inf_fechasuscripcion");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "inf_fechasuscripcion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_fechasuscripcion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup["inf_fechasuscripcion"] = $fdata;
		$tdatainforme_intersup[".searchableFields"][] = "inf_fechasuscripcion";
//	inf_fechacont_i
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "inf_fechacont_i";
	$fdata["GoodName"] = "inf_fechacont_i";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup","inf_fechacont_i");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "inf_fechacont_i";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_fechacont_i";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup["inf_fechacont_i"] = $fdata;
		$tdatainforme_intersup[".searchableFields"][] = "inf_fechacont_i";
//	inf_fechacont_f
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "inf_fechacont_f";
	$fdata["GoodName"] = "inf_fechacont_f";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup","inf_fechacont_f");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "inf_fechacont_f";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_fechacont_f";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup["inf_fechacont_f"] = $fdata;
		$tdatainforme_intersup[".searchableFields"][] = "inf_fechacont_f";
//	inf_plazo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "inf_plazo";
	$fdata["GoodName"] = "inf_plazo";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup","inf_plazo");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "inf_plazo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_plazo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup["inf_plazo"] = $fdata;
		$tdatainforme_intersup[".searchableFields"][] = "inf_plazo";
//	inf_vigencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "inf_vigencia";
	$fdata["GoodName"] = "inf_vigencia";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup","inf_vigencia");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "inf_vigencia";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_vigencia";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup["inf_vigencia"] = $fdata;
		$tdatainforme_intersup[".searchableFields"][] = "inf_vigencia";
//	inf_modificacionesplazo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "inf_modificacionesplazo";
	$fdata["GoodName"] = "inf_modificacionesplazo";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup","inf_modificacionesplazo");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "inf_modificacionesplazo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_modificacionesplazo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=500";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup["inf_modificacionesplazo"] = $fdata;
		$tdatainforme_intersup[".searchableFields"][] = "inf_modificacionesplazo";
//	inf_intersup
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "inf_intersup";
	$fdata["GoodName"] = "inf_intersup";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup","inf_intersup");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "inf_intersup";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_intersup";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup["inf_intersup"] = $fdata;
		$tdatainforme_intersup[".searchableFields"][] = "inf_intersup";
//	inf_nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "inf_nombre";
	$fdata["GoodName"] = "inf_nombre";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup","inf_nombre");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "inf_nombre";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_nombre";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=120";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup["inf_nombre"] = $fdata;
		$tdatainforme_intersup[".searchableFields"][] = "inf_nombre";
//	inf_cargo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "inf_cargo";
	$fdata["GoodName"] = "inf_cargo";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup","inf_cargo");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "inf_cargo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_cargo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=120";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup["inf_cargo"] = $fdata;
		$tdatainforme_intersup[".searchableFields"][] = "inf_cargo";
//	inf_dependencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "inf_dependencia";
	$fdata["GoodName"] = "inf_dependencia";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup","inf_dependencia");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "inf_dependencia";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_dependencia";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=120";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup["inf_dependencia"] = $fdata;
		$tdatainforme_intersup[".searchableFields"][] = "inf_dependencia";
//	inf_poliza
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "inf_poliza";
	$fdata["GoodName"] = "inf_poliza";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup","inf_poliza");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "inf_poliza";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_poliza";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup["inf_poliza"] = $fdata;
		$tdatainforme_intersup[".searchableFields"][] = "inf_poliza";
//	inf_avgejecucion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "inf_avgejecucion";
	$fdata["GoodName"] = "inf_avgejecucion";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup","inf_avgejecucion");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "inf_avgejecucion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_avgejecucion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup["inf_avgejecucion"] = $fdata;
		$tdatainforme_intersup[".searchableFields"][] = "inf_avgejecucion";
//	inf_actividades
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "inf_actividades";
	$fdata["GoodName"] = "inf_actividades";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup","inf_actividades");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "inf_actividades";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_actividades";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup["inf_actividades"] = $fdata;
		$tdatainforme_intersup[".searchableFields"][] = "inf_actividades";
//	inf_declarainconf
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "inf_declarainconf";
	$fdata["GoodName"] = "inf_declarainconf";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup","inf_declarainconf");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "inf_declarainconf";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_declarainconf";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup["inf_declarainconf"] = $fdata;
		$tdatainforme_intersup[".searchableFields"][] = "inf_declarainconf";
//	inf_declarainconf_obs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "inf_declarainconf_obs";
	$fdata["GoodName"] = "inf_declarainconf_obs";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup","inf_declarainconf_obs");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "inf_declarainconf_obs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_declarainconf_obs";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup["inf_declarainconf_obs"] = $fdata;
		$tdatainforme_intersup[".searchableFields"][] = "inf_declarainconf_obs";
//	inf_incumplimiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "inf_incumplimiento";
	$fdata["GoodName"] = "inf_incumplimiento";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup","inf_incumplimiento");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "inf_incumplimiento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_incumplimiento";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup["inf_incumplimiento"] = $fdata;
		$tdatainforme_intersup[".searchableFields"][] = "inf_incumplimiento";
//	inf_incumplimiento_obs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "inf_incumplimiento_obs";
	$fdata["GoodName"] = "inf_incumplimiento_obs";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup","inf_incumplimiento_obs");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "inf_incumplimiento_obs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_incumplimiento_obs";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup["inf_incumplimiento_obs"] = $fdata;
		$tdatainforme_intersup[".searchableFields"][] = "inf_incumplimiento_obs";
//	inf_ssparafisfecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "inf_ssparafisfecha";
	$fdata["GoodName"] = "inf_ssparafisfecha";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup","inf_ssparafisfecha");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "inf_ssparafisfecha";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_ssparafisfecha";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup["inf_ssparafisfecha"] = $fdata;
		$tdatainforme_intersup[".searchableFields"][] = "inf_ssparafisfecha";
//	inf_ssparafisnplanilla
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "inf_ssparafisnplanilla";
	$fdata["GoodName"] = "inf_ssparafisnplanilla";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup","inf_ssparafisnplanilla");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "inf_ssparafisnplanilla";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_ssparafisnplanilla";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup["inf_ssparafisnplanilla"] = $fdata;
		$tdatainforme_intersup[".searchableFields"][] = "inf_ssparafisnplanilla";
//	inf_otrosaspectostecnicos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "inf_otrosaspectostecnicos";
	$fdata["GoodName"] = "inf_otrosaspectostecnicos";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup","inf_otrosaspectostecnicos");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "inf_otrosaspectostecnicos";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_otrosaspectostecnicos";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup["inf_otrosaspectostecnicos"] = $fdata;
		$tdatainforme_intersup[".searchableFields"][] = "inf_otrosaspectostecnicos";
//	inf_recomyobserva
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "inf_recomyobserva";
	$fdata["GoodName"] = "inf_recomyobserva";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup","inf_recomyobserva");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "inf_recomyobserva";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_recomyobserva";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup["inf_recomyobserva"] = $fdata;
		$tdatainforme_intersup[".searchableFields"][] = "inf_recomyobserva";
//	sign_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "sign_date";
	$fdata["GoodName"] = "sign_date";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup","sign_date");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "sign_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sign_date";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup["sign_date"] = $fdata;
		$tdatainforme_intersup[".searchableFields"][] = "sign_date";
//	sign_hash
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "sign_hash";
	$fdata["GoodName"] = "sign_hash";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup","sign_hash");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "sign_hash";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sign_hash";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=20";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup["sign_hash"] = $fdata;
		$tdatainforme_intersup[".searchableFields"][] = "sign_hash";
//	sign_file
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "sign_file";
	$fdata["GoodName"] = "sign_file";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup","sign_file");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "sign_file";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sign_file";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup["sign_file"] = $fdata;
		$tdatainforme_intersup[".searchableFields"][] = "sign_file";
//	sign_mailnot
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "sign_mailnot";
	$fdata["GoodName"] = "sign_mailnot";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup","sign_mailnot");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "sign_mailnot";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sign_mailnot";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup["sign_mailnot"] = $fdata;
		$tdatainforme_intersup[".searchableFields"][] = "sign_mailnot";
//	file_verifica
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "file_verifica";
	$fdata["GoodName"] = "file_verifica";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup","file_verifica");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "file_verifica";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "file_verifica";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup["file_verifica"] = $fdata;
		$tdatainforme_intersup[".searchableFields"][] = "file_verifica";
//	sign_verificacert
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "sign_verificacert";
	$fdata["GoodName"] = "sign_verificacert";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup","sign_verificacert");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "sign_verificacert";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sign_verificacert";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup["sign_verificacert"] = $fdata;
		$tdatainforme_intersup[".searchableFields"][] = "sign_verificacert";
//	cert_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "cert_date";
	$fdata["GoodName"] = "cert_date";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup","cert_date");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "cert_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cert_date";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup["cert_date"] = $fdata;
		$tdatainforme_intersup[".searchableFields"][] = "cert_date";
//	cert_file
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "cert_file";
	$fdata["GoodName"] = "cert_file";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup","cert_file");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "cert_file";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cert_file";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup["cert_file"] = $fdata;
		$tdatainforme_intersup[".searchableFields"][] = "cert_file";
//	cert_mail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "cert_mail";
	$fdata["GoodName"] = "cert_mail";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup","cert_mail");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "cert_mail";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cert_mail";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup["cert_mail"] = $fdata;
		$tdatainforme_intersup[".searchableFields"][] = "cert_mail";
//	cert_compare
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "cert_compare";
	$fdata["GoodName"] = "cert_compare";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup","cert_compare");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "cert_compare";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cert_compare";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup["cert_compare"] = $fdata;
		$tdatainforme_intersup[".searchableFields"][] = "cert_compare";
//	inf_ultimopago
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "inf_ultimopago";
	$fdata["GoodName"] = "inf_ultimopago";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup","inf_ultimopago");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "inf_ultimopago";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_ultimopago";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup["inf_ultimopago"] = $fdata;
		$tdatainforme_intersup[".searchableFields"][] = "inf_ultimopago";
//	sys_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "sys_date";
	$fdata["GoodName"] = "sys_date";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup","sys_date");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "sys_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_date";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup["sys_date"] = $fdata;
		$tdatainforme_intersup[".searchableFields"][] = "sys_date";


$tables_data["informe_intersup"]=&$tdatainforme_intersup;
$field_labels["informe_intersup"] = &$fieldLabelsinforme_intersup;
$fieldToolTips["informe_intersup"] = &$fieldToolTipsinforme_intersup;
$placeHolders["informe_intersup"] = &$placeHoldersinforme_intersup;
$page_titles["informe_intersup"] = &$pageTitlesinforme_intersup;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["informe_intersup"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["informe_intersup"] = array();



	
				$strOriginalDetailsTable="contrato";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="contrato";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "contrato";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["informe_intersup"][0] = $masterParams;
				$masterTablesData["informe_intersup"][0]["masterKeys"] = array();
	$masterTablesData["informe_intersup"][0]["masterKeys"][]="id_cont";
				$masterTablesData["informe_intersup"][0]["detailKeys"] = array();
	$masterTablesData["informe_intersup"][0]["detailKeys"][]="id_cont_fk";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_informe_intersup()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "inf_id,  	id_cont_fk,  	inf_consecutivo,  	inf_hash,  	inf_estado,  	inf_fechapresenta,  	inf_periodicidad,  	inf_fecharep_i,  	inf_fecharep_f,  	inf_numerocontrato,  	inf_doccontratista,  	inf_nombrecontratista,  	inf_valorcontrato,  	inf_adicionreduc,  	inf_cdp,  	inf_rp,  	inf_rubrocode,  	inf_rubroname,  	inf_objeto,  	inf_fechasuscripcion,  	inf_fechacont_i,  	inf_fechacont_f,  	inf_plazo,  	inf_vigencia,  	inf_modificacionesplazo,  	inf_intersup,  	inf_nombre,  	inf_cargo,  	inf_dependencia,  	inf_poliza,  	inf_avgejecucion,  	inf_actividades,  	inf_declarainconf,  	inf_declarainconf_obs,  	inf_incumplimiento,  	inf_incumplimiento_obs,  	inf_ssparafisfecha,  	inf_ssparafisnplanilla,  	inf_otrosaspectostecnicos,  	inf_recomyobserva,  	sign_date,  	sign_hash,  	sign_file,  	sign_mailnot,  	file_verifica,  	sign_verificacert,  	cert_date,  	cert_file,  	cert_mail,  	cert_compare,  	inf_ultimopago,  	sys_date";
$proto0["m_strFrom"] = "FROM informe_intersup";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
						;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_id",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup"
));

$proto6["m_sql"] = "inf_id";
$proto6["m_srcTableName"] = "informe_intersup";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_cont_fk",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup"
));

$proto8["m_sql"] = "id_cont_fk";
$proto8["m_srcTableName"] = "informe_intersup";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_consecutivo",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup"
));

$proto10["m_sql"] = "inf_consecutivo";
$proto10["m_srcTableName"] = "informe_intersup";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_hash",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup"
));

$proto12["m_sql"] = "inf_hash";
$proto12["m_srcTableName"] = "informe_intersup";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_estado",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup"
));

$proto14["m_sql"] = "inf_estado";
$proto14["m_srcTableName"] = "informe_intersup";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_fechapresenta",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup"
));

$proto16["m_sql"] = "inf_fechapresenta";
$proto16["m_srcTableName"] = "informe_intersup";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_periodicidad",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup"
));

$proto18["m_sql"] = "inf_periodicidad";
$proto18["m_srcTableName"] = "informe_intersup";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_fecharep_i",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup"
));

$proto20["m_sql"] = "inf_fecharep_i";
$proto20["m_srcTableName"] = "informe_intersup";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_fecharep_f",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup"
));

$proto22["m_sql"] = "inf_fecharep_f";
$proto22["m_srcTableName"] = "informe_intersup";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_numerocontrato",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup"
));

$proto24["m_sql"] = "inf_numerocontrato";
$proto24["m_srcTableName"] = "informe_intersup";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_doccontratista",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup"
));

$proto26["m_sql"] = "inf_doccontratista";
$proto26["m_srcTableName"] = "informe_intersup";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_nombrecontratista",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup"
));

$proto28["m_sql"] = "inf_nombrecontratista";
$proto28["m_srcTableName"] = "informe_intersup";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_valorcontrato",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup"
));

$proto30["m_sql"] = "inf_valorcontrato";
$proto30["m_srcTableName"] = "informe_intersup";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_adicionreduc",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup"
));

$proto32["m_sql"] = "inf_adicionreduc";
$proto32["m_srcTableName"] = "informe_intersup";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_cdp",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup"
));

$proto34["m_sql"] = "inf_cdp";
$proto34["m_srcTableName"] = "informe_intersup";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_rp",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup"
));

$proto36["m_sql"] = "inf_rp";
$proto36["m_srcTableName"] = "informe_intersup";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_rubrocode",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup"
));

$proto38["m_sql"] = "inf_rubrocode";
$proto38["m_srcTableName"] = "informe_intersup";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_rubroname",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup"
));

$proto40["m_sql"] = "inf_rubroname";
$proto40["m_srcTableName"] = "informe_intersup";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_objeto",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup"
));

$proto42["m_sql"] = "inf_objeto";
$proto42["m_srcTableName"] = "informe_intersup";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_fechasuscripcion",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup"
));

$proto44["m_sql"] = "inf_fechasuscripcion";
$proto44["m_srcTableName"] = "informe_intersup";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_fechacont_i",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup"
));

$proto46["m_sql"] = "inf_fechacont_i";
$proto46["m_srcTableName"] = "informe_intersup";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_fechacont_f",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup"
));

$proto48["m_sql"] = "inf_fechacont_f";
$proto48["m_srcTableName"] = "informe_intersup";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_plazo",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup"
));

$proto50["m_sql"] = "inf_plazo";
$proto50["m_srcTableName"] = "informe_intersup";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_vigencia",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup"
));

$proto52["m_sql"] = "inf_vigencia";
$proto52["m_srcTableName"] = "informe_intersup";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_modificacionesplazo",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup"
));

$proto54["m_sql"] = "inf_modificacionesplazo";
$proto54["m_srcTableName"] = "informe_intersup";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_intersup",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup"
));

$proto56["m_sql"] = "inf_intersup";
$proto56["m_srcTableName"] = "informe_intersup";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_nombre",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup"
));

$proto58["m_sql"] = "inf_nombre";
$proto58["m_srcTableName"] = "informe_intersup";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_cargo",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup"
));

$proto60["m_sql"] = "inf_cargo";
$proto60["m_srcTableName"] = "informe_intersup";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_dependencia",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup"
));

$proto62["m_sql"] = "inf_dependencia";
$proto62["m_srcTableName"] = "informe_intersup";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_poliza",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup"
));

$proto64["m_sql"] = "inf_poliza";
$proto64["m_srcTableName"] = "informe_intersup";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_avgejecucion",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup"
));

$proto66["m_sql"] = "inf_avgejecucion";
$proto66["m_srcTableName"] = "informe_intersup";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_actividades",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup"
));

$proto68["m_sql"] = "inf_actividades";
$proto68["m_srcTableName"] = "informe_intersup";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_declarainconf",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup"
));

$proto70["m_sql"] = "inf_declarainconf";
$proto70["m_srcTableName"] = "informe_intersup";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_declarainconf_obs",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup"
));

$proto72["m_sql"] = "inf_declarainconf_obs";
$proto72["m_srcTableName"] = "informe_intersup";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_incumplimiento",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup"
));

$proto74["m_sql"] = "inf_incumplimiento";
$proto74["m_srcTableName"] = "informe_intersup";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_incumplimiento_obs",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup"
));

$proto76["m_sql"] = "inf_incumplimiento_obs";
$proto76["m_srcTableName"] = "informe_intersup";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_ssparafisfecha",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup"
));

$proto78["m_sql"] = "inf_ssparafisfecha";
$proto78["m_srcTableName"] = "informe_intersup";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_ssparafisnplanilla",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup"
));

$proto80["m_sql"] = "inf_ssparafisnplanilla";
$proto80["m_srcTableName"] = "informe_intersup";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_otrosaspectostecnicos",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup"
));

$proto82["m_sql"] = "inf_otrosaspectostecnicos";
$proto82["m_srcTableName"] = "informe_intersup";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_recomyobserva",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup"
));

$proto84["m_sql"] = "inf_recomyobserva";
$proto84["m_srcTableName"] = "informe_intersup";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "sign_date",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup"
));

$proto86["m_sql"] = "sign_date";
$proto86["m_srcTableName"] = "informe_intersup";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "sign_hash",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup"
));

$proto88["m_sql"] = "sign_hash";
$proto88["m_srcTableName"] = "informe_intersup";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "sign_file",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup"
));

$proto90["m_sql"] = "sign_file";
$proto90["m_srcTableName"] = "informe_intersup";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "sign_mailnot",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup"
));

$proto92["m_sql"] = "sign_mailnot";
$proto92["m_srcTableName"] = "informe_intersup";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "file_verifica",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup"
));

$proto94["m_sql"] = "file_verifica";
$proto94["m_srcTableName"] = "informe_intersup";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "sign_verificacert",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup"
));

$proto96["m_sql"] = "sign_verificacert";
$proto96["m_srcTableName"] = "informe_intersup";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "cert_date",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup"
));

$proto98["m_sql"] = "cert_date";
$proto98["m_srcTableName"] = "informe_intersup";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "cert_file",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup"
));

$proto100["m_sql"] = "cert_file";
$proto100["m_srcTableName"] = "informe_intersup";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "cert_mail",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup"
));

$proto102["m_sql"] = "cert_mail";
$proto102["m_srcTableName"] = "informe_intersup";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "cert_compare",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup"
));

$proto104["m_sql"] = "cert_compare";
$proto104["m_srcTableName"] = "informe_intersup";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_ultimopago",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup"
));

$proto106["m_sql"] = "inf_ultimopago";
$proto106["m_srcTableName"] = "informe_intersup";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_date",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup"
));

$proto108["m_sql"] = "sys_date";
$proto108["m_srcTableName"] = "informe_intersup";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto110=array();
$proto110["m_link"] = "SQLL_MAIN";
			$proto111=array();
$proto111["m_strName"] = "informe_intersup";
$proto111["m_srcTableName"] = "informe_intersup";
$proto111["m_columns"] = array();
$proto111["m_columns"][] = "inf_id";
$proto111["m_columns"][] = "id_cont_fk";
$proto111["m_columns"][] = "inf_consecutivo";
$proto111["m_columns"][] = "inf_hash";
$proto111["m_columns"][] = "inf_estado";
$proto111["m_columns"][] = "inf_fechapresenta";
$proto111["m_columns"][] = "inf_periodicidad";
$proto111["m_columns"][] = "inf_fecharep_i";
$proto111["m_columns"][] = "inf_fecharep_f";
$proto111["m_columns"][] = "inf_numerocontrato";
$proto111["m_columns"][] = "inf_doccontratista";
$proto111["m_columns"][] = "inf_nombrecontratista";
$proto111["m_columns"][] = "inf_valorcontrato";
$proto111["m_columns"][] = "inf_adicionreduc";
$proto111["m_columns"][] = "inf_cdp";
$proto111["m_columns"][] = "inf_rp";
$proto111["m_columns"][] = "inf_rubrocode";
$proto111["m_columns"][] = "inf_rubroname";
$proto111["m_columns"][] = "inf_objeto";
$proto111["m_columns"][] = "inf_fechasuscripcion";
$proto111["m_columns"][] = "inf_fechacont_i";
$proto111["m_columns"][] = "inf_fechacont_f";
$proto111["m_columns"][] = "inf_plazo";
$proto111["m_columns"][] = "inf_vigencia";
$proto111["m_columns"][] = "inf_modificacionesplazo";
$proto111["m_columns"][] = "inf_intersup";
$proto111["m_columns"][] = "inf_nombre";
$proto111["m_columns"][] = "inf_cargo";
$proto111["m_columns"][] = "inf_dependencia";
$proto111["m_columns"][] = "inf_poliza";
$proto111["m_columns"][] = "inf_avgejecucion";
$proto111["m_columns"][] = "inf_actividades";
$proto111["m_columns"][] = "inf_declarainconf";
$proto111["m_columns"][] = "inf_declarainconf_obs";
$proto111["m_columns"][] = "inf_incumplimiento";
$proto111["m_columns"][] = "inf_incumplimiento_obs";
$proto111["m_columns"][] = "inf_ssparafisfecha";
$proto111["m_columns"][] = "inf_ssparafisnplanilla";
$proto111["m_columns"][] = "inf_otrosaspectostecnicos";
$proto111["m_columns"][] = "inf_recomyobserva";
$proto111["m_columns"][] = "sign_date";
$proto111["m_columns"][] = "sign_hash";
$proto111["m_columns"][] = "sign_file";
$proto111["m_columns"][] = "sign_mailnot";
$proto111["m_columns"][] = "file_verifica";
$proto111["m_columns"][] = "sign_verificacert";
$proto111["m_columns"][] = "cert_date";
$proto111["m_columns"][] = "cert_file";
$proto111["m_columns"][] = "cert_mail";
$proto111["m_columns"][] = "cert_compare";
$proto111["m_columns"][] = "inf_ultimopago";
$proto111["m_columns"][] = "sys_date";
$obj = new SQLTable($proto111);

$proto110["m_table"] = $obj;
$proto110["m_sql"] = "informe_intersup";
$proto110["m_alias"] = "";
$proto110["m_srcTableName"] = "informe_intersup";
$proto112=array();
$proto112["m_sql"] = "";
$proto112["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto112["m_column"]=$obj;
$proto112["m_contained"] = array();
$proto112["m_strCase"] = "";
$proto112["m_havingmode"] = false;
$proto112["m_inBrackets"] = false;
$proto112["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto112);

$proto110["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto110);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="informe_intersup";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_informe_intersup = createSqlQuery_informe_intersup();


	
						;

																																																				

$tdatainforme_intersup[".sqlquery"] = $queryData_informe_intersup;

$tableEvents["informe_intersup"] = new eventsBase;
$tdatainforme_intersup[".hasEvents"] = false;

?>