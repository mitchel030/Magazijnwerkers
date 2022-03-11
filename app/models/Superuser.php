<?php
class Superuser
{
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getSuperusers()
  {
    $this->db->query("SELECT * FROM `role`");

    $result = $this->db->resultSet();

    return $result;
  }
}
