<?php
class Warehouseadmins extends Controller
{
  public function __construct()
  {
    $this->userModel = $this->model('Warehouseadmin');
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
?>