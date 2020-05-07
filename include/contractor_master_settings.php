<?php



$tdatacontractor_master = array();
$tdatacontractor_master[".searchableFields"] = array();
$tdatacontractor_master[".ShortName"] = "contractor_master";
$tdatacontractor_master[".OwnerID"] = "contractor_doc_id";
$tdatacontractor_master[".OriginalTable"] = "contractor_master";


$tdatacontractor_master[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacontractor_master[".originalPagesByType"] = $tdatacontractor_master[".pagesByType"];
$tdatacontractor_master[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacontractor_master[".originalPages"] = $tdatacontractor_master[".pages"];
$tdatacontractor_master[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacontractor_master[".originalDefaultPages"] = $tdatacontractor_master[".defaultPages"];

//	field labels
$fieldLabelscontractor_master = array();
$fieldToolTipscontractor_master = array();
$pageTitlescontractor_master = array();
$placeHolderscontractor_master = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscontractor_master["Spanish"] = array();
	$fieldToolTipscontractor_master["Spanish"] = array();
	$placeHolderscontractor_master["Spanish"] = array();
	$pageTitlescontractor_master["Spanish"] = array();
	$fieldLabelscontractor_master["Spanish"]["contractor_id"] = "Contractor Id";
	$fieldToolTipscontractor_master["Spanish"]["contractor_id"] = "";
	$placeHolderscontractor_master["Spanish"]["contractor_id"] = "";
	$fieldLabelscontractor_master["Spanish"]["contractor_type"] = "Tipo de documento";
	$fieldToolTipscontractor_master["Spanish"]["contractor_type"] = "";
	$placeHolderscontractor_master["Spanish"]["contractor_type"] = "";
	$fieldLabelscontractor_master["Spanish"]["contractor_doc_id"] = "Número de documento";
	$fieldToolTipscontractor_master["Spanish"]["contractor_doc_id"] = "";
	$placeHolderscontractor_master["Spanish"]["contractor_doc_id"] = "";
	$fieldLabelscontractor_master["Spanish"]["contractor_doc_dv"] = "Contractor Doc Dv";
	$fieldToolTipscontractor_master["Spanish"]["contractor_doc_dv"] = "";
	$placeHolderscontractor_master["Spanish"]["contractor_doc_dv"] = "";
	$fieldLabelscontractor_master["Spanish"]["contractor_pwd"] = "Contractor Pwd";
	$fieldToolTipscontractor_master["Spanish"]["contractor_pwd"] = "";
	$placeHolderscontractor_master["Spanish"]["contractor_pwd"] = "";
	$fieldLabelscontractor_master["Spanish"]["contractor_image"] = "Foto de perfil";
	$fieldToolTipscontractor_master["Spanish"]["contractor_image"] = "";
	$placeHolderscontractor_master["Spanish"]["contractor_image"] = "";
	$fieldLabelscontractor_master["Spanish"]["contractor_name"] = "Nombres";
	$fieldToolTipscontractor_master["Spanish"]["contractor_name"] = "";
	$placeHolderscontractor_master["Spanish"]["contractor_name"] = "";
	$fieldLabelscontractor_master["Spanish"]["contractor_lname"] = "Apellidos";
	$fieldToolTipscontractor_master["Spanish"]["contractor_lname"] = "";
	$placeHolderscontractor_master["Spanish"]["contractor_lname"] = "";
	$fieldLabelscontractor_master["Spanish"]["contractor_nombresfull"] = "Contractor Nombresfull";
	$fieldToolTipscontractor_master["Spanish"]["contractor_nombresfull"] = "";
	$placeHolderscontractor_master["Spanish"]["contractor_nombresfull"] = "";
	$fieldLabelscontractor_master["Spanish"]["enlace_sigep"] = "Enlace Sigep";
	$fieldToolTipscontractor_master["Spanish"]["enlace_sigep"] = "";
	$placeHolderscontractor_master["Spanish"]["enlace_sigep"] = "";
	$fieldLabelscontractor_master["Spanish"]["contractor_email"] = "Correo electrónico personal";
	$fieldToolTipscontractor_master["Spanish"]["contractor_email"] = "";
	$placeHolderscontractor_master["Spanish"]["contractor_email"] = "";
	$fieldLabelscontractor_master["Spanish"]["contractor_email_mincit"] = "Correo electrónico institucional";
	$fieldToolTipscontractor_master["Spanish"]["contractor_email_mincit"] = "";
	$placeHolderscontractor_master["Spanish"]["contractor_email_mincit"] = "";
	$fieldLabelscontractor_master["Spanish"]["contractor_address"] = "Dirección postal ";
	$fieldToolTipscontractor_master["Spanish"]["contractor_address"] = "";
	$placeHolderscontractor_master["Spanish"]["contractor_address"] = "";
	$fieldLabelscontractor_master["Spanish"]["contractor_phone"] = "Teléfono fijo";
	$fieldToolTipscontractor_master["Spanish"]["contractor_phone"] = "";
	$placeHolderscontractor_master["Spanish"]["contractor_phone"] = "";
	$fieldLabelscontractor_master["Spanish"]["contractor_mobile"] = "Número celular";
	$fieldToolTipscontractor_master["Spanish"]["contractor_mobile"] = "";
	$placeHolderscontractor_master["Spanish"]["contractor_mobile"] = "";
	$fieldLabelscontractor_master["Spanish"]["contractor_city"] = "Ciudad de residencia";
	$fieldToolTipscontractor_master["Spanish"]["contractor_city"] = "";
	$placeHolderscontractor_master["Spanish"]["contractor_city"] = "";
	$fieldLabelscontractor_master["Spanish"]["bank_name"] = "Nombre del banco";
	$fieldToolTipscontractor_master["Spanish"]["bank_name"] = "";
	$placeHolderscontractor_master["Spanish"]["bank_name"] = "";
	$fieldLabelscontractor_master["Spanish"]["bank_cta_type"] = "Clase de cuenta";
	$fieldToolTipscontractor_master["Spanish"]["bank_cta_type"] = "";
	$placeHolderscontractor_master["Spanish"]["bank_cta_type"] = "";
	$fieldLabelscontractor_master["Spanish"]["bank_cta_number"] = "Número de cuenta";
	$fieldToolTipscontractor_master["Spanish"]["bank_cta_number"] = "";
	$placeHolderscontractor_master["Spanish"]["bank_cta_number"] = "";
	$fieldLabelscontractor_master["Spanish"]["iva_regimen"] = "¿Responsable de IVA?";
	$fieldToolTipscontractor_master["Spanish"]["iva_regimen"] = "";
	$placeHolderscontractor_master["Spanish"]["iva_regimen"] = "";
	$fieldLabelscontractor_master["Spanish"]["sys_update"] = "::";
	$fieldToolTipscontractor_master["Spanish"]["sys_update"] = "";
	$placeHolderscontractor_master["Spanish"]["sys_update"] = "";
	$fieldLabelscontractor_master["Spanish"]["sys_user"] = "::";
	$fieldToolTipscontractor_master["Spanish"]["sys_user"] = "";
	$placeHolderscontractor_master["Spanish"]["sys_user"] = "";
	$fieldLabelscontractor_master["Spanish"]["sys_date"] = "::";
	$fieldToolTipscontractor_master["Spanish"]["sys_date"] = "";
	$placeHolderscontractor_master["Spanish"]["sys_date"] = "";
	$fieldLabelscontractor_master["Spanish"]["sys_level"] = "::";
	$fieldToolTipscontractor_master["Spanish"]["sys_level"] = "";
	$placeHolderscontractor_master["Spanish"]["sys_level"] = "";
	$fieldLabelscontractor_master["Spanish"]["sys_status"] = "::";
	$fieldToolTipscontractor_master["Spanish"]["sys_status"] = "";
	$placeHolderscontractor_master["Spanish"]["sys_status"] = "";
	$fieldLabelscontractor_master["Spanish"]["sys_last_upd"] = "::";
	$fieldToolTipscontractor_master["Spanish"]["sys_last_upd"] = "";
	$placeHolderscontractor_master["Spanish"]["sys_last_upd"] = "";
	$fieldLabelscontractor_master["Spanish"]["groupid"] = "::";
	$fieldToolTipscontractor_master["Spanish"]["groupid"] = "";
	$placeHolderscontractor_master["Spanish"]["groupid"] = "";
	$fieldLabelscontractor_master["Spanish"]["active"] = "::";
	$fieldToolTipscontractor_master["Spanish"]["active"] = "";
	$placeHolderscontractor_master["Spanish"]["active"] = "";
	$fieldLabelscontractor_master["Spanish"]["contractor_dependientes"] = "Número de dependientes";
	$fieldToolTipscontractor_master["Spanish"]["contractor_dependientes"] = "";
	$placeHolderscontractor_master["Spanish"]["contractor_dependientes"] = "";
	$fieldLabelscontractor_master["Spanish"]["contractor_medicinapre_file"] = "Anexo de medicina prepagada";
	$fieldToolTipscontractor_master["Spanish"]["contractor_medicinapre_file"] = "";
	$placeHolderscontractor_master["Spanish"]["contractor_medicinapre_file"] = "";
	$fieldLabelscontractor_master["Spanish"]["contractor_picmonetaria_file"] = "Contractor Picmonetaria File";
	$fieldToolTipscontractor_master["Spanish"]["contractor_picmonetaria_file"] = "";
	$placeHolderscontractor_master["Spanish"]["contractor_picmonetaria_file"] = "";
	$fieldLabelscontractor_master["Spanish"]["contractor_decljur"] = "Anexo declaración juramentada";
	$fieldToolTipscontractor_master["Spanish"]["contractor_decljur"] = "";
	$placeHolderscontractor_master["Spanish"]["contractor_decljur"] = "";
	$fieldLabelscontractor_master["Spanish"]["contractor_eps"] = "Eps";
	$fieldToolTipscontractor_master["Spanish"]["contractor_eps"] = "";
	$placeHolderscontractor_master["Spanish"]["contractor_eps"] = "";
	$fieldLabelscontractor_master["Spanish"]["contractor_fondopensiones"] = "Fondo pensiones";
	$fieldToolTipscontractor_master["Spanish"]["contractor_fondopensiones"] = "";
	$placeHolderscontractor_master["Spanish"]["contractor_fondopensiones"] = "";
	$fieldLabelscontractor_master["Spanish"]["contractor_cajacompensacion"] = "Caja compensacion";
	$fieldToolTipscontractor_master["Spanish"]["contractor_cajacompensacion"] = "";
	$placeHolderscontractor_master["Spanish"]["contractor_cajacompensacion"] = "";
	$fieldLabelscontractor_master["Spanish"]["contractor_arl"] = "Arl";
	$fieldToolTipscontractor_master["Spanish"]["contractor_arl"] = "";
	$placeHolderscontractor_master["Spanish"]["contractor_arl"] = "";
	$fieldLabelscontractor_master["Spanish"]["ubica_dep"] = "Ubica Dep";
	$fieldToolTipscontractor_master["Spanish"]["ubica_dep"] = "";
	$placeHolderscontractor_master["Spanish"]["ubica_dep"] = "";
	$fieldLabelscontractor_master["Spanish"]["ubica_extension"] = "Extensión";
	$fieldToolTipscontractor_master["Spanish"]["ubica_extension"] = "";
	$placeHolderscontractor_master["Spanish"]["ubica_extension"] = "";
	$fieldLabelscontractor_master["Spanish"]["dem_genero"] = "Genero";
	$fieldToolTipscontractor_master["Spanish"]["dem_genero"] = "";
	$placeHolderscontractor_master["Spanish"]["dem_genero"] = "";
	$fieldLabelscontractor_master["Spanish"]["dem_ocupacion"] = "Ocupación";
	$fieldToolTipscontractor_master["Spanish"]["dem_ocupacion"] = "";
	$placeHolderscontractor_master["Spanish"]["dem_ocupacion"] = "";
	$fieldLabelscontractor_master["Spanish"]["ct_fecha_nacimiento"] = "Fecha de nacimiento";
	$fieldToolTipscontractor_master["Spanish"]["ct_fecha_nacimiento"] = "";
	$placeHolderscontractor_master["Spanish"]["ct_fecha_nacimiento"] = "";
	$fieldLabelscontractor_master["Spanish"]["ct_nacionalidad"] = "Nacionalidad";
	$fieldToolTipscontractor_master["Spanish"]["ct_nacionalidad"] = "";
	$placeHolderscontractor_master["Spanish"]["ct_nacionalidad"] = "";
	$fieldLabelscontractor_master["Spanish"]["dem_edad"] = "Dem Edad";
	$fieldToolTipscontractor_master["Spanish"]["dem_edad"] = "";
	$placeHolderscontractor_master["Spanish"]["dem_edad"] = "";
	$fieldLabelscontractor_master["Spanish"]["dem_educacion"] = "Dem Educacion";
	$fieldToolTipscontractor_master["Spanish"]["dem_educacion"] = "";
	$placeHolderscontractor_master["Spanish"]["dem_educacion"] = "";
	$fieldLabelscontractor_master["Spanish"]["dem_discapacidad"] = "¿ Presenta algúna discapacidad ? ";
	$fieldToolTipscontractor_master["Spanish"]["dem_discapacidad"] = "";
	$placeHolderscontractor_master["Spanish"]["dem_discapacidad"] = "";
	$fieldLabelscontractor_master["Spanish"]["emergencia"] = "En caso de emergencia contactar a:";
	$fieldToolTipscontractor_master["Spanish"]["emergencia"] = "";
	$placeHolderscontractor_master["Spanish"]["emergencia"] = "";
	$fieldLabelscontractor_master["Spanish"]["terms_msj"] = "Términos y condiciones";
	$fieldToolTipscontractor_master["Spanish"]["terms_msj"] = "";
	$placeHolderscontractor_master["Spanish"]["terms_msj"] = "";
	$fieldLabelscontractor_master["Spanish"]["terms_acepta"] = "Acepto los términos y condiciones";
	$fieldToolTipscontractor_master["Spanish"]["terms_acepta"] = "";
	$placeHolderscontractor_master["Spanish"]["terms_acepta"] = "";
	$fieldLabelscontractor_master["Spanish"]["dem_profesion"] = "Profesión";
	$fieldToolTipscontractor_master["Spanish"]["dem_profesion"] = "";
	$placeHolderscontractor_master["Spanish"]["dem_profesion"] = "";
	$pageTitlescontractor_master["Spanish"]["edit"] = "ID: [{%contractor_id}, {%contractor_doc_id}]";
	if (count($fieldToolTipscontractor_master["Spanish"]))
		$tdatacontractor_master[".isUseToolTips"] = true;
}


	$tdatacontractor_master[".NCSearch"] = true;



$tdatacontractor_master[".shortTableName"] = "contractor_master";
$tdatacontractor_master[".nSecOptions"] = 1;

$tdatacontractor_master[".mainTableOwnerID"] = "contractor_doc_id";
$tdatacontractor_master[".entityType"] = 0;

$tdatacontractor_master[".strOriginalTableName"] = "contractor_master";

	



$tdatacontractor_master[".showAddInPopup"] = false;

$tdatacontractor_master[".showEditInPopup"] = false;

$tdatacontractor_master[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacontractor_master[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacontractor_master[".listAjax"] = false;
//	temporary
$tdatacontractor_master[".listAjax"] = false;

	$tdatacontractor_master[".audit"] = true;

	$tdatacontractor_master[".locking"] = true;


$pages = $tdatacontractor_master[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacontractor_master[".edit"] = true;
	$tdatacontractor_master[".afterEditAction"] = 1;
	$tdatacontractor_master[".closePopupAfterEdit"] = 1;
	$tdatacontractor_master[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacontractor_master[".add"] = true;
$tdatacontractor_master[".afterAddAction"] = 1;
$tdatacontractor_master[".closePopupAfterAdd"] = 1;
$tdatacontractor_master[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacontractor_master[".list"] = true;
}



$tdatacontractor_master[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacontractor_master[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacontractor_master[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacontractor_master[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacontractor_master[".printFriendly"] = true;
}



$tdatacontractor_master[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacontractor_master[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacontractor_master[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacontractor_master[".isUseAjaxSuggest"] = true;

$tdatacontractor_master[".rowHighlite"] = true;





$tdatacontractor_master[".ajaxCodeSnippetAdded"] = false;

$tdatacontractor_master[".buttonsAdded"] = false;

$tdatacontractor_master[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacontractor_master[".isUseTimeForSearch"] = false;


$tdatacontractor_master[".badgeColor"] = "00C2C5";


$tdatacontractor_master[".allSearchFields"] = array();
$tdatacontractor_master[".filterFields"] = array();
$tdatacontractor_master[".requiredSearchFields"] = array();

$tdatacontractor_master[".googleLikeFields"] = array();
$tdatacontractor_master[".googleLikeFields"][] = "contractor_id";
$tdatacontractor_master[".googleLikeFields"][] = "contractor_type";
$tdatacontractor_master[".googleLikeFields"][] = "contractor_doc_id";
$tdatacontractor_master[".googleLikeFields"][] = "contractor_doc_dv";
$tdatacontractor_master[".googleLikeFields"][] = "contractor_pwd";
$tdatacontractor_master[".googleLikeFields"][] = "contractor_image";
$tdatacontractor_master[".googleLikeFields"][] = "contractor_name";
$tdatacontractor_master[".googleLikeFields"][] = "contractor_lname";
$tdatacontractor_master[".googleLikeFields"][] = "contractor_nombresfull";
$tdatacontractor_master[".googleLikeFields"][] = "enlace_sigep";
$tdatacontractor_master[".googleLikeFields"][] = "contractor_email";
$tdatacontractor_master[".googleLikeFields"][] = "contractor_email_mincit";
$tdatacontractor_master[".googleLikeFields"][] = "contractor_address";
$tdatacontractor_master[".googleLikeFields"][] = "contractor_phone";
$tdatacontractor_master[".googleLikeFields"][] = "contractor_mobile";
$tdatacontractor_master[".googleLikeFields"][] = "contractor_city";
$tdatacontractor_master[".googleLikeFields"][] = "bank_name";
$tdatacontractor_master[".googleLikeFields"][] = "bank_cta_type";
$tdatacontractor_master[".googleLikeFields"][] = "bank_cta_number";
$tdatacontractor_master[".googleLikeFields"][] = "iva_regimen";
$tdatacontractor_master[".googleLikeFields"][] = "sys_update";
$tdatacontractor_master[".googleLikeFields"][] = "sys_user";
$tdatacontractor_master[".googleLikeFields"][] = "sys_date";
$tdatacontractor_master[".googleLikeFields"][] = "sys_level";
$tdatacontractor_master[".googleLikeFields"][] = "sys_status";
$tdatacontractor_master[".googleLikeFields"][] = "sys_last_upd";
$tdatacontractor_master[".googleLikeFields"][] = "groupid";
$tdatacontractor_master[".googleLikeFields"][] = "active";
$tdatacontractor_master[".googleLikeFields"][] = "contractor_dependientes";
$tdatacontractor_master[".googleLikeFields"][] = "contractor_medicinapre_file";
$tdatacontractor_master[".googleLikeFields"][] = "contractor_picmonetaria_file";
$tdatacontractor_master[".googleLikeFields"][] = "contractor_decljur";
$tdatacontractor_master[".googleLikeFields"][] = "contractor_eps";
$tdatacontractor_master[".googleLikeFields"][] = "contractor_fondopensiones";
$tdatacontractor_master[".googleLikeFields"][] = "contractor_cajacompensacion";
$tdatacontractor_master[".googleLikeFields"][] = "contractor_arl";
$tdatacontractor_master[".googleLikeFields"][] = "ubica_dep";
$tdatacontractor_master[".googleLikeFields"][] = "ubica_extension";
$tdatacontractor_master[".googleLikeFields"][] = "dem_genero";
$tdatacontractor_master[".googleLikeFields"][] = "dem_ocupacion";
$tdatacontractor_master[".googleLikeFields"][] = "dem_profesion";
$tdatacontractor_master[".googleLikeFields"][] = "ct_fecha_nacimiento";
$tdatacontractor_master[".googleLikeFields"][] = "ct_nacionalidad";
$tdatacontractor_master[".googleLikeFields"][] = "dem_edad";
$tdatacontractor_master[".googleLikeFields"][] = "dem_educacion";
$tdatacontractor_master[".googleLikeFields"][] = "dem_discapacidad";
$tdatacontractor_master[".googleLikeFields"][] = "emergencia";
$tdatacontractor_master[".googleLikeFields"][] = "terms_msj";
$tdatacontractor_master[".googleLikeFields"][] = "terms_acepta";



$tdatacontractor_master[".tableType"] = "list";

$tdatacontractor_master[".printerPageOrientation"] = 0;
$tdatacontractor_master[".nPrinterPageScale"] = 100;

$tdatacontractor_master[".nPrinterSplitRecords"] = 40;

$tdatacontractor_master[".geocodingEnabled"] = false;










$tdatacontractor_master[".pageSize"] = 20;

$tdatacontractor_master[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacontractor_master[".strOrderBy"] = $tstrOrderBy;

$tdatacontractor_master[".orderindexes"] = array();

$tdatacontractor_master[".sqlHead"] = "SELECT contractor_id,  	contractor_type,  	contractor_doc_id,  	contractor_doc_dv,  	contractor_pwd,  	contractor_image,  	contractor_name,  	contractor_lname,  	contractor_nombresfull,  	enlace_sigep,  	contractor_email,  	contractor_email_mincit,  	contractor_address,  	contractor_phone,  	contractor_mobile,  	contractor_city,  	bank_name,  	bank_cta_type,  	bank_cta_number,  	iva_regimen,  	sys_update,  	sys_user,  	sys_date,  	sys_level,  	sys_status,  	sys_last_upd,  	groupid,  	active,  	contractor_dependientes,  	contractor_medicinapre_file,  	contractor_picmonetaria_file,  	contractor_decljur,  	contractor_eps,  	contractor_fondopensiones,  	contractor_cajacompensacion,  	contractor_arl,  	ubica_dep,  	ubica_extension,  	dem_genero,  	dem_ocupacion,  	dem_profesion,  	ct_fecha_nacimiento,  	ct_nacionalidad,  	dem_edad,  	dem_educacion,  	dem_discapacidad,  	emergencia,  	terms_msj,  	terms_acepta";
$tdatacontractor_master[".sqlFrom"] = "FROM contractor_master";
$tdatacontractor_master[".sqlWhereExpr"] = "";
$tdatacontractor_master[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacontractor_master[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacontractor_master[".arrGroupsPerPage"] = $arrGPP;

$tdatacontractor_master[".highlightSearchResults"] = true;

$tableKeyscontractor_master = array();
$tableKeyscontractor_master[] = "contractor_id";
$tableKeyscontractor_master[] = "contractor_doc_id";
$tdatacontractor_master[".Keys"] = $tableKeyscontractor_master;


$tdatacontractor_master[".hideMobileList"] = array();




//	contractor_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "contractor_id";
	$fdata["GoodName"] = "contractor_id";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master","contractor_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "contractor_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_id";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdatacontractor_master["contractor_id"] = $fdata;
		$tdatacontractor_master[".searchableFields"][] = "contractor_id";
//	contractor_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "contractor_type";
	$fdata["GoodName"] = "contractor_type";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master","contractor_type");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "contractor_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_type";

	
	
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
	$edata["LookupTable"] = "tipo_docidentidad";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "nombre";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "nombre";

	

	
	$edata["LookupOrderBy"] = "nombre";

	
	
	
	

	
	
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


	$tdatacontractor_master["contractor_type"] = $fdata;
		$tdatacontractor_master[".searchableFields"][] = "contractor_type";
//	contractor_doc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "contractor_doc_id";
	$fdata["GoodName"] = "contractor_doc_id";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master","contractor_doc_id");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "contractor_doc_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_doc_id";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdatacontractor_master["contractor_doc_id"] = $fdata;
		$tdatacontractor_master[".searchableFields"][] = "contractor_doc_id";
//	contractor_doc_dv
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "contractor_doc_dv";
	$fdata["GoodName"] = "contractor_doc_dv";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master","contractor_doc_dv");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "contractor_doc_dv";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_doc_dv";

	
	
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


	$tdatacontractor_master["contractor_doc_dv"] = $fdata;
		$tdatacontractor_master[".searchableFields"][] = "contractor_doc_dv";
//	contractor_pwd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "contractor_pwd";
	$fdata["GoodName"] = "contractor_pwd";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master","contractor_pwd");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "contractor_pwd";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_pwd";

	
	
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

	$edata = array("EditFormat" => "Password");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
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


	$tdatacontractor_master["contractor_pwd"] = $fdata;
		$tdatacontractor_master[".searchableFields"][] = "contractor_pwd";
//	contractor_image
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "contractor_image";
	$fdata["GoodName"] = "contractor_image";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master","contractor_image");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "contractor_image";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_image";

		$fdata["DeleteAssociatedFile"] = true;

	
				$fdata["UploadFolder"] = "foto_perfil";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "File-based Image");

	
	
				$vdata["ShowThumbnail"] = true;
	$vdata["ThumbWidth"] = 200;
	$vdata["ThumbHeight"] = 150;
	$vdata["ImageWidth"] = 600;
	$vdata["ImageHeight"] = 400;

			$vdata["multipleImgMode"] = 1;
	$vdata["maxImages"] = 0;

			$vdata["showGallery"] = true;
	$vdata["galleryMode"] = 2;
	$vdata["captionMode"] = 2;
	$vdata["captionField"] = "";

	$vdata["imageBorder"] = 1;
	$vdata["imageFullWidth"] = 1;


	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
							$edata["acceptFileTypes"] = "jpg";
			$edata["acceptFileTypesHtml"] = ".jpg";
						$edata["acceptFileTypes"] .= "|png";
			$edata["acceptFileTypesHtml"] .= ",.png";
		$edata["acceptFileTypes"] = "(".$edata["acceptFileTypes"].")$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 250;

			
	
	
	
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


	$tdatacontractor_master["contractor_image"] = $fdata;
		$tdatacontractor_master[".searchableFields"][] = "contractor_image";
//	contractor_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "contractor_name";
	$fdata["GoodName"] = "contractor_name";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master","contractor_name");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "contractor_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_name";

	
	
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


	$tdatacontractor_master["contractor_name"] = $fdata;
		$tdatacontractor_master[".searchableFields"][] = "contractor_name";
//	contractor_lname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "contractor_lname";
	$fdata["GoodName"] = "contractor_lname";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master","contractor_lname");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "contractor_lname";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_lname";

	
	
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


	$tdatacontractor_master["contractor_lname"] = $fdata;
		$tdatacontractor_master[".searchableFields"][] = "contractor_lname";
//	contractor_nombresfull
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "contractor_nombresfull";
	$fdata["GoodName"] = "contractor_nombresfull";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master","contractor_nombresfull");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "contractor_nombresfull";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_nombresfull";

	
	
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


	$tdatacontractor_master["contractor_nombresfull"] = $fdata;
		$tdatacontractor_master[".searchableFields"][] = "contractor_nombresfull";
//	enlace_sigep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "enlace_sigep";
	$fdata["GoodName"] = "enlace_sigep";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master","enlace_sigep");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "enlace_sigep";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "enlace_sigep";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Hyperlink");

	
	
	
	
				$vdata["hlType"] = 0;
	$vdata["hlLinkWordNameType"] = "Text";
	$vdata["hlLinkWordText"] = "Link";
	$vdata["hlTitleField"] = "";

	
	
	
	
	
	
	
	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "url";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

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


	$tdatacontractor_master["enlace_sigep"] = $fdata;
		$tdatacontractor_master[".searchableFields"][] = "enlace_sigep";
//	contractor_email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "contractor_email";
	$fdata["GoodName"] = "contractor_email";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master","contractor_email");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "contractor_email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_email";

	
	
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


	$tdatacontractor_master["contractor_email"] = $fdata;
		$tdatacontractor_master[".searchableFields"][] = "contractor_email";
//	contractor_email_mincit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "contractor_email_mincit";
	$fdata["GoodName"] = "contractor_email_mincit";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master","contractor_email_mincit");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "contractor_email_mincit";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_email_mincit";

	
	
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


	$tdatacontractor_master["contractor_email_mincit"] = $fdata;
		$tdatacontractor_master[".searchableFields"][] = "contractor_email_mincit";
//	contractor_address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "contractor_address";
	$fdata["GoodName"] = "contractor_address";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master","contractor_address");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "contractor_address";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_address";

	
	
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


	$tdatacontractor_master["contractor_address"] = $fdata;
		$tdatacontractor_master[".searchableFields"][] = "contractor_address";
//	contractor_phone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "contractor_phone";
	$fdata["GoodName"] = "contractor_phone";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master","contractor_phone");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "contractor_phone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_phone";

	
	
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


	$tdatacontractor_master["contractor_phone"] = $fdata;
		$tdatacontractor_master[".searchableFields"][] = "contractor_phone";
//	contractor_mobile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "contractor_mobile";
	$fdata["GoodName"] = "contractor_mobile";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master","contractor_mobile");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "contractor_mobile";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_mobile";

	
	
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


	$tdatacontractor_master["contractor_mobile"] = $fdata;
		$tdatacontractor_master[".searchableFields"][] = "contractor_mobile";
//	contractor_city
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "contractor_city";
	$fdata["GoodName"] = "contractor_city";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master","contractor_city");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "contractor_city";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_city";

	
	
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
	$edata["LookupTable"] = "q_divipola";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "CODMUN";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "NOMMUNICIPIO";

	

	
	$edata["LookupOrderBy"] = "CODMUN";

	
	
	
	

	
	
	
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


	$tdatacontractor_master["contractor_city"] = $fdata;
		$tdatacontractor_master[".searchableFields"][] = "contractor_city";
//	bank_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "bank_name";
	$fdata["GoodName"] = "bank_name";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master","bank_name");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "bank_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bank_name";

	
	
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
	$edata["LookupTable"] = "tipo_banco";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "banco_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "nom_banco";

	

	
	$edata["LookupOrderBy"] = "nom_banco";

	
	
	
	

	
	
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


	$tdatacontractor_master["bank_name"] = $fdata;
		$tdatacontractor_master[".searchableFields"][] = "bank_name";
//	bank_cta_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "bank_cta_type";
	$fdata["GoodName"] = "bank_cta_type";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master","bank_cta_type");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "bank_cta_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bank_cta_type";

	
	
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
	$edata["LookupTable"] = "tipo_cta_banco";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "cta_tipotext";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "des_cuenta";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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


	$tdatacontractor_master["bank_cta_type"] = $fdata;
		$tdatacontractor_master[".searchableFields"][] = "bank_cta_type";
//	bank_cta_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "bank_cta_number";
	$fdata["GoodName"] = "bank_cta_number";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master","bank_cta_number");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "bank_cta_number";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bank_cta_number";

	
	
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


	$tdatacontractor_master["bank_cta_number"] = $fdata;
		$tdatacontractor_master[".searchableFields"][] = "bank_cta_number";
//	iva_regimen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "iva_regimen";
	$fdata["GoodName"] = "iva_regimen";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master","iva_regimen");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "iva_regimen";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "iva_regimen";

	
	
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
	$edata["LookupTable"] = "tipo_regimen";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "codigo";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "nom_regimen";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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


	$tdatacontractor_master["iva_regimen"] = $fdata;
		$tdatacontractor_master[".searchableFields"][] = "iva_regimen";
//	sys_update
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "sys_update";
	$fdata["GoodName"] = "sys_update";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master","sys_update");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "sys_update";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_update";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
		$edata["autoUpdatable"] = true;

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


	$tdatacontractor_master["sys_update"] = $fdata;
		$tdatacontractor_master[".searchableFields"][] = "sys_update";
//	sys_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "sys_user";
	$fdata["GoodName"] = "sys_user";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master","sys_user");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "sys_user";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_user";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
		$edata["autoUpdatable"] = true;

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


	$tdatacontractor_master["sys_user"] = $fdata;
		$tdatacontractor_master[".searchableFields"][] = "sys_user";
//	sys_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "sys_date";
	$fdata["GoodName"] = "sys_date";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master","sys_date");
	$fdata["FieldType"] = 7;

	
	
	
			

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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
		$edata["autoUpdatable"] = true;

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


	$tdatacontractor_master["sys_date"] = $fdata;
		$tdatacontractor_master[".searchableFields"][] = "sys_date";
//	sys_level
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "sys_level";
	$fdata["GoodName"] = "sys_level";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master","sys_level");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "sys_level";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_level";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
		$edata["autoUpdatable"] = true;

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


	$tdatacontractor_master["sys_level"] = $fdata;
		$tdatacontractor_master[".searchableFields"][] = "sys_level";
//	sys_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "sys_status";
	$fdata["GoodName"] = "sys_status";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master","sys_status");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "sys_status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_status";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
		$edata["autoUpdatable"] = true;

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


	$tdatacontractor_master["sys_status"] = $fdata;
		$tdatacontractor_master[".searchableFields"][] = "sys_status";
//	sys_last_upd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "sys_last_upd";
	$fdata["GoodName"] = "sys_last_upd";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master","sys_last_upd");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "sys_last_upd";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_last_upd";

	
	
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


	$tdatacontractor_master["sys_last_upd"] = $fdata;
		$tdatacontractor_master[".searchableFields"][] = "sys_last_upd";
//	groupid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "groupid";
	$fdata["GoodName"] = "groupid";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master","groupid");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "groupid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "groupid";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
		$edata["autoUpdatable"] = true;

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


	$tdatacontractor_master["groupid"] = $fdata;
		$tdatacontractor_master[".searchableFields"][] = "groupid";
//	active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "active";
	$fdata["GoodName"] = "active";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master","active");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "active";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "active";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
		$edata["autoUpdatable"] = true;

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


	$tdatacontractor_master["active"] = $fdata;
		$tdatacontractor_master[".searchableFields"][] = "active";
//	contractor_dependientes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "contractor_dependientes";
	$fdata["GoodName"] = "contractor_dependientes";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master","contractor_dependientes");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "contractor_dependientes";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_dependientes";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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


	$tdatacontractor_master["contractor_dependientes"] = $fdata;
		$tdatacontractor_master[".searchableFields"][] = "contractor_dependientes";
//	contractor_medicinapre_file
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "contractor_medicinapre_file";
	$fdata["GoodName"] = "contractor_medicinapre_file";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master","contractor_medicinapre_file");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "contractor_medicinapre_file";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_medicinapre_file";

		$fdata["DeleteAssociatedFile"] = true;

	
				$fdata["UploadFolder"] = "documentos";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
								$vdata["ShowIcon"] = true;
		
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
							$edata["acceptFileTypes"] = "pdf";
			$edata["acceptFileTypesHtml"] = ".pdf";
		$edata["acceptFileTypes"] = "(".$edata["acceptFileTypes"].")$";

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


	$tdatacontractor_master["contractor_medicinapre_file"] = $fdata;
		$tdatacontractor_master[".searchableFields"][] = "contractor_medicinapre_file";
//	contractor_picmonetaria_file
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "contractor_picmonetaria_file";
	$fdata["GoodName"] = "contractor_picmonetaria_file";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master","contractor_picmonetaria_file");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "contractor_picmonetaria_file";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_picmonetaria_file";

	
	
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


	$tdatacontractor_master["contractor_picmonetaria_file"] = $fdata;
		$tdatacontractor_master[".searchableFields"][] = "contractor_picmonetaria_file";
//	contractor_decljur
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "contractor_decljur";
	$fdata["GoodName"] = "contractor_decljur";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master","contractor_decljur");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "contractor_decljur";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_decljur";

		$fdata["DeleteAssociatedFile"] = true;

	
				$fdata["UploadFolder"] = "documentos";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
								$vdata["ShowIcon"] = true;
		
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



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


	$tdatacontractor_master["contractor_decljur"] = $fdata;
		$tdatacontractor_master[".searchableFields"][] = "contractor_decljur";
//	contractor_eps
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "contractor_eps";
	$fdata["GoodName"] = "contractor_eps";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master","contractor_eps");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "contractor_eps";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_eps";

	
	
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
	$edata["LookupTable"] = "tparam_fondosalud";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "tfo_cdfdosal_b";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "tfo_dsfdosal_b";

	

	
	$edata["LookupOrderBy"] = "tfo_dsfdosal_b";

	
	
	
	

	
	
	
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


	$tdatacontractor_master["contractor_eps"] = $fdata;
		$tdatacontractor_master[".searchableFields"][] = "contractor_eps";
//	contractor_fondopensiones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "contractor_fondopensiones";
	$fdata["GoodName"] = "contractor_fondopensiones";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master","contractor_fondopensiones");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "contractor_fondopensiones";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_fondopensiones";

	
	
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
	$edata["LookupTable"] = "tparam_fondopension";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "tfo_cdfdoces_b";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "tfo_dsfdoces_b";

	

	
	$edata["LookupOrderBy"] = "tfo_dsfdoces_b";

	
	
	
	

	
	
	
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


	$tdatacontractor_master["contractor_fondopensiones"] = $fdata;
		$tdatacontractor_master[".searchableFields"][] = "contractor_fondopensiones";
//	contractor_cajacompensacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "contractor_cajacompensacion";
	$fdata["GoodName"] = "contractor_cajacompensacion";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master","contractor_cajacompensacion");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "contractor_cajacompensacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_cajacompensacion";

	
	
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
	$edata["LookupTable"] = "tparam_cajacomp";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "caj_cdcajcom_b";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "caj_dscajcom_b";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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


	$tdatacontractor_master["contractor_cajacompensacion"] = $fdata;
		$tdatacontractor_master[".searchableFields"][] = "contractor_cajacompensacion";
//	contractor_arl
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "contractor_arl";
	$fdata["GoodName"] = "contractor_arl";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master","contractor_arl");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "contractor_arl";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_arl";

	
	
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
	$edata["LookupTable"] = "tparam_tipo_ct_arl";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "arl_id";
	$edata["LinkFieldType"] = 16;
	$edata["DisplayField"] = "nombre_arl";

	

	
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


	$tdatacontractor_master["contractor_arl"] = $fdata;
		$tdatacontractor_master[".searchableFields"][] = "contractor_arl";
//	ubica_dep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "ubica_dep";
	$fdata["GoodName"] = "ubica_dep";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master","ubica_dep");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "ubica_dep";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ubica_dep";

	
	
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


	$tdatacontractor_master["ubica_dep"] = $fdata;
		$tdatacontractor_master[".searchableFields"][] = "ubica_dep";
//	ubica_extension
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "ubica_extension";
	$fdata["GoodName"] = "ubica_extension";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master","ubica_extension");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "ubica_extension";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ubica_extension";

	
	
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
			$edata["EditParams"].= " maxlength=30";

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


	$tdatacontractor_master["ubica_extension"] = $fdata;
		$tdatacontractor_master[".searchableFields"][] = "ubica_extension";
//	dem_genero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "dem_genero";
	$fdata["GoodName"] = "dem_genero";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master","dem_genero");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "dem_genero";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dem_genero";

	
	
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
	$edata["LookupTable"] = "tparam_genero";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "sex_cdsex_b";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "sex_dssex_b";

	

	
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


	$tdatacontractor_master["dem_genero"] = $fdata;
		$tdatacontractor_master[".searchableFields"][] = "dem_genero";
//	dem_ocupacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "dem_ocupacion";
	$fdata["GoodName"] = "dem_ocupacion";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master","dem_ocupacion");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dem_ocupacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dem_ocupacion";

	
	
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


	$tdatacontractor_master["dem_ocupacion"] = $fdata;
		$tdatacontractor_master[".searchableFields"][] = "dem_ocupacion";
//	dem_profesion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "dem_profesion";
	$fdata["GoodName"] = "dem_profesion";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master","dem_profesion");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "dem_profesion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dem_profesion";

	
	
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


	$tdatacontractor_master["dem_profesion"] = $fdata;
		$tdatacontractor_master[".searchableFields"][] = "dem_profesion";
//	ct_fecha_nacimiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "ct_fecha_nacimiento";
	$fdata["GoodName"] = "ct_fecha_nacimiento";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master","ct_fecha_nacimiento");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "ct_fecha_nacimiento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ct_fecha_nacimiento";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 0;

	
	
	
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


	$tdatacontractor_master["ct_fecha_nacimiento"] = $fdata;
		$tdatacontractor_master[".searchableFields"][] = "ct_fecha_nacimiento";
//	ct_nacionalidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "ct_nacionalidad";
	$fdata["GoodName"] = "ct_nacionalidad";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master","ct_nacionalidad");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "ct_nacionalidad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ct_nacionalidad";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatacontractor_master["ct_nacionalidad"] = $fdata;
		$tdatacontractor_master[".searchableFields"][] = "ct_nacionalidad";
//	dem_edad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "dem_edad";
	$fdata["GoodName"] = "dem_edad";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master","dem_edad");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dem_edad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dem_edad";

	
	
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


	$tdatacontractor_master["dem_edad"] = $fdata;
		$tdatacontractor_master[".searchableFields"][] = "dem_edad";
//	dem_educacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "dem_educacion";
	$fdata["GoodName"] = "dem_educacion";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master","dem_educacion");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dem_educacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dem_educacion";

	
	
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


	$tdatacontractor_master["dem_educacion"] = $fdata;
		$tdatacontractor_master[".searchableFields"][] = "dem_educacion";
//	dem_discapacidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "dem_discapacidad";
	$fdata["GoodName"] = "dem_discapacidad";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master","dem_discapacidad");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dem_discapacidad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dem_discapacidad";

	
	
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
	$edata["LookupTable"] = "tparam_discapacidad";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "discap_id";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "discap_nom";

	

	
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


	$tdatacontractor_master["dem_discapacidad"] = $fdata;
		$tdatacontractor_master[".searchableFields"][] = "dem_discapacidad";
//	emergencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "emergencia";
	$fdata["GoodName"] = "emergencia";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master","emergencia");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "emergencia";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "emergencia";

	
	
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


	$tdatacontractor_master["emergencia"] = $fdata;
		$tdatacontractor_master[".searchableFields"][] = "emergencia";
//	terms_msj
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "terms_msj";
	$fdata["GoodName"] = "terms_msj";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master","terms_msj");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "terms_msj";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "terms_msj";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "HTML");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdatacontractor_master["terms_msj"] = $fdata;
		$tdatacontractor_master[".searchableFields"][] = "terms_msj";
//	terms_acepta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "terms_acepta";
	$fdata["GoodName"] = "terms_acepta";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master","terms_acepta");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "terms_acepta";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "terms_acepta";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
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
	$edata["LookupTable"] = "tparam_sn";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "estadosn_id";
	$edata["LinkFieldType"] = 16;
	$edata["DisplayField"] = "estadosn_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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


	$tdatacontractor_master["terms_acepta"] = $fdata;
		$tdatacontractor_master[".searchableFields"][] = "terms_acepta";


$tables_data["contractor_master"]=&$tdatacontractor_master;
$field_labels["contractor_master"] = &$fieldLabelscontractor_master;
$fieldToolTips["contractor_master"] = &$fieldToolTipscontractor_master;
$placeHolders["contractor_master"] = &$placeHolderscontractor_master;
$page_titles["contractor_master"] = &$pageTitlescontractor_master;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["contractor_master"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["contractor_master"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_contractor_master()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "contractor_id,  	contractor_type,  	contractor_doc_id,  	contractor_doc_dv,  	contractor_pwd,  	contractor_image,  	contractor_name,  	contractor_lname,  	contractor_nombresfull,  	enlace_sigep,  	contractor_email,  	contractor_email_mincit,  	contractor_address,  	contractor_phone,  	contractor_mobile,  	contractor_city,  	bank_name,  	bank_cta_type,  	bank_cta_number,  	iva_regimen,  	sys_update,  	sys_user,  	sys_date,  	sys_level,  	sys_status,  	sys_last_upd,  	groupid,  	active,  	contractor_dependientes,  	contractor_medicinapre_file,  	contractor_picmonetaria_file,  	contractor_decljur,  	contractor_eps,  	contractor_fondopensiones,  	contractor_cajacompensacion,  	contractor_arl,  	ubica_dep,  	ubica_extension,  	dem_genero,  	dem_ocupacion,  	dem_profesion,  	ct_fecha_nacimiento,  	ct_nacionalidad,  	dem_edad,  	dem_educacion,  	dem_discapacidad,  	emergencia,  	terms_msj,  	terms_acepta";
$proto0["m_strFrom"] = "FROM contractor_master";
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
	"m_strName" => "contractor_id",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master"
));

$proto6["m_sql"] = "contractor_id";
$proto6["m_srcTableName"] = "contractor_master";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_type",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master"
));

$proto8["m_sql"] = "contractor_type";
$proto8["m_srcTableName"] = "contractor_master";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_doc_id",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master"
));

$proto10["m_sql"] = "contractor_doc_id";
$proto10["m_srcTableName"] = "contractor_master";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_doc_dv",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master"
));

$proto12["m_sql"] = "contractor_doc_dv";
$proto12["m_srcTableName"] = "contractor_master";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_pwd",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master"
));

$proto14["m_sql"] = "contractor_pwd";
$proto14["m_srcTableName"] = "contractor_master";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_image",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master"
));

$proto16["m_sql"] = "contractor_image";
$proto16["m_srcTableName"] = "contractor_master";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_name",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master"
));

$proto18["m_sql"] = "contractor_name";
$proto18["m_srcTableName"] = "contractor_master";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_lname",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master"
));

