<?php
class Superusers extends Controller
{
  public function __construct()
  {
    $this->superUserModel = $this->model('Superuser');
  }

  public function index()
  {
    $this->view('superusers/index');
  }

  public function order()
  {
    $this->view('superusers/order');
  }

  public function approve()
  {
    $this->view('superusers/approve');
  }

  public function request()
  {
    $this->view('superusers/request');
  }

  // Initiate getAssortment() function in model 'superuser' and send data with view.
  public function assortment()
  {
    $assortment = $this->superUserModel->getAssortment();

    // Create HTML Row template for assortment view of superusers
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

    $data = $rows;

    $this->view('superusers/assortment', $data);
  }

  public function profile()
  {
    $this->view('superusers/profile');
  }
}
