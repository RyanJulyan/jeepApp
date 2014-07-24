<?php

// Include Database Connection file
require("connect_to_mysql.php");

$insert_project_sql = "
INSERT INTO `data_type`(`id`, `data_type`) 
VALUES (NULL,
'".$_REQUEST['data_type']."');";

// Create SQL Insert panel statement quey
mysql_query($insert_project_sql)or die(mysql_error());

?>