$proto20["m_sql"] = "contractor_lname";
$proto20["m_srcTableName"] = "contractor_master";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_nombresfull",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master"
));

$proto22["m_sql"] = "contractor_nombresfull";
$proto22["m_srcTableName"] = "contractor_master";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "enlace_sigep",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master"
));

$proto24["m_sql"] = "enlace_sigep";
$proto24["m_srcTableName"] = "contractor_master";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_email",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master"
));

$proto26["m_sql"] = "contractor_email";
$proto26["m_srcTableName"] = "contractor_master";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_email_mincit",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master"
));

$proto28["m_sql"] = "contractor_email_mincit";
$proto28["m_srcTableName"] = "contractor_master";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_address",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master"
));

$proto30["m_sql"] = "contractor_address";
$proto30["m_srcTableName"] = "contractor_master";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_phone",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master"
));

$proto32["m_sql"] = "contractor_phone";
$proto32["m_srcTableName"] = "contractor_master";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_mobile",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master"
));

$proto34["m_sql"] = "contractor_mobile";
$proto34["m_srcTableName"] = "contractor_master";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_city",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master"
));

$proto36["m_sql"] = "contractor_city";
$proto36["m_srcTableName"] = "contractor_master";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "bank_name",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master"
));

$proto38["m_sql"] = "bank_name";
$proto38["m_srcTableName"] = "contractor_master";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "bank_cta_type",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master"
));

