<?php
class Superusers extends Controller
{
  public function __construct()
  {
    $this->userModel = $this->model('Superuser');
  }

  public function index()
  {
    $this->view('superusers/index');
  }

  public function about()
  {
    $this->view('superusers/about');
  }
}
