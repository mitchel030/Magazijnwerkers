<?php
class Financeadmins extends Controller
{
  public function __construct()
  {
    $this->userModel = $this->model('Financeadmin');
  }

  public function index()
  {
    $this->view('Financeadmins/index');
  }

  public function approve()
  {
    $this->view('Financeadmins/approve');
  }

  public function assortment()
  {
    $assortment = $this->userModel->getAssortment();

    // Create HTML Row template for assortment view of finance-admin
    $rows = "";
    foreach ($assortment as $a) {
      $rows .= "<tr>";
      $rows .= "<th scope='row'>" . $a->id . "</th>";
      $rows .= "<td>" . $a->name . "</td>";
      $rows .= "<td>" . $a->amount . "</td>";
      $rows .= "<td>" . $a->individualprice . "</td>";
      $rows .= "<td>" . $a->totalprice . "</td>";
      $rows .= "</tr>";
    }

    $assortmentRows = $rows;

    $this->view('financeadmins/assortment', $assortmentRows);
  }
}
