<?php
class Login
{
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  // Login function, sanitizes user inputs and checks with database
  public function login()
  {
    
  }
}
