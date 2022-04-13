<?php
class Financeadmin
{
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAssortment() {
    $sql = "SELECT * FROM `assortmentfinance`;";
    $this->db->query($sql);
    $assortment = $this->db->resultSet();
    return $assortment;
  }
}