$proto40["m_sql"] = "bank_cta_type";
$proto40["m_srcTableName"] = "contractor_master";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "bank_cta_number",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master"
));

$proto42["m_sql"] = "bank_cta_number";
$proto42["m_srcTableName"] = "contractor_master";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "iva_regimen",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master"
));

$proto44["m_sql"] = "iva_regimen";
$proto44["m_srcTableName"] = "contractor_master";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_update",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master"
));

$proto46["m_sql"] = "sys_update";
$proto46["m_srcTableName"] = "contractor_master";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_user",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master"
));

$proto48["m_sql"] = "sys_user";
$proto48["m_srcTableName"] = "contractor_master";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_date",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master"
));

$proto50["m_sql"] = "sys_date";
$proto50["m_srcTableName"] = "contractor_master";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_level",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master"
));

$proto52["m_sql"] = "sys_level";
$proto52["m_srcTableName"] = "contractor_master";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_status",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master"
));

$proto54["m_sql"] = "sys_status";
$proto54["m_srcTableName"] = "contractor_master";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_last_upd",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master"
));

$proto56["m_sql"] = "sys_last_upd";
$proto56["m_srcTableName"] = "contractor_master";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "groupid",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master"
));

$proto58["m_sql"] = "groupid";
$proto58["m_srcTableName"] = "contractor_master";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "active",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master"
));

