<?php 
	include("user-connect.php");
	session_start();

	$user_id = $_SESSION["user_id"];

	// Get columns
	$column_counter = mysql_query("SELECT * FROM user_columns WHERE id = $user_id AND id_2 = (SELECT MAX(id_2) FROM user_columns WHERE id = $user_id)");
	$id_2_count = mysql_fetch_array($column_counter);
    $columns = $id_2_count[2];

	$tool_counter = $columns + 1;
	$_SESSION["tool_counter"] = $tool_counter;
	// var_dump(json_encode($id_2_count));
?>

<div class="modal-header">
    <button type="button" class="close reset" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
</div>
<div class="modal-body">
<form id="<?php echo $tool_counter; ?>" class="ajax" action="http://www.toolio.xyz/create-column.php" method="POST" role="form">
    <div class="form-group">
        <input name="column-title" type="column-title" class="info-data form-control" id="column-title" placeholder="Tool Title">
    </div>
    <div class="form-group">
        <input name="form-id" type="form-id" class="form-control" id="form-id" placeholder="Tool ID" value="<?php echo $tool_counter; ?>" readonly>
    </div>
    <div class="bind" id="cell_<?php echo $tool_counter; ?>">
        <div class="form-group">
            <input name="column-description" type="column-description" class="info-data form-control" id="column-description" placeholder="Tool Description">
        </div>
        <div class="form-group">
            <textarea name="column-code" class="info-data  form-control" rows="3" placeholder="Tool Code"></textarea>
        </div>
        <button type="button" class="reset btn btn-default" data-dismiss="modal">Close</button>
        <button id="create-btn" class="create-btn btn btn-default" type="submit">Create</button>
    </div>
</form>