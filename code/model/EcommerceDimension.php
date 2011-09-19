<?php

class EcommerceDimension extends DataObject {

	public static $db = array(
		"Measurement" => "Varchar(100)",
		"Measure" => "Double(4,9)",
		"Unit" => "Varchar(100)"
	);

	public static $has_one = array(
		"Product" => "Product"
	);

	public static $singular_name = "Measurement";

	public static $plural_name = "Measurements";

	public static $default_sort = "";

	public static $searchable_fields = array("Measure" => "PartialMatchFilter", "Unit" => "PartialMatchFilter", "Measure");

	public static $casting = array(
		"Title" => "Text"
	);

	function Title() {return $this->getTitle();}
	function getTitle() {
		return $this->Measurement.": ".$this->Measure.$this->Unit;
	}

	public static $field_labels = array("Measurement" => "Measurement (e.g. Width)", "Measure" => "Measure (e.g. 100)", "Unit" => "Unit (e.g. cm)");

	public static $summary_fields = array("Measurement" => "Measurement", "Measure" => "Measure", "Unit" => "Unit");
}





