<?php
class Superuser
{
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  // Function to retrieve all users
  public function getAllUsers()
  {
    $this->db->query("SELECT * FROM users");

    $result = $this->db->resultSet();

    return $result;
  }

  // Selects all data from table 'assortment' and returns the resultSet

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

  // Function to sanitize form inputs and put it in the database 
  public function placeOrder($name, $link, $description)
  {
    // Sanitizing strings using filter_var (php build-in function)
    $n = filter_var($name, FILTER_SANITIZE_STRING);
    $l = filter_var($link, FILTER_SANITIZE_STRING);
    $d = filter_var($description, FILTER_SANITIZE_STRING);

    // SQL Statement from sanitized strings
    $sql = "INSERT INTO `order` 
                        (`id`, `product`, `link`, `description`, `status`) 
                VALUES  (NULL, '$n', '$l', '$d', 'New');";

    // Prepare sql statement
    $this->db->query($sql);
    // Execute sql statement
    $this->db->execute();

    // Return an array with a css variable and display message
    if ($this->db->rowCount() === 1) {
      return [
        "message" => "Order has been placed successfully!",
        "css" => "superuser--order alert alert-success"
      ];
    } else {
      return [
        "message" => "Order has not been placed. Please try again later.",
        "css" => "superuser--order alert alert-danger"
      ];
    }
  }
}
