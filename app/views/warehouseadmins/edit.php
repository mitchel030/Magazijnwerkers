<div class="container">
	<div class="jumbotron">
		<form action="<?= URLROOT ?>/warehouseadmins/update/<?= $data['warehouseadmins']['id'] ?>" method="post">
		  <div class="form-group">
		    <label>Name</label>
		    <input type="text" class="form-control" name="name" placeholder="Enter name" value="<?= $data['warehouseadmins']['name']; ?>">
		  </div>
		  <div class="form-group">
		    <label>Total</label>
		    <input type="text" class="form-control" name="total" placeholder="Enter total" value="<?= $data['warehouseadmins']['total']; ?>">
		  </div>
          <div class="form-group">
		    <label>Outstanding</label>
		    <input type="text" class="form-control" name="outstanding" placeholder="Enter outstanding" value="<?= $data['warehouseadmins']['outstanding']; ?>">
		  </div>
          <div class="form-group">
		    <label>Available</label>
		    <input type="text" class="form-control" name="available" placeholder="Enter available" value="<?= $data['warehouseadmins']['available']; ?>">
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</div>