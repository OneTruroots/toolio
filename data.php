<?php 
	include("user-connect.php");

	// Get Logged In user's ID
	$email = $_SESSION["email"];
	$get_id = mysql_query("SELECT * FROM users WHERE email='$email'");
	$row_id = mysql_fetch_assoc($get_id);
	$user_id = $row_id['id'];

	// Get all User info
	$get_user_info = mysql_query("SELECT * FROM user_columns WHERE id=$user_id");
	$user_columns = mysql_num_rows($get_user_info);


	while ($user_info = mysql_fetch_assoc($get_user_info)) {
		echo '<div class="col-sm-6 tool" id="tool_' . $user_info['id_2'] . '">';
			echo '<div class="col-xs-11 no-pad">';
			    echo '<form id="' . $user_info['id_2'] . '" class="ajax" action="http://www.toolio.xyz/update-column.php" method="POST" role="form">';
			        echo '<div class="form-group">';
			            echo '<div class="col-xs-10 no-pad">';
			                echo '<input name="column-title" type="column-title" class="form-control" id="column-title" placeholder="Tool Title" value="' . $user_info['column_title'] . '">';
			            echo '</div>';
			            echo '<div class="col-xs-1 no-pad" style="text-align: right;">';
			                echo '<i class="fa fa-chevron-down chevron-btn bind" id="chevron_' . $user_info['id_2'] . '"></i>';
			            echo '</div>';
			            echo '<div class="col-xs-1 no-pad" style="text-align: center;">';
			            	echo '<i class="fa fa-times-circle remove-btn" id="remove_' . $user_info['id_2'] . '"style="font-size: 20px;"></i>';
			            echo '</div>';
			        echo '</div>';
			        echo '<div class="form-group">';
			            echo '<input name="form-id" type="form-id" class="form-control hide-cell" id="form-id" placeholder="Tool Description" value="' . $user_info['id_2'] . '" readonly>';
			        echo '</div>';
			        echo '<div class="bind hide-cell" id="cell_' . $user_info['id_2'] . '">';
			            echo '<div class="form-group">';
			                echo '<input name="column-description" type="column-description" class="form-control" id="column-description" placeholder="Tool Description" value="' . $user_info['column_description'] . '">';
			            echo '</div>';
			            echo '<div class="form-group">';
				            echo '<textarea name="column-code" class="form-control" rows="3">' . $user_info['column_code'] . '</textarea>';
			            echo '</div>';
			            echo '<button class="update-btn btn btn-default long-green-btn" type="submit">Update Tool</button>';
			        echo '</div>';
			    echo '</form>';
			    echo '<form id="delete-form-' . $user_info['id_2'] . '" class="hide-cell ajax" action="http://www.toolio.xyz/delete.php" method="POST" role="form">';
			    	echo '<div class="form-group" style="padding: 30px 5px;">';			    		
			    		echo '<div class="col-xs-12 center-text">';
							echo '<span>Do you really wish to delete this tool?</span>';
						echo '</div>';
						echo '<input name="widget-id" type="widget-id" class="form-control hide" id="widget-id" placeholder="Tool Description" value="' . $user_info['id_2'] . '" readonly>';
			    	echo '</div>';
			    	echo '<button id="delete-btn' . $user_info['id_2'] . '" class="update-btn btn md-btn green-bg-white" type="submit">Yes</button>';
			    	echo '<button id="close-btn-' . $user_info['id_2'] . '" class="update-btn btn md-btn light-gray-bg-black" type="button">No</button>';
			    echo '</form>';
			echo '</div>';
		echo '</div>';
	}

	mysql_free_result($user_info);
	// echo $_SESSION["all_columns"];
// var_dump(json_encode($_SESSION["all_columns"]));
?>