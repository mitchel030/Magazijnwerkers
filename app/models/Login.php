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

  // Creates test user with email: test@test.nl & password: test
  public function testUser()
  {
    // Check if user exists
    $t = "SELECT `Email` FROM `login` WHERE `Email` = 'test@test.nl'";
    $this->db->query($t);
    $this->db->execute();
    if ($this->db->rowCount() === 1) {
      return "user already exists";
    }

    // Define test email and password
    $email = "test@test.nl";
    $pw = "test";
    // Generate random number (salt)
    $salt = bin2hex(random_bytes(10));
    // Hash the password. Password construction: User password + Salt
    $hashed = password_hash($pw . $salt, PASSWORD_DEFAULT);

    // Verify password using variables above // test purposes
    // $verify = password_verify($pw . $salt, $hashed);
    // var_dump($verify);

    $sql = "INSERT INTO `login` 
                          (`LoginId`, 
                          `Email`, 
                          `Password`, 
                          `Salt`, 
                          `Username`,  
                          `CreatedDtm`, 
                          `UpdatedDtm`) 
                          VALUES 
                          (NULL, 
                          '$email', 
                          '$hashed', 
                          '$salt', 
                          'Test',  
                          '2022-04-05 11:45:18.000000', 
                          '2022-04-05 11:45:18.000000');";
    // Prepare and execute test user details into login table
    $this->db->query($sql);
    $this->db->execute();
  }
}
