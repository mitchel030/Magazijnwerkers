<?php

function cleaning($raw_data) {
    global $conn;
    $usermanagement = mysqli_real_escape_string($conn, $raw_data);
    $usermanagement = htmlspecialchars($usermanagement);
    return $usermanagement;
  }


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



 <?php include_once("./includes/footer.php"); ?>