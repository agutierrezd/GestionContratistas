<?php
class eventsBase
{
	var $events = array();
	var $maps = array();
	function exists($event, $table = "")
	{
		if($table == "")
			return (array_key_exists($event,$this->events)!==FALSE);
		else
			return isset($this->events[$event]) && isset($this->events[$event][$table]);
	}

	function existsMap($page)
	{
		return (array_key_exists($page,$this->maps)!==FALSE);
	}
}

class class_GlobalEvents extends eventsBase
{
	function __construct()
	{
	// fill list of events


//	onscreen events


		$this->events["IsRecordEditable"]["informe_intersup_oe_contratista"] = true;

		}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

//	onscreen events




	function IsRecordEditable($values, $isEditable, $table = "")
	{
		global $strTableName;
		if($table == "")
			$table = $strTableName;
		if($table == "informe_intersup_oe_contratista")
		{
			if ($values['sup_aprueba'] == 1) {
		$isEditable = false;
}

// Place event code here.
// Use "Add Action" button to add code snippets.

return $isEditable;;
		}
		return $isEditable;
	}
}
?>
