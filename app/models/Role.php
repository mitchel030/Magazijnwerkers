<?php
class Role
{
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  // Validates wether user is allowed to visit this page or not based on user email
  public function validateSessionRole($page)
  {
    // If php session is not started
    if (session_status() === PHP_SESSION_NONE) {
      // Start a php session
      session_start();
      // Checks for user session variables
      if (isset($_SESSION["email"])) {
        // SQL Query to get `role`.`Userrole` from `login`.`Email` = $_SESSION[email]
        $sql = "SELECT `ROL`.`Userrole` FROM `login` as `LOG` 
                LEFT JOIN `loginrole` as `LOR`
                ON `LOG`.`LoginId` = `LOR`.`LoginId`
                LEFT JOIN `role` as `ROL`
                ON `LOR`.`RoleId` = `ROL`.`RoleId`
                WHERE `LOG`.`Email` = '" . $_SESSION['email'] . "';";
        // Prepare and execute SQL Query
        $this->db->query($sql);
        $this->db->execute();
        // Return single userrole in $userrole
        $userrole = $this->db->single();

        // Compare current page to userrole
        if ($page === $userrole->Userrole) {
          // If userrole is the same as the visited dashboard
        } else {
          // If userrole is not the same as the visited dashboard, redirect the user to an error page
          $header = URLROOT . "/index?message=no-permissions";
          return header("Location: $header");
        }
      }
    }
  }
}