$proto60["m_sql"] = "active";
$proto60["m_srcTableName"] = "contractor_master";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_dependientes",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master"
));

$proto62["m_sql"] = "contractor_dependientes";
$proto62["m_srcTableName"] = "contractor_master";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_medicinapre_file",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master"
));

$proto64["m_sql"] = "contractor_medicinapre_file";
$proto64["m_srcTableName"] = "contractor_master";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_picmonetaria_file",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master"
));

$proto66["m_sql"] = "contractor_picmonetaria_file";
$proto66["m_srcTableName"] = "contractor_master";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_decljur",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master"
));

$proto68["m_sql"] = "contractor_decljur";
$proto68["m_srcTableName"] = "contractor_master";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_eps",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master"
));

$proto70["m_sql"] = "contractor_eps";
$proto70["m_srcTableName"] = "contractor_master";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_fondopensiones",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master"
));

$proto72["m_sql"] = "contractor_fondopensiones";
$proto72["m_srcTableName"] = "contractor_master";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_cajacompensacion",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master"
));

$proto74["m_sql"] = "contractor_cajacompensacion";
$proto74["m_srcTableName"] = "contractor_master";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_arl",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master"
));

$proto76["m_sql"] = "contractor_arl";
$proto76["m_srcTableName"] = "contractor_master";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "ubica_dep",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master"
));

