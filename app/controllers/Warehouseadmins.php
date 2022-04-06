<?php
class Warehouseadmins extends Controller
{
  public function __construct()
  {
    $this->warehouseUserModel = $this->model('Warehouseadmin');
  }
 

  public function index()
  {
    $this->view('warehouseadmins/index');
  }

  public function lending()
  {
    $this->view('warehouseadmins/lendingitems');
  }

  public function managearticles()
  {
    $this->view('warehouseadmins/managearticles');
  }

  public function takingitems()
  {
    $this->view('warehouseadmins/takingitems');
  }

  public function assortment()
  {
    $assortment = $this->warehouseUserModel->getAssortment();

    // Create HTML Row template for assortment view of Warehouseadmin
    $rows = "";
    foreach ($assortment as $a) {
      $rows .= "<tr>";
      $rows .= "<th scope='row'>" . $a->id . "</th>";
      $rows .= "<td>" . $a->name . "</td>";
      $rows .= "<td>" . $a->total . "</td>";
      $rows .= "<td>" . $a->outstanding . "</td>";
      $rows .= "<td>" . $a->available . "</td>";
      $rows .= "</tr>";
    }

    $assortmentRows = $rows;

    $this->view('warehouseadmins/assortment', $assortmentRows);
  }

  public function profile()
  {
    $this->view('warehouseadmins/profile');
  }
}
?>