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
      <h1>Index Content</h1>
       <!-- card for user management -->
 <div class="card">
  <div class="card-body">
    <h2 class="text-center">Alle gebruikers</h2>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col" width="5%;">#</th>
      <th scope="col" width="25%;">Gebruikersnaam</th>
      <th scope="col" width="20%;">E-mail</th>
      <th scope="col" width="20%;">Rol</th>
      <th scope="col" width="30%;">Acties</th>
    </tr>
  </thead>
  <tbody>
    <!-- <?= $all_users ?> -->
  </tbody>
</table>
  </div>
</div>
<br>

<!-- card for creating a new user -->
<div class="card">
 <div class="card-body">
   <h2 class="text-center">Nieuwe gebruiker</h2>
    <div class="container">
     <form action="" method="POST">
       <div class="mb-3">
         <label for="exampleInputEmail1" class="form-label">Gebruikersnaam</label>
         <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
       </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">E-mail</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Wachtwoord</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Rol</label>
        <select class="form-select" name="role" aria-label="Default select example">
          <option selected value="0">Beheerder</option>
          <option value="1">Manager</option>
          <option value="2">Medewerker</option>
          <option value="3">Gebruiker</option>
        </select>
      </div>
      <div class="d-grid gap-2">
    <button type="submit" name="createUser" class="btn" style="background-color: #588CAA; color: white;">Aanmaken</button>
  </div>
  </form>
</div>
 </div>
</div>
    </div>
  </div>
</div>

<!-- // Require end include -->
<?php require_once APPROOT . '\views\includes\end.php'; ?>