<?php
class Warehouseadmin extends Controller
{
  public function __construct()
  {
    $this->userModel = $this->model('Warehouseadmin');
  }

  public function index()
  {
    $this->view('warehouseadmin/index');
  }

  public function lending()
  {
    $this->view('warehouseadmin/Lendingitems');
  }

  public function managearticles()
  {
    $this->view('warehouseadmin/Managearticles');
  }

  public function takingitems()
  {
    $this->view('warehouseadmin/Takingitems');
  }

  public function viewwarehouse()
  {
    $this->view('warehouseadmin/Viewwarehouse');
  }

  public function profile()
  {
    $this->view('warehouseadmin/profile');
  }
}
