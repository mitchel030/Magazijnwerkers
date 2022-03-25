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
    // Check if $_POST has been set
    if (isset($_POST)) {
      // Check if submitOrder button has been pressed
      if (isset($_POST["submitOrder"])) {
        // Check if order values are filled in
        if (!empty($_POST["productName"]) && !empty($_POST["productLink"]) && !empty($_POST["productDescription"])) {
          // Initialize Order() process in model Superuser.php with form details as arguments
          $this->superUserModel->placeOrder($_POST["productName"], $_POST["productLink"], $_POST["productDescription"]);
        }
      }
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
