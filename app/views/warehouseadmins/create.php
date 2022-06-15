<?php require_once APPROOT . '\views\includes\head.php'; ?>
	<div class="jumbotron">
		<form action="<?= URLROOT ?>/warehouseadmins/store" method="post">
		  <div class="form-group">
		    <label>Name</label>
		    <input type="text" class="form-control" name="name" placeholder="Enter name">
		  </div>
		  <div class="form-group">
		    <label>Total</label>
		    <input type="text" class="form-control" name="total" placeholder="Enter total">
		  </div>
          <div class="form-group">
		    <label>Outstanding</label>
		    <input type="text" class="form-control" name="outstanding" placeholder="Enter outstanding">
		  </div>
          <div class="form-group">
		    <label>Available</label>
		    <input type="text" class="form-control" name="available" placeholder="Enter available">
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</div> 
