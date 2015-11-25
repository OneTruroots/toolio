<div class="col-xs-3 sidebar-bg">
  <div class="row">
    <div class="col-xs-12 center-text">
    	<div class="center-text" style="padding-top: 20px;">
      <img src="http://www.toolio.xyz/assets/images/toolio-logo.jpg" style="width: 65%">
    	</div>
      	<h4 style="padding-top: 25px;">Hello <?php echo $_SESSION["user_name"];?></h4>
    </div>
  </div>
  <div class="row" style="padding: 10px;">
    <form id="category-form" class="ajax hide-cell" action="http://www.toolio.xyz/create-column.php" method="POST" role="form">
      <hr>
      <div class="form-group">
        <input name="column-title" type="column-title" class="info-data form-control" id="column-title" placeholder="Category Name">
      </div>
      <button class="btn btn-default long-green-btn category-flap" type="submit">Create</button>
    </form>
    <button id="plus-flap" class="btn btn-default long-green-btn category-flap" type="submit"><i class="fa fa-plus"></i></button>
  </div>
</div>