<?php
class Login
{
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  // Login function, sanitizes person inputs and checks with database
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
      // Check if person IsActive = 1
      if ($data[0]->IsActive === '1') {
        // Verify hashed_password
        if (password_verify($p, $data[0]->Password) === 1) {
          // Start user session and declare roles
          var_dump($data[0]);
        } else {
          // Password did not verify with saved password in database
        }
      } else {
        // Person's IsActive saved in database is set to 0. (Inactive)
      }
    } else {
      var_dump($data);
      // Execute code when e-mail does not exist in database

    }
  }
}
