<!-- // Require head include -->
<?php require_once APPROOT . '\views\includes\head.php'; ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-2 p-0">
      <!-- Sidebar -->
      <?php require_once APPROOT . '\views\pages\sidemenu.php'; ?>
    </div>
    <!-- Page Content -->
    <div class="content col-10">
      <h1 class="text-center">Overview</h1>
      <form method="post" action="overview.php">
        <div class="input-group">
          <label>Artikel</label>
          <input type="text" name="artikel" value="">
        </div>
        <div class="input-group">
          <label>Aanwezig</label>
          <input type="text" name="aanwezig" value="">
        </div>
        <div class="input-group">
          <label>Aantal</label>
          <input type="text" name="aantal" value="">
        </div>
        <div class="input-group">
          <button class="btn" type="submit" name="save">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- // Require end include -->
<?php require_once APPROOT . '\views\includes\end.php'; ?>