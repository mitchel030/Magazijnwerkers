<!-- // Require head include -->
<?php require_once APPROOT . '\views\includes\head.php'; ?>

<!-- Login content -->
<div class="container-fluid login">
  <!-- Background image -->
  <img class="login--background no-drag" src="<?= URLROOT ?>/public/img/login-background.jpg" alt="Login Background">

  <div class="container">
    <div class="row login--form">
      <!-- Login Form -->
      <div class="col-4">
        <!-- MBO Utrecht Logo -->
        <img class="login--logo no-drag" src="<?= URLROOT ?>/public/img/mbo_utrecht_logo_cut.jpg" alt="MBO Utrecht Logo">
        <form action="" method="POST">
          <div class="form-group">
            <i class="fa-solid fa-user"></i>
            <input type="email" name="email" class="form-control" placeholder="Enter email" required>
          </div>
          <div class="form-group">
            <i class="fa-solid fa-lock"></i>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
          </div>
          <button type="submit" name="login" class="btn btn-primary">log in</button>
          <?= $data["loginMessage"] ?>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- // Require end include -->
<?php require_once APPROOT . '\views\includes\end.php'; ?>