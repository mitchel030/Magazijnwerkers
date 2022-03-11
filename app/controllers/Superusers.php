<?php
class Superusers extends Controller
{
  public function __construct()
  {
    $this->userModel = $this->model('Superuser');
  }

  // Index view controller
  public function index()
  {
    $this->view('superuser/index');
  }

  // Order view controller
  public function order()
  {
    $this->view('superuser/order');
  }

  // approve/refuse view controller
  public function approve()
  {
    $this->view('superuser/approve');
  }

  // request view controller
  public function request()
  {
    $this->view('superuser/request');
  }

  // Magazine view controller
  public function assortment()
  {
    $this->view('assortment');
  }
}
