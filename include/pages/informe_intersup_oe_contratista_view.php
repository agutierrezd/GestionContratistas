<?php
			$optionsArray = array( 'pdf' => array( 'pdfView' => false ),
'master' => array( 'informe_intersup_contratista' => array( 'preview' => false ) ),
'fields' => array( 'gridFields' => array( 'oe_ordinal',
'oe',
'actividad',
'evidencia',
'sys_user',
'sup_aprueba' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'oe_ordinal' => array( 'integrated_edit_field4' ),
'oe' => array( 'integrated_edit_field5' ),
'actividad' => array( 'integrated_edit_field6' ),
'evidencia' => array( 'integrated_edit_field7' ),
'sys_user' => array( 'integrated_edit_field12' ),
'sup_aprueba' => array( 'integrated_edit_field' ) ) ),
'pageLinks' => array( 'edit' => true,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'top' => array( 'view_header' ),
'above-grid' => array(  ),
'below-grid' => array( 'view_back_list',
'view_close',
'hamburger' ),
'grid' => array( 'integrated_edit_field7',
'integrated_edit_field4',
'integrated_edit_field12',
'integrated_edit_field5',
'integrated_edit_field6',
'integrated_edit_field' ) ),
'formXtTags' => array( 'above-grid' => array(  ) ),
'itemForms' => array( 'view_header' => 'top',
'view_back_list' => 'below-grid',
'view_close' => 'below-grid',
'hamburger' => 'below-grid',
'integrated_edit_field7' => 'grid',
'integrated_edit_field4' => 'grid',
'integrated_edit_field12' => 'grid',
'integrated_edit_field5' => 'grid',
'integrated_edit_field6' => 'grid',
'integrated_edit_field' => 'grid' ),
'itemLocations' => array( 'integrated_edit_field7' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field4' => array( 'location' => 'grid',
'cellId' => 'c4' ),
'integrated_edit_field12' => array( 'location' => 'grid',
'cellId' => 'c5' ),
'integrated_edit_field5' => array( 'location' => 'grid',
'cellId' => 'c6' ),
'integrated_edit_field6' => array( 'location' => 'grid',
'cellId' => 'c7' ),
'integrated_edit_field' => array( 'location' => 'grid',
'cellId' => 'c' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'view_header' => array( 'view_header' ),
'view_back_list' => array( 'view_back_list' ),
'view_close' => array( 'view_close' ),
'hamburger' => array( 'hamburger' ),
'view_edit' => array( 'view_edit' ),
'integrated_edit_field' => array( 'integrated_edit_field4',
'integrated_edit_field5',
'integrated_edit_field6',
'integrated_edit_field7',
'integrated_edit_field12',
'integrated_edit_field' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c4' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field4' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c5' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field12' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c6' => array( 'cols' => array( 0,
1 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field5' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c7' => array( 'cols' => array( 0,
1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field6' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c3' => array( 'cols' => array( 0,
1 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field7' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c' => array( 'cols' => array( 0,
1 ),
'rows' => array( 4 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 2,
'height' => 5 ) ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ) ),
'misc' => array( 'type' => 'view',
'breadcrumb' => false,
'nextPrev' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'view',
'type' => 'view',
'layoutId' => 'nomenu',
'disabled' => 0,
'default' => 0,
'forms' => array( 'top' => array( 'modelId' => 'view-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'view_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'view-above-grid',
'grid' => array(  ),
'cells' => array(  ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'view-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'view_back_list',
'view_close' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'hamburger' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'section' => '',
'cells' => array( array( 'cell' => 'c4' ),
array( 'cell' => 'c5' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c6',
'colspan' => 2 ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c7',
'colspan' => 2 ) ) ),
array( 'cells' => array( array( 'cell' => 'c3',
'colspan' => 2 ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c',
'colspan' => 2 ) ) ) ),
'cells' => array( 'c3' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field7' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0,
'useFullWidth' => true ),
'c4' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field4' ) ),
'c5' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field12' ) ),
'c6' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field5' ),
'useFullWidth' => true ),
'c7' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field6' ),
'useFullWidth' => true ),
'c' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field' ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ) ),
'items' => array( 'view_header' => array( 'type' => 'view_header' ),
'view_back_list' => array( 'type' => 'view_back_list' ),
'view_close' => array( 'type' => 'view_close' ),
'hamburger' => array( 'type' => 'hamburger',
'items' => array( 'view_edit' ) ),
'view_edit' => array( 'type' => 'view_edit' ),
'integrated_edit_field4' => array( 'field' => 'oe_ordinal',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field5' => array( 'field' => 'oe',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field6' => array( 'field' => 'actividad',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => true,
'label' => array( 'field' => 'actividad',
'table' => null,
'type' => 3 ) ),
'integrated_edit_field7' => array( 'field' => 'evidencia',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false,
'label' => array( 'field' => 'evidencia',
'table' => null,
'type' => 3 ) ),
'integrated_edit_field12' => array( 'field' => 'sys_user',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => true ),
'integrated_edit_field' => array( 'field' => 'sup_aprueba',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ) ),
'dbProps' => array(  ),
'version' => 4 );
		?>