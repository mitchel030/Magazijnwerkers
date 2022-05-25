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
      <h1>Request Content</h1>
      <div class="card">
        <div class="card-body">
          <form action="" method="POST" class="form">
            <div class="row">
              <div class="col-12">
                <label class="visually-hidden">Product</label>
                <input type="product" name="inputProduct" class="form-control" id="inputproduct" placeholder="Product">
              </div>
              <br></br>
            </div>
            <div class="col-12">
                <label class="visually-hidden">Amount</label>
                <input type="amount" name="inputAmount" class="form-control" id="inputamount" placeholder="Amount">
              </div>
            <br></br>
            <div class="row">
              <div class="col-12">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- // Require end include -->
<?php require_once APPROOT . '\views\includes\end.php'; ?>