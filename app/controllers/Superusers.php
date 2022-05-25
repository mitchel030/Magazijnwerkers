<?php
class Superusers extends Controller
{
  public function __construct()
  {
    $this->superUserModel = $this->model('Superuser');
    // Initiate role model
    $this->roleModel = $this->model('Role');
    // Call validate session function
    $this->roleModel->validateSessionRole("superusers");
  }

  public function index()
  {
    $allUsers = $this->superUserModel->getAllUsers();

    // Create HTML Row template for assortment view of superusers
    $userRows = "";
    foreach ($allUsers as $au) {
      $userRows .= "<tr>";
      $userRows .= "<th scope='row'>" . $au->LoginId . "</th>";
      $userRows .= "<td>" . $au->Username . "</td>";
      $userRows .= "<td>" . $au->Email . "</td>";
      $userRows .= "<td>" . $au->Password . "</td>";
      $userRows .= "<td>" . $au->Salt . "</td>";
      $userRows .= "</tr>";
    }

    $userHTML = $userRows;

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

    // Return assoc array with rows and user message
    $this->view('superusers/index', $indexData = [
      "rows" => $userHTML,
      "um" => $um
    ]);
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
          $orderMessage = "<div class='" . $m["css"] . "' role='alert'>" . $m["message"] . " <span>Click to dismiss</span> </div>";
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
    //Default value
    $data = null;
    // Check if POST is send
    if (isset($_POST)) {
      // Check if submit button is pressed
      if (isset($_POST["submit"])) {
        // Put post values into variables
        $product = $_POST["inputProduct"];
        $amount = $_POST["inputAmount"];

        //Check if variables are not empty
        if (!empty($product) && !empty($amount)) {
          //Initiate requestArticle function
          $message = $this->superUserModel->requestArticle($product, $amount);

          if ($message = "success") {
            //Gelukt
            $data = "<h1>" . $message . "</h1>";
          } else {
            //Gefaald
            $data = "<h1>" . $message . "</h1>";
          }
        }
      }
    }

    $this->view('superusers/request', $data);
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

    $assortmentRows = $rows;

    $this->view('superusers/assortment', $assortmentRows);
  }

  public function profile()
  {
    $this->view('superusers/profile');
  }
}
