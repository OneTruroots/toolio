<?php 
include("user-connect.php");
include("header.php");

?>	
	<div class="container-fluid no-pad" style="background-color: #fff;">
		<div class="row-fluid">
			<div class="col-md-offset-4 col-md-4 center-text" style="padding: 45px;">
				<img src="http://www.toolio.xyz/assets/images/toolio-logo.jpg" style="width: 60%;">
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 center-text">
			</div>
		</div>
		<div class="col-md-offset-4 col-md-4" style="padding: 50px 0px;">
			<form id="login" method="post" action="validate.php">
				<div class="form-group">
				    <label for="exampleInputEmail1">Email address</label>
				    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
				</div>
				<div class="form-group">
				    <label for="exampleInputPassword1">Password</label>
				    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
				</div>
				<input type="submit" class="btn btn-default long-green-btn" value="Submit">
			</form>
			<div class="row">
				<div class="col-xs-12 center-text" style="padding: 15px 0px">
					<span>Not a member? Come right in</span>	
				</div>
			</div>
		</div>
	</div>
			





















<?php include("footer.php"); ?>