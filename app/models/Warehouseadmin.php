<?php
class Warehouseadmin
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
}


