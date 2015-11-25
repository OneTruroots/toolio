<?php 
	include("user-connect.php"); 

	$id = $_SESSION['user_id'];
	$id_2 = $_POST['form-id'];
	$column_title = $_POST['column-title'];
	$column_description = $_POST['column-description'];
	$column_code = $_POST['column-code'];

	$sql = "UPDATE user_columns SET column_title='$column_title', column_description='$column_description', column_code='$column_code' WHERE id=$id AND id_2=$id_2";
	$update_column = mysql_query($sql) or die(mysql_error());
	print_r($_REQUEST);
?>