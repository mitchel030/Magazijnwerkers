<?php
class Pages extends Controller
{
  public function __construct()
  {
    $this->userModel = $this->model('Financeadmin');
  }

  public function index()
  {
    $this->view('financeadmin/index');
  }

  public function about()
  {
    $this->view('financeadmin/acceptreject');
  }

  public function login()
  {
    $this->view('financeadmin/overviewarticles');
  }
}
