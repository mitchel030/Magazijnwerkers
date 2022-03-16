<?php
class Pages extends Controller
{
  public function __construct()
  {
    $this->userModel = $this->model('User');
  }

  public function index()
  {
    $this->view('pages/index');
  }

  public function about()
  {
    $this->view('pages/about');
  }

  public function login()
  {
    $this->view('pages/login');
  }

  public function overview()
  {
    $this->view('pages/overview');
  }

  public function contact()
  {
    $this->view('pages/contact');
  }
}
