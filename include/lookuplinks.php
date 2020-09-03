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
		if( !isset( $lookupTableLinks["dependencias_001"] ) ) {
			$lookupTableLinks["dependencias_001"] = array();
		}
		if( !isset( $lookupTableLinks["dependencias_001"]["contractor_master.contractor_sup_jerarquico"] )) {
			$lookupTableLinks["dependencias_001"]["contractor_master.contractor_sup_jerarquico"] = array();
		}
		$lookupTableLinks["dependencias_001"]["contractor_master.contractor_sup_jerarquico"]["edit"] = array("table" => "contractor_master", "field" => "contractor_sup_jerarquico", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["contractor_master.contractor_dependencia"] )) {
			$lookupTableLinks["dependencia"]["contractor_master.contractor_dependencia"] = array();
		}
		$lookupTableLinks["dependencia"]["contractor_master.contractor_dependencia"]["edit"] = array("table" => "contractor_master", "field" => "contractor_dependencia", "page" => "edit");
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
		if( !isset( $lookupTableLinks["contrato_estados"] ) ) {
			$lookupTableLinks["contrato_estados"] = array();
		}
		if( !isset( $lookupTableLinks["contrato_estados"]["contrato.cont_estado"] )) {
			$lookupTableLinks["contrato_estados"]["contrato.cont_estado"] = array();
		}
		$lookupTableLinks["contrato_estados"]["contrato.cont_estado"]["edit"] = array("table" => "contrato", "field" => "cont_estado", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato_tipo"] ) ) {
			$lookupTableLinks["contrato_tipo"] = array();
		}
		if( !isset( $lookupTableLinks["contrato_tipo"]["contrato.cont_tipo"] )) {
			$lookupTableLinks["contrato_tipo"]["contrato.cont_tipo"] = array();
		}
		$lookupTableLinks["contrato_tipo"]["contrato.cont_tipo"]["edit"] = array("table" => "contrato", "field" => "cont_tipo", "page" => "edit");
		if( !isset( $lookupTableLinks["interventor_periodos"] ) ) {
			$lookupTableLinks["interventor_periodos"] = array();
		}
		if( !isset( $lookupTableLinks["interventor_periodos"]["contrato.cont_periodicidad"] )) {
			$lookupTableLinks["interventor_periodos"]["contrato.cont_periodicidad"] = array();
		}
		$lookupTableLinks["interventor_periodos"]["contrato.cont_periodicidad"]["edit"] = array("table" => "contrato", "field" => "cont_periodicidad", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato_forma_pago"] ) ) {
			$lookupTableLinks["contrato_forma_pago"] = array();
		}
		if( !isset( $lookupTableLinks["contrato_forma_pago"]["contrato.cont_formapago"] )) {
			$lookupTableLinks["contrato_forma_pago"]["contrato.cont_formapago"] = array();
		}
		$lookupTableLinks["contrato_forma_pago"]["contrato.cont_formapago"]["edit"] = array("table" => "contrato", "field" => "cont_formapago", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_tipo_ct_002"] ) ) {
			$lookupTableLinks["tparam_tipo_ct_002"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_tipo_ct_002"]["contrato.cont_causalc"] )) {
			$lookupTableLinks["tparam_tipo_ct_002"]["contrato.cont_causalc"] = array();
		}
		$lookupTableLinks["tparam_tipo_ct_002"]["contrato.cont_causalc"]["edit"] = array("table" => "contrato", "field" => "cont_causalc", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_genero"] ) ) {
			$lookupTableLinks["tparam_genero"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_genero"]["contractor_master_chart_genero.dem_genero"] )) {
			$lookupTableLinks["tparam_genero"]["contractor_master_chart_genero.dem_genero"] = array();
		}
		$lookupTableLinks["tparam_genero"]["contractor_master_chart_genero.dem_genero"]["search"] = array("table" => "contractor_master_Chart_genero", "field" => "dem_genero", "page" => "search");
		if( !isset( $lookupTableLinks["tipo_docidentidad"] ) ) {
			$lookupTableLinks["tipo_docidentidad"] = array();
		}
		if( !isset( $lookupTableLinks["tipo_docidentidad"]["contractor_master_view.contractor_type"] )) {
			$lookupTableLinks["tipo_docidentidad"]["contractor_master_view.contractor_type"] = array();
		}
		$lookupTableLinks["tipo_docidentidad"]["contractor_master_view.contractor_type"]["edit"] = array("table" => "contractor_master_view", "field" => "contractor_type", "page" => "edit");
		if( !isset( $lookupTableLinks["q_divipola"] ) ) {
			$lookupTableLinks["q_divipola"] = array();
		}
		if( !isset( $lookupTableLinks["q_divipola"]["contractor_master_view.contractor_city"] )) {
			$lookupTableLinks["q_divipola"]["contractor_master_view.contractor_city"] = array();
		}
		$lookupTableLinks["q_divipola"]["contractor_master_view.contractor_city"]["edit"] = array("table" => "contractor_master_view", "field" => "contractor_city", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencias_001"] ) ) {
			$lookupTableLinks["dependencias_001"] = array();
		}
		if( !isset( $lookupTableLinks["dependencias_001"]["contractor_master_view.contractor_sup_jerarquico"] )) {
			$lookupTableLinks["dependencias_001"]["contractor_master_view.contractor_sup_jerarquico"] = array();
		}
		$lookupTableLinks["dependencias_001"]["contractor_master_view.contractor_sup_jerarquico"]["edit"] = array("table" => "contractor_master_view", "field" => "contractor_sup_jerarquico", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["contractor_master_view.contractor_dependencia"] )) {
			$lookupTableLinks["dependencia"]["contractor_master_view.contractor_dependencia"] = array();
		}
		$lookupTableLinks["dependencia"]["contractor_master_view.contractor_dependencia"]["edit"] = array("table" => "contractor_master_view", "field" => "contractor_dependencia", "page" => "edit");
		if( !isset( $lookupTableLinks["tipo_banco"] ) ) {
			$lookupTableLinks["tipo_banco"] = array();
		}
		if( !isset( $lookupTableLinks["tipo_banco"]["contractor_master_view.bank_name"] )) {
			$lookupTableLinks["tipo_banco"]["contractor_master_view.bank_name"] = array();
		}
		$lookupTableLinks["tipo_banco"]["contractor_master_view.bank_name"]["edit"] = array("table" => "contractor_master_view", "field" => "bank_name", "page" => "edit");
		if( !isset( $lookupTableLinks["tipo_cta_banco"] ) ) {
			$lookupTableLinks["tipo_cta_banco"] = array();
		}
		if( !isset( $lookupTableLinks["tipo_cta_banco"]["contractor_master_view.bank_cta_type"] )) {
			$lookupTableLinks["tipo_cta_banco"]["contractor_master_view.bank_cta_type"] = array();
		}
		$lookupTableLinks["tipo_cta_banco"]["contractor_master_view.bank_cta_type"]["edit"] = array("table" => "contractor_master_view", "field" => "bank_cta_type", "page" => "edit");
		if( !isset( $lookupTableLinks["tipo_regimen"] ) ) {
			$lookupTableLinks["tipo_regimen"] = array();
		}
		if( !isset( $lookupTableLinks["tipo_regimen"]["contractor_master_view.iva_regimen"] )) {
			$lookupTableLinks["tipo_regimen"]["contractor_master_view.iva_regimen"] = array();
		}
		$lookupTableLinks["tipo_regimen"]["contractor_master_view.iva_regimen"]["edit"] = array("table" => "contractor_master_view", "field" => "iva_regimen", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_fondosalud"] ) ) {
			$lookupTableLinks["tparam_fondosalud"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_fondosalud"]["contractor_master_view.contractor_eps"] )) {
			$lookupTableLinks["tparam_fondosalud"]["contractor_master_view.contractor_eps"] = array();
		}
		$lookupTableLinks["tparam_fondosalud"]["contractor_master_view.contractor_eps"]["edit"] = array("table" => "contractor_master_view", "field" => "contractor_eps", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_fondopension"] ) ) {
			$lookupTableLinks["tparam_fondopension"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_fondopension"]["contractor_master_view.contractor_fondopensiones"] )) {
			$lookupTableLinks["tparam_fondopension"]["contractor_master_view.contractor_fondopensiones"] = array();
		}
		$lookupTableLinks["tparam_fondopension"]["contractor_master_view.contractor_fondopensiones"]["edit"] = array("table" => "contractor_master_view", "field" => "contractor_fondopensiones", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_cajacomp"] ) ) {
			$lookupTableLinks["tparam_cajacomp"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_cajacomp"]["contractor_master_view.contractor_cajacompensacion"] )) {
			$lookupTableLinks["tparam_cajacomp"]["contractor_master_view.contractor_cajacompensacion"] = array();
		}
		$lookupTableLinks["tparam_cajacomp"]["contractor_master_view.contractor_cajacompensacion"]["edit"] = array("table" => "contractor_master_view", "field" => "contractor_cajacompensacion", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_tipo_ct_arl"] ) ) {
			$lookupTableLinks["tparam_tipo_ct_arl"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_tipo_ct_arl"]["contractor_master_view.contractor_arl"] )) {
			$lookupTableLinks["tparam_tipo_ct_arl"]["contractor_master_view.contractor_arl"] = array();
		}
		$lookupTableLinks["tparam_tipo_ct_arl"]["contractor_master_view.contractor_arl"]["edit"] = array("table" => "contractor_master_view", "field" => "contractor_arl", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_genero"] ) ) {
			$lookupTableLinks["tparam_genero"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_genero"]["contractor_master_view.dem_genero"] )) {
			$lookupTableLinks["tparam_genero"]["contractor_master_view.dem_genero"] = array();
		}
		$lookupTableLinks["tparam_genero"]["contractor_master_view.dem_genero"]["edit"] = array("table" => "contractor_master_view", "field" => "dem_genero", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_discapacidad"] ) ) {
			$lookupTableLinks["tparam_discapacidad"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_discapacidad"]["contractor_master_view.dem_discapacidad"] )) {
			$lookupTableLinks["tparam_discapacidad"]["contractor_master_view.dem_discapacidad"] = array();
		}
		$lookupTableLinks["tparam_discapacidad"]["contractor_master_view.dem_discapacidad"]["edit"] = array("table" => "contractor_master_view", "field" => "dem_discapacidad", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_sn"] ) ) {
			$lookupTableLinks["tparam_sn"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_sn"]["contractor_master_view.terms_acepta"] )) {
			$lookupTableLinks["tparam_sn"]["contractor_master_view.terms_acepta"] = array();
		}
		$lookupTableLinks["tparam_sn"]["contractor_master_view.terms_acepta"]["edit"] = array("table" => "contractor_master_view", "field" => "terms_acepta", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_fondosalud"] ) ) {
			$lookupTableLinks["tparam_fondosalud"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_fondosalud"]["contractor_master_chart_eps.contractor_eps"] )) {
			$lookupTableLinks["tparam_fondosalud"]["contractor_master_chart_eps.contractor_eps"] = array();
		}
		$lookupTableLinks["tparam_fondosalud"]["contractor_master_chart_eps.contractor_eps"]["search"] = array("table" => "contractor_master_chart_eps", "field" => "contractor_eps", "page" => "search");
		if( !isset( $lookupTableLinks["tparam_fondopension"] ) ) {
			$lookupTableLinks["tparam_fondopension"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_fondopension"]["contractor_master_chart_fondopension.contractor_fondopensiones"] )) {
			$lookupTableLinks["tparam_fondopension"]["contractor_master_chart_fondopension.contractor_fondopensiones"] = array();
		}
		$lookupTableLinks["tparam_fondopension"]["contractor_master_chart_fondopension.contractor_fondopensiones"]["search"] = array("table" => "contractor_master_chart_fondopension", "field" => "contractor_fondopensiones", "page" => "search");
		if( !isset( $lookupTableLinks["informe_intersup_estado"] ) ) {
			$lookupTableLinks["informe_intersup_estado"] = array();
		}
		if( !isset( $lookupTableLinks["informe_intersup_estado"]["informe_intersup_contratista.inf_estado"] )) {
			$lookupTableLinks["informe_intersup_estado"]["informe_intersup_contratista.inf_estado"] = array();
		}
		$lookupTableLinks["informe_intersup_estado"]["informe_intersup_contratista.inf_estado"]["edit"] = array("table" => "informe_intersup_contratista", "field" => "inf_estado", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_sn_oe"] ) ) {
			$lookupTableLinks["tparam_sn_oe"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_sn_oe"]["informe_intersup_oe_contratista.sup_aprueba"] )) {
			$lookupTableLinks["tparam_sn_oe"]["informe_intersup_oe_contratista.sup_aprueba"] = array();
		}
		$lookupTableLinks["tparam_sn_oe"]["informe_intersup_oe_contratista.sup_aprueba"]["edit"] = array("table" => "informe_intersup_oe_contratista", "field" => "sup_aprueba", "page" => "edit");
		if( !isset( $lookupTableLinks["informe_intersup_anexos_tipo"] ) ) {
			$lookupTableLinks["informe_intersup_anexos_tipo"] = array();
		}
		if( !isset( $lookupTableLinks["informe_intersup_anexos_tipo"]["informe_intersup_anexos_contratista.anexo_titulo"] )) {
			$lookupTableLinks["informe_intersup_anexos_tipo"]["informe_intersup_anexos_contratista.anexo_titulo"] = array();
		}
		$lookupTableLinks["informe_intersup_anexos_tipo"]["informe_intersup_anexos_contratista.anexo_titulo"]["edit"] = array("table" => "informe_intersup_anexos_contratista", "field" => "anexo_titulo", "page" => "edit");
}

?>