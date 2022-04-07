<?php
class Logins extends Controller
{
  public function __construct()
  {
    $this->loginModel = $this->model('Login');
  }

  public function index()
  {
    // Default login message set to null to prevent php unknown variable error
    $loginMessage = null;
    // Activate testUser function if you need a test user in your database to log in with.
    // Test values: email = test@test.nl  |  password = test
    //$this->loginModel->testUser();

    // Check if $_POST is send
    if (isset($_POST)) {
      // Check if login form has been submitted
      if (isset($_POST['login'])) {
        // Check if $_POST form inputs are not empty
        if (!empty($_POST['email']) && !empty($_POST['password'])) {
          // Initiate login function in Login model, return an array in $loginMessageDetails
          $loginMessageDetails = $this->loginModel->validateLogin($_POST['email'], $_POST['password']);
          // Create html message in $loginMessage
          $loginMessage = "<div class='" . $loginMessageDetails["css"] . "' role='alert'>" . $loginMessageDetails["message"] . "</div>";
        }
        // Return error message if user did not fill in the form inputs
        else {
          $loginMessage = "<div class='login--message alert alert-danger' role='alert'>Please fill in your e-mail and password.</div>";
        }
      }
    }
    $this->view('index', $loginData = [
      "loginMessage" => $loginMessage
    ]);
  }
}
