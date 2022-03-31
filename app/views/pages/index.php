<!-- // Require head include -->
<?php require_once APPROOT . '\views\includes\head.php'; ?>

<!-- Login content -->
<div class="container-fluid">
  <!-- Login Form -->
  <div class="row justify-content-center login--form">
    <div class="col-4">
      <form action="" method="POST">
        <div class="form-group">
          <span></span>
          <input type="email" name="email" class="form-control" placeholder="Enter email">
        </div>
        <div class="form-group">
          <span></span>
          <input type="password" name="password" class="form-control" placeholder="Password">
        </div>
        <button type="submit" name="login" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>

</div>

<!-- // Require end include -->
<?php require_once APPROOT . '\views\includes\end.php'; ?>