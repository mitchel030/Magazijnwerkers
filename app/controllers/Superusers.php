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

  public function order()
  {
    $this->view('superusers/order');
  }

  public function approve()
  {
    $this->view('superusers/approve');
  }

  public function request()
  {
    $this->view('superusers/request');
  }

  public function assortment()
  {
    $this->view('superusers/assortment');
  }
}