$proto78["m_sql"] = "ubica_dep";
$proto78["m_srcTableName"] = "contractor_master";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "ubica_extension",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master"
));

$proto80["m_sql"] = "ubica_extension";
$proto80["m_srcTableName"] = "contractor_master";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "dem_genero",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master"
));

$proto82["m_sql"] = "dem_genero";
$proto82["m_srcTableName"] = "contractor_master";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "dem_ocupacion",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master"
));

$proto84["m_sql"] = "dem_ocupacion";
$proto84["m_srcTableName"] = "contractor_master";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "dem_profesion",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master"
));

$proto86["m_sql"] = "dem_profesion";
$proto86["m_srcTableName"] = "contractor_master";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "ct_fecha_nacimiento",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master"
));

$proto88["m_sql"] = "ct_fecha_nacimiento";
$proto88["m_srcTableName"] = "contractor_master";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "ct_nacionalidad",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master"
));

$proto90["m_sql"] = "ct_nacionalidad";
$proto90["m_srcTableName"] = "contractor_master";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "dem_edad",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master"
));

$proto92["m_sql"] = "dem_edad";
$proto92["m_srcTableName"] = "contractor_master";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "dem_educacion",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master"
));

$proto94["m_sql"] = "dem_educacion";
$proto94["m_srcTableName"] = "contractor_master";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "dem_discapacidad",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master"
));

