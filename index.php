<?php 
	include("user-connect.php");

	if($_SESSION['login'] == 'true' ) {
		echo("Success");
	} else {
		header("Location: login.php");
	}

	include("header.php");
	include("sidebar.php");

?>	
	<div class="col-xs-9 col-xs-offset-3">
		<div class="row green-bg" style="margin-top: -20px; padding: 5px 0px;">
			<div class="col-xs-12">
				<a href="logout.php" style="color: #fff;">
              		<i class="fa fa-power-off plus-btn" data-toggle="tooltip" data-placement="bottom" title="Log Out"></i>
            	</a>
			</div>
		</div>
    	<div class="row-fluid" style="padding-top: 15px;">
      		<div id="modal-wrapper" class="col-xs-12" style="text-align:right;">
      			<i id="plus-btn" class="fa fa-plus-square plus-btn"  data-toggle="modal" data-target="#createColumnModal"></i>
      			<?php include("createModal.php"); ?>
			</div>
		</div>
		<div class="row content">
			<div id="content" class="col-xs-12">
				<?php 
					// echo $_SESSION["column_test"]; 
					// var_dump(json_encode($_SESSION["column_test"]));
				?>
				<?php include('data.php'); ?>
			</div>
		</div>
	</div>		
		





















<?php include("footer.php"); ?>