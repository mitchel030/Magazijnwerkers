<?php
class Superusers extends Controller
{
  public function __construct()
  {
    $this->superUserModel = $this->model('Superuser');
  }

  public function index()
  {
    $um = null;
    // Retrieve post data, and put it in the database calling a function.
    if (isset($_POST)) {
      if (isset($_POST["createUser"])) {
        // Put all 4 post values into a variable
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $role = $_POST["role"];

        // Call createUser function in model, return array in a variable
        $userMessage = $this->superUserModel->createUser($name, $email, $password, $role);

        // Create html message for creating user
        $um = "<div class='" . $userMessage["css"] . "' role='alert'>" . $userMessage["message"] . " <span>Click to dismiss</span> </div>";

        unset($_POST);

      }
    }

    $this->view('superusers/index', $um);
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