$proto96["m_sql"] = "dem_discapacidad";
$proto96["m_srcTableName"] = "contractor_master";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "emergencia",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master"
));

$proto98["m_sql"] = "emergencia";
$proto98["m_srcTableName"] = "contractor_master";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "terms_msj",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master"
));

$proto100["m_sql"] = "terms_msj";
$proto100["m_srcTableName"] = "contractor_master";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "terms_acepta",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master"
));

$proto102["m_sql"] = "terms_acepta";
$proto102["m_srcTableName"] = "contractor_master";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto104=array();
$proto104["m_link"] = "SQLL_MAIN";
			$proto105=array();
$proto105["m_strName"] = "contractor_master";
$proto105["m_srcTableName"] = "contractor_master";
$proto105["m_columns"] = array();
$proto105["m_columns"][] = "contractor_id";
$proto105["m_columns"][] = "contractor_type";
$proto105["m_columns"][] = "contractor_doc_id";
$proto105["m_columns"][] = "contractor_doc_dv";
$proto105["m_columns"][] = "contractor_pwd";
$proto105["m_columns"][] = "contractor_image";
$proto105["m_columns"][] = "contractor_name";
$proto105["m_columns"][] = "contractor_lname";
$proto105["m_columns"][] = "contractor_nombresfull";
$proto105["m_columns"][] = "enlace_sigep";
$proto105["m_columns"][] = "contractor_email";
$proto105["m_columns"][] = "contractor_email_mincit";
$proto105["m_columns"][] = "contractor_address";
$proto105["m_columns"][] = "contractor_phone";
$proto105["m_columns"][] = "contractor_mobile";
$proto105["m_columns"][] = "contractor_city";
$proto105["m_columns"][] = "bank_name";
$proto105["m_columns"][] = "bank_cta_type";
$proto105["m_columns"][] = "bank_cta_number";
$proto105["m_columns"][] = "iva_regimen";
$proto105["m_columns"][] = "sys_update";
$proto105["m_columns"][] = "sys_user";
$proto105["m_columns"][] = "sys_date";
$proto105["m_columns"][] = "sys_level";
$proto105["m_columns"][] = "sys_status";
$proto105["m_columns"][] = "sys_last_upd";
$proto105["m_columns"][] = "groupid";
$proto105["m_columns"][] = "active";
$proto105["m_columns"][] = "contractor_dependientes";
$proto105["m_columns"][] = "contractor_medicinapre_file";
$proto105["m_columns"][] = "contractor_picmonetaria_file";
$proto105["m_columns"][] = "contractor_decljur";
$proto105["m_columns"][] = "contractor_eps";
$proto105["m_columns"][] = "contractor_fondopensiones";
$proto105["m_columns"][] = "contractor_cajacompensacion";
$proto105["m_columns"][] = "contractor_arl";
$proto105["m_columns"][] = "ubica_dep";
$proto105["m_columns"][] = "ubica_extension";
$proto105["m_columns"][] = "dem_genero";
$proto105["m_columns"][] = "dem_ocupacion";
$proto105["m_columns"][] = "dem_profesion";
$proto105["m_columns"][] = "ct_fecha_nacimiento";
$proto105["m_columns"][] = "ct_nacionalidad";
$proto105["m_columns"][] = "dem_edad";
$proto105["m_columns"][] = "dem_educacion";
$proto105["m_columns"][] = "dem_discapacidad";
$proto105["m_columns"][] = "emergencia";
$proto105["m_columns"][] = "terms_msj";
$proto105["m_columns"][] = "terms_acepta";
$obj = new SQLTable($proto105);

$proto104["m_table"] = $obj;
$proto104["m_sql"] = "contractor_master";
$proto104["m_alias"] = "";
$proto104["m_srcTableName"] = "contractor_master";
$proto106=array();
$proto106["m_sql"] = "";
$proto106["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto106["m_column"]=$obj;
$proto106["m_contained"] = array();
$proto106["m_strCase"] = "";
$proto106["m_havingmode"] = false;
$proto106["m_inBrackets"] = false;
$proto106["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto106);

$proto104["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto104);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="contractor_master";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_contractor_master = createSqlQuery_contractor_master();


	
								;

																																																	

$tdatacontractor_master[".sqlquery"] = $queryData_contractor_master;

$tableEvents["contractor_master"] = new eventsBase;
$tdatacontractor_master[".hasEvents"] = false;

?>