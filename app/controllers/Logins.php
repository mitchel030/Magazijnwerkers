<?php
class Logins extends Controller
{
  public function __construct()
  {
    $this->userModel = $this->model('Login');
  }

  public function index()
  {
    $this->view('index');
  }
}
