<?php
			$optionsArray = array( 'fields' => array( 'gridFields' => array( 'prenumero',
'numregistro',
'pre_contnumero',
'contnumero',
'cont_ano',
'cont_codrubro',
'cont_catalogo_presupuestal',
'cont_fecha_inicio',
'cont_fechafinal',
'cont_periodicidad',
'cont_valorinicial',
'cont_valormensual',
'cont_objeto',
'cont_obligaciones',
'cont_plazo',
'cont_secop_proceso',
'cont_secop_enlace' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'prenumero' => array( 'import_field5' ),
'numregistro' => array( 'import_field6' ),
'pre_contnumero' => array( 'import_field7' ),
'contnumero' => array( 'import_field8' ),
'cont_ano' => array( 'import_field11' ),
'cont_codrubro' => array( 'import_field12' ),
'cont_catalogo_presupuestal' => array( 'import_field15' ),
'cont_fecha_inicio' => array( 'import_field19' ),
'cont_fechafinal' => array( 'import_field20' ),
'cont_periodicidad' => array( 'import_field24' ),
'cont_valorinicial' => array( 'import_field29' ),
'cont_valormensual' => array( 'import_field30' ),
'cont_objeto' => array( 'import_field55' ),
'cont_obligaciones' => array( 'import_field56' ),
'cont_plazo' => array( 'import_field57' ),
'cont_secop_proceso' => array( 'import_field60' ),
'cont_secop_enlace' => array( 'import_field61' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'import_header' ),
'grid' => array( 'import_field5',
'import_field6',
'import_field7',
'import_field8',
'import_field11',
'import_field12',
'import_field15',
'import_field19',
'import_field20',
'import_field24',
'import_field29',
'import_field30',
'import_field55',
'import_field56',
'import_field57',
'import_field60',
'import_field61' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'import_header' => 'top',
'import_field5' => 'grid',
'import_field6' => 'grid',
'import_field7' => 'grid',
'import_field8' => 'grid',
'import_field11' => 'grid',
'import_field12' => 'grid',
'import_field15' => 'grid',
'import_field19' => 'grid',
'import_field20' => 'grid',
'import_field24' => 'grid',
'import_field29' => 'grid',
'import_field30' => 'grid',
'import_field55' => 'grid',
'import_field56' => 'grid',
'import_field57' => 'grid',
'import_field60' => 'grid',
'import_field61' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'import_header' => array( 'import_header' ),
'import_field' => array( 'import_field5',
'import_field6',
'import_field7',
'import_field8',
'import_field11',
'import_field12',
'import_field15',
'import_field19',
'import_field20',
'import_field24',
'import_field29',
'import_field30',
'import_field55',
'import_field56',
'import_field57',
'import_field60',
'import_field61' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ) ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'import',
'type' => 'import',
'layoutId' => 'first',
'disabled' => 0,
'default' => 0,
'forms' => array( 'supertop' => array( 'modelId' => 'panel-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'import-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'import_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'import-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'import_field5',
'import_field6',
'import_field7',
'import_field8',
'import_field11',
'import_field12',
'import_field15',
'import_field19',
'import_field20',
'import_field24',
'import_field29',
'import_field30',
'import_field55',
'import_field56',
'import_field57',
'import_field60',
'import_field61' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'import_header' => array( 'type' => 'import_header' ),
'import_field5' => array( 'field' => 'prenumero',
'type' => 'import_field' ),
'import_field6' => array( 'field' => 'numregistro',
'type' => 'import_field' ),
'import_field7' => array( 'field' => 'pre_contnumero',
'type' => 'import_field' ),
'import_field8' => array( 'field' => 'contnumero',
'type' => 'import_field' ),
'import_field11' => array( 'field' => 'cont_ano',
'type' => 'import_field' ),
'import_field12' => array( 'field' => 'cont_codrubro',
'type' => 'import_field' ),
'import_field15' => array( 'field' => 'cont_catalogo_presupuestal',
'type' => 'import_field' ),
'import_field19' => array( 'field' => 'cont_fecha_inicio',
'type' => 'import_field' ),
'import_field20' => array( 'field' => 'cont_fechafinal',
'type' => 'import_field' ),
'import_field24' => array( 'field' => 'cont_periodicidad',
'type' => 'import_field' ),
'import_field29' => array( 'field' => 'cont_valorinicial',
'type' => 'import_field' ),
'import_field30' => array( 'field' => 'cont_valormensual',
'type' => 'import_field' ),
'import_field55' => array( 'field' => 'cont_objeto',
'type' => 'import_field' ),
'import_field56' => array( 'field' => 'cont_obligaciones',
'type' => 'import_field' ),
'import_field57' => array( 'field' => 'cont_plazo',
'type' => 'import_field' ),
'import_field60' => array( 'field' => 'cont_secop_proceso',
'type' => 'import_field' ),
'import_field61' => array( 'field' => 'cont_secop_enlace',
'type' => 'import_field' ) ),
'dbProps' => array(  ),
'version' => 4 );
		?>