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
}
