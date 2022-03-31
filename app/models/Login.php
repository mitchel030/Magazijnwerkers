<?php
class Login
{
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  // Login function, sanitizes user inputs and checks with database
  public function validateLogin($email, $password)
  {
    // Trim and filter given email and password from controller
    $e = trim(filter_var($email, FILTER_SANITIZE_EMAIL));
    $p = trim(filter_var($password, FILTER_SANITIZE_STRING));

    // Create SQL statement to select email and password from users table where e-mail is the same
    $sql = 'SELECT email, password FROM tabelUsers where email = "$e"';
    // Prepare and execute sql query
    $this->db->query($sql);
    $this->db->execute();

    // If sql query returns 1 row (E-mail exists in database)
    if ($this->db->rowCount() === 1) {
      // Execute next code if e-mail exists

    } else {
      // Execute code when e-mail does not exist in database

    }
  }
}
