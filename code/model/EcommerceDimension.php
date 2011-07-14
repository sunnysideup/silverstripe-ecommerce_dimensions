<?php

class EcommerceDimension extends DataObject {

	public static $db = array(
		"Measurement" => "Varchar(100)",
		"Measure" => "Double",
		"Unit" => "Varchar(100)"
	);

	public static $has_one = array(
		"Product" => "Product"
	);
	
	public static $field_labels = array();
	
	public static $singular_name = "Measurement";

	public static $plural_name = "Measurements";

	public static $default_sort = "";


}





