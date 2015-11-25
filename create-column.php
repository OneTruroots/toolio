<?php 
	include("user-connect.php");
	session_start(); 

	$id = $_SESSION['user_id'];
	$id_2 = $_SESSION["tool_counter"];
	$column_title = $_POST['column-title'];
	$column_description = $_POST['column-description'];
	$column_code = $_POST['column-code'];

	$sql = "INSERT INTO user_columns (id, id_2, column_title, column_description, column_code) VALUES ('$id', '$id_2', '$column_title', '$column_description', '$column_code')";
	$create_column = mysql_query($sql) or die(mysql_error());
	print_r($_REQUEST);
?>