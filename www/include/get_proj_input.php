<?php

// Include Database Connection file
require("connect_to_mysql.php");

// Create proj_input SQL select statement
$select_proj_input_sql = "
SELECT * 
FROM `proj_input`";

// Create SQL select statement query
$select_proj_input_sql_query = mysql_query($select_proj_input_sql)or die(mysql_error());

//Create an array
$json_response = array();

// Assign the user information to Variables
while($proj_input_row = mysql_fetch_array($select_proj_input_sql_query)){
	$row_array['id'] = $proj_input_row["id"];
	$row_array['input_info_id'] = $proj_input_row["input_info_id"];
	$row_array['project_id'] = $proj_input_row["project_id"];
	
	//push the values in the array
	array_push($json_response,$row_array);
}
//Parse header as JASON
header('Content-Type: application/json');
//Print the Information in JASON Formatting by encoding it.
echo json_encode($json_response);

?>