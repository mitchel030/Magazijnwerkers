<?php
class Students extends Controller
{
  public function __construct()
  {
    $this->userModel = $this->model('Student');
  }

  public function profile()
  {
    $userData = $this->userModel->personalInfo();
    $this->view('students/profile', $data = [
      'userData' => $userData
    ]);
  }

  public function index()
  {
    $this->view('students/index');
  }

  public function request()
  {
    //Default value
    $data = null;
    // Check if POST is send
    if (isset($_POST)) 
      {
        // Check if submit button is pressed
        if (isset($_POST["submit"])) 
        {
          // Put post values into variables
          $product = $_POST["inputProduct"];
          $amount = $_POST["inputAmount"];
          $reason = $_POST["inputReason"];

          //Check if variables are not empty
          if (!empty($product) && !empty($amount) && !empty($reason)) 
          {
            //Initiate requestArticle function
            $message = $this->userModel->requestArticle($product, $amount, $reason);

            if ($message = "success") {
              //Gelukt
              $data = "<h1>".$message."</h1>";
            } else {
              //Gefaald
              $data = "<h1>".$message."</h1>";
            }
              
          }
        }
        

}

    $this->view('students/request', $data);
  }


  

}