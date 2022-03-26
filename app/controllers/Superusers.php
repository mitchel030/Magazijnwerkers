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
    // Declare variable $orderMessage
    $orderMessage = null;

    // Check if $_POST has been set
    if (isset($_POST)) {
      // Check if submitOrder button has been pressed
      if (isset($_POST["submitOrder"])) {
        // Check if order values are filled in
        if (!empty($_POST["productName"]) && !empty($_POST["productLink"]) && !empty($_POST["productDescription"])) {
          // Initialize Order() process in model Superuser.php with form details as arguments. 
          //Returns an array with message CSS and text
          $m = $this->superUserModel->placeOrder($_POST["productName"], $_POST["productLink"], $_POST["productDescription"]);
          // Puts the array information into a HTML template. This will be given to the view.
          $orderMessage = "<span class='".$m["css"]."'>".$m["message"]."</span>";
          // Unset the post values (form values) after saving order in database
          unset($_POST);
        }
      }
    }
    $this->view('superusers/order', $orderMessage);
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
