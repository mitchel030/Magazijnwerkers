<!-- // Require head include -->
<?php require_once APPROOT . '\views\includes\head.php'; ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-2 p-0">
      <!-- Sidebar -->
      <?php require_once APPROOT . '\views\superusers\sidebar.php'; ?>
    </div>
    <!-- Page Content -->
    <div class="content col-10">
      <h1 class="text-center pt-2">Order Articles</h1>
      <form action="<?php echo URLROOT; ?>/superusers/order" method="POST">
        <div class="form-group">
          <label for="productName">Product Name</label>
          <input type="text" class="form-control" id="productName" name="productName" placeholder="Pencil...">
        </div>
        <div class="form-group">
          <label for="productLink">Product Link</label>
          <input type="text" class="form-control" id="productLink" name="productLink" placeholder="www.website.com/pencil....">
        </div>
        <div class="form-group">
          <label for="productDescription">Product Description</label>
          <textarea class="form-control" id="productDescription" rows="3" name="productDescription" placeholder="A beautiful blue pencil..."></textarea>
        </div>
        <button type="submit" class="btn btn-primary" id="submit" name="submitOrder" value="submitOrder">Submit</button>
      </form>
    </div>
  </div>
</div>

<!-- // Require end include -->
<?php require_once APPROOT . '\views\includes\end.php'; ?>