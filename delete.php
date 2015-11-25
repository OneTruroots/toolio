<?php 
	include("user-connect.php"); 

	$id = $_SESSION['user_id'];
	$id_2 = $_POST['widget-id'];

	$sql = "DELETE FROM user_columns WHERE id=$id AND id_2=$id_2 ";
	$delete_column = mysql_query($sql) or die(mysql_error());
?>
