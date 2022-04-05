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

    // Create SQL statement to select email, password and salt from users table where e-mail is user email
    $sql = 'SELECT `Email`, `Password`, `Salt`, `IsActive` FROM `login` WHERE `Email` = "' . $e . '";';
    // Prepare and execute sql query
    $this->db->query($sql);
    // Put executed information in $data
    $data = $this->db->resultSet();

    // If sql query returns 1 row (E-mail exists in database)
    if ($this->db->rowCount() === 1) {
      var_dump($data);
      // Execute next code if e-mail exists
    } else {
      var_dump($data);
      // Execute code when e-mail does not exist in database

    }
  }
}
