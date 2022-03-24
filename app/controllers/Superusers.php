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
    if (isset($_POST)) {
      var_dump($_POST);
      var_dump($_POST["submitOrder"]);
    }
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

  public function assortment()
  {
    $this->view('superusers/assortment');
  }

  public function profile()
  {
    $this->view('superusers/profile');
  }
}
