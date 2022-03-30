<?php
class Financeadmins extends Controller
{
  public function __construct()
  {
    $this->userModel = $this->model('Financeadmins');
  }

  public function index()
  {
    $this->view('Financeadmins/index');
  }

  public function approve()
  {
    $this->view('Financeadmins/approve');
  }

  public function assortment()
  {
    $this->view('Financeadmins/assortment ');
  }
}
