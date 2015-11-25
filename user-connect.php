<?php
	session_start();
	// Grab User submitted information

	// Connect to the database
	$con = mysql_connect("localhost","haiheed_ricardo","wone2345");
	// Make sure we connected succesfully
	if(!$con)
	{
	    die('Connection Failed'.mysql_error());
	}

	// Select the database to use
	mysql_select_db("haiheed_toolio",$con);

	// Get Logged In user's NAME
	$user_name = mysql_query("SELECT name FROM users WHERE email = '$email'");
	$row_name = mysql_fetch_array($user_name);

?>