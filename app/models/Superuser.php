<?php
class Superuser
{
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAssortment()
  {
    $this->db->query("SELECT * FROM assortment");

    $result = $this->db->resultSet();

    return $result;
  }

  // This function sanitizes the form data and creates an user in the database.
  public function createUser($name, $email, $password, $role) {
    $n = filter_var($name, FILTER_SANITIZE_STRING);
    $e = filter_var($email, FILTER_SANITIZE_STRING);
    $p = filter_var($password, FILTER_SANITIZE_STRING);
    $r = filter_var($role, FILTER_SANITIZE_STRING);

    // Create SQL query
    $sql = "INSERT INTO `users` 
              (`idusers`, 
              `username`, 
              `password`, 
              `mail`, 
              `permissions`, 
              `timestamp`) 
            VALUES 
              (NULL, 
              '$n', 
              '$p', 
              '$e', 
              '$r', 
              CURRENT_TIMESTAMP);";

    // Prepare sql statement
    $this->db->query($sql);
    // Execute sql statement
    $this->db->execute();

    if ($this->db->rowCount() === 1) {
      // If 1 row has been made in database
      return [
        "message" => "User has been created.",
        "css" => "superuser--order alert alert-success"
      ];
    } else {
      // If no row has been made in database
      return [
        "message" => "User has not been created",
        "css" => "superuser--order alert alert-danger"
      ];
    }
  }
}
