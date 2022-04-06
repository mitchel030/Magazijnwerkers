<!-- // Require head include -->
<?php require_once APPROOT . '\views\includes\head.php'; ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-2 p-0">
      <!-- Sidebar -->
      <?php require_once APPROOT . '\views\warehouseadmins\sidebar.php'; ?>
    </div>
    <!-- Page Content -->
    <div class="content col-10">
      <h1 class="text-center">Assortment</h1>
      <table class="table table-hover table-striped">
        <thead>
          <tr>
            <th scope="col">Product ID</th>
            <th scope="col">Name</th>
            <th scope="col">Total Articles</th>
            <th scope="col">Outstanding Articles</th>
            <th scope="col">Available Articles</th>
          </tr>
        </thead>
        <tbody>
          <?php echo $data; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- // Require end include -->
<?php require_once APPROOT . '\views\includes\end.php'; ?>