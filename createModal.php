<?php 
 	include("user-connect.php");
	session_start();
	// Get Logged In user's ID
	$email = $_SESSION["email"];
	$get_id = mysql_query("SELECT * FROM users WHERE email='$email'");
	$row_id = mysql_fetch_assoc($get_id);
	$user_id = $row_id['id'];
	
?>
<!-- Modal -->
<div class="modal fade" id="createColumnModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
	    <div id="modal-content" class="modal-content">
		    <?php include('modal-data.php'); ?>
	    </div>
	</div>
</div>