<?php
class Students extends Controller
{
  public function __construct()
  {
    $this->userModel = $this->model('Student');
  }

  public function index()
  {
    $this->view('students/index');
  }


}