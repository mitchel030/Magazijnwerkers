<?php require_once APPROOT . '\views\includes\head.php'; ?>
<div class="container">
	<div class="jumbotron">
		<form action="<?= URLROOT ?>/warehouseadmins/lending/<?= $data->id; ?>" method="post">
            <div class="form-group">
		    <label>Name</label>
		    <input type="text" class="form-control" name="name" placeholder="Enter name" value="<?= $data->name; ?>">
		  </div>
		  <div class="form-group">
		    <label>Total</label>
		    <input type="text" class="form-control" name="total" placeholder="Enter total" value="<?= $data->total; ?>">
		  </div>
          <div class="form-group">
		    <label>Outstanding</label>
		    <input type="text" class="form-control" name="outstanding" placeholder="Enter outstanding" value="<?= $data->outstanding; ?>">
		  </div>
          <div class="form-group">
		    <label>Available</label>
		    <input type="text" class="form-control" name="available" placeholder="Enter available" value="<?= $data->available; ?>">
		  </div>
		  <div class="form-group">
		    <label>Lend</label>
		    <input type="text" class="form-control" name="lend" placeholder="Enter lend" value="<?= $data->lend; ?>">
		  </div>
		  <div class="form-group">
		    <label>Lendamount</label>
		    <input type="text" class="form-control" name="lendamount" placeholder="Enter lendamount" value="<?= $data->lendamount; ?>">
		  </div>
          <div class="form-group">
		    <label>Lenddescription</label>
		    <input type="text" class="form-control" name="lenddescription" placeholder="Enter lenddescription" value="<?= $data->lenddescription; ?>">
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</div>