<?php
class Logins extends Controller
{
  public function __construct()
  {
    $this->loginModel = $this->model('Login');
  }

  public function index()
  {
    // Activate testUser function if you need a test user in your database to log in with.
    // Test values: email = test@test.nl  |  password = test
    $this->loginModel->testUser();

    // Check if $_POST is send
    if (isset($_POST)) {
      // Check if login form has been submitted
      if (isset($_POST['login'])) {
        // Check if $_POST form inputs are not empty
        if (!empty($_POST['email']) && !empty($_POST['password'])) {
          // Initiate login function in Login model
          $loginMessage = $this->loginModel->validateLogin($_POST['email'], $_POST['password']);
        }
      }
    }
    $this->view('index');
  }
}
