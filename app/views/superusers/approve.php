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
      <h1 class="text-center">Approve Content</h1>
      <table class="table table-hover table-striped">
        <thead>
          <tr>
            <th scope="col">Request ID</th>
            <th scope="col">Username</th>
            <th scope="col">Amount</th>
            <th scope="col">Status</th>
            <th scope="col">Request date</th>
            <th scope="col">Approve</th>
            <th scope="col">Decline</th>
          </tr>
        </thead>
        <tbody>
          <?php //echo $data; 
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- // Require end include -->
<?php require_once APPROOT . '\views\includes\end.php'; ?>