<?php
class Warehouseadmins extends Controller
{
  public function __construct()
  {
    $this->userModel = $this->model('Warehouseadmin');
    // Initiate role model
    $this->roleModel = $this->model('Role');
    // Call validate session function
    $this->roleModel->validateSessionRole("warehouseadmins");
  }

  public function index()
  {
    $this->view('warehouseadmins/index');
  }

  public function lending()
  {
    $this->view('warehouseadmins/lendingitems');
  }

  public function managearticles()
  {
    $this->view('warehouseadmins/managearticles');
  }

  public function takingitems()
  {
    $this->view('warehouseadmins/takingitems');
  }

  public function viewwarehouse()
  {
    $this->view('warehouseadmins/viewwarehouse');
  }

  public function profile()
  {
    $this->view('warehouseadmins/profile');
  }
}
