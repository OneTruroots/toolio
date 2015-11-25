<?php
	include("user-connect.php");
	$name = $_POST["name"];
	$email = $_POST["email"];
	$password = $_POST["password"];

	// Get Logged In user's ID
	$get_id = mysql_query("SELECT * FROM users WHERE email='$email'");
	$row_id = mysql_fetch_assoc($get_id);
	$user_id = $row_id['id'];
	
	$result = mysql_query("SELECT email, password FROM users WHERE email='$email' AND password='$password'");

	$row = mysql_fetch_array($result);

	// var_dump(json_encode($row_id));

	if($row["email"]==$email && $row["password"] == $password) {
		  	$_SESSION["login"] = "true";
		  	$_SESSION["email"] = $row["email"];
		  	$_SESSION["user_name"] = $row_id['name'];
		  	$_SESSION["user_id"] = $row_id['id'];
		  	$_SESSION["all_columns"] = $user_info;
		  	$_SESSION["column_id"] = $user_info['id_2'];
		  	$_SESSION["column_title"] = $user_info['column_title'];
		  	$_SESSION["column_description"] = $user_info['column_description'];
		  	$_SESSION["column_code"] = $user_info['column_code'];
		  	$_SESSION["user_columns"] = $user_columns; 
		  	$_SESSION["column_count"] = $id_2_count;
			header("Location: /");
	} else {
		$_SESSION["login"] = "false";
	    echo"Sorry, your credentials are not valid, Please try again.";
	    header("Location: login.php");
	}
?>