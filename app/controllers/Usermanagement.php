<?php

function cleaning($raw_data) {
    global $conn;
    $data = mysqli_real_escape_string($conn, $raw_data);
    $data = htmlspecialchars($data);
    return $data;
  }

include_once("./includes/meta.php");
include_once("./includes/sidebar.php");
include_once("./includes/header.php");

if(isset($_POST["submit"])){
  $datum = date("d/m/Y H:i");
  $pass_plain = cleaning($_POST["password"]);
  $email = cleaning($_POST["email"]);
  $role = cleaning($_POST["role"]);
  $name = cleaning($_POST["name"]);
  $password = password_hash($pass_plain, PASSWORD_BCRYPT);
  mysqli_query($conn, "INSERT INTO `users` (`idusers`, `username`, `password`, `mail`, `permissions`, `timestamp`) VALUES (NULL, '$name', '$password', '$email', '$role', '$datum');");
  echo '<meta http-equiv="refresh" content="0; URL=./gebruikersbeheer">';
}

// non-actief functionality added with get variable
if(isset($_GET["nonactief"])){
  $id_set = cleaning($_GET["nonactief"]);
  mysqli_query($conn, "UPDATE `users` SET `permissions` = '99' WHERE `users`.`idusers` = $id_set;");
  echo '<meta http-equiv="refresh" content="0; URL=./gebruikersbeheer">';
}

// activate functionality for activating users with a get variable
if(isset($_GET["activeer"])){
  $id_set = cleaning($_GET["activeer"]);
  $new_role = cleaning($_GET["rol"]);
  mysqli_query($conn, "UPDATE `users` SET `permissions` = '$new_role' WHERE `users`.`idusers` = $id_set;");
  echo '<meta http-equiv="refresh" content="0; URL=./gebruikersbeheer">';
}

// delete given ID through a get variable
if(isset($_GET["verwijder"])){
  $id_set = cleaning($_GET["verwijder"]);
  mysqli_query($conn, "DELETE FROM `users` WHERE `idusers`=$id_set");
  echo '<meta http-equiv="refresh" content="0; URL=./gebruikersbeheer">';
}

// select all users
$all_users = "";
$get_users_query = mysqli_query($conn, "SELECT * FROM `users`");
while($get_users_data = mysqli_fetch_assoc($get_users_query)){
  $role = $get_users_data["permissions"];
  if($role == 0){
    $final_role = 'Beheerder';
  }else if ($role == 1){
    $final_role = 'Manager';
  }else if ($role == 2){
    $final_role = 'Medewerker';
  }else if ($role == 3){
    $final_role = 'Gebruiker';
  }else if ($role == 99){
    $final_role = 'Non-Actief';
  }else{
    $final_role = 'FOUT: Onbekend';
  }

  if($role == 99){
    $final_button = '<a href="?verwijder=' . $get_users_data["idusers"] . '" class="btn btn-danger">Verwijderen</a>
    <div class="dropdown">
      <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
        Activeer
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        <li><a class="dropdown-item" href="?activeer=' . $get_users_data["idusers"] . '&rol=0">Beheerder</a></li>
        <li><a class="dropdown-item" href="?activeer=' . $get_users_data["idusers"] . '&rol=1">Manager</a></li>
        <li><a class="dropdown-item" href="?activeer=' . $get_users_data["idusers"] . '&rol=2">Medewerker</a></li>
        <li><a class="dropdown-item" href="?activeer=' . $get_users_data["idusers"] . '&rol=3">Gebruiker</a></li>
      </ul>
    </div>';
  }else{
    $final_button = '<a href="?nonactief=' . $get_users_data["idusers"] . '" class="btn btn-secondary">Non-Actief</a>';
  }
  $all_users .= '<tr>
    <th scope="row">' . $get_users_data["idusers"] . '</th>
    <td>' . $get_users_data["username"] . '</td>
    <td>' . $get_users_data["mail"] . '</td>
    <td>' . $final_role . '</td>
    <td>' . $final_button . '</td>
  </tr>';
}

 ?>

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
    <?= $all_users ?>
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
    <button type="submit" name="submit" class="btn" style="background-color: #588CAA; color: white;">Aanmaken</button>
  </div>
  </form>
</div>
 </div>
</div>

 <?php include_once("./includes/footer.php"); ?>