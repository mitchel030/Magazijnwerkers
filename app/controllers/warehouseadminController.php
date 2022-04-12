<?php
class warehouseadminController extends Controller {

	public function index()
	{		
		$data['title'] = 'Halaman mahasiswa';
		$data['judul'] = 'Data mahasiswa';

		$data['assortment'] = $this->model('Warehouseadmins')->getAll();

		$this->view('templates/header', $data);
		$this->view('warehouseadmins/index', $data);
		$this->view('templates/footer');
	}

	public function create()
	{
		$data['title'] = 'Halaman create';
		$this->view('templates/header', $data);
		$this->view('warehouseadmins/create');
	}

	public function store()
	{
		$name  = $_POST['name'];
		$total = $_POST['total'];
        $outstanding = $_POST['outstanding'];
        $available = $_POST['available'];

		$this->model('Warehouseadmins')->store($name, $total, $outstanding, $available);
		$this->redirect('assortment');
	}

	public function edit($id)
	{
		$data['title'] = 'Edit';

		$data['assortment'] = $this->model('Warehouseadmins')->edit($id);

		$this->view('templates/header', $data);
		$this->view('warehouseadmins/edit', $data);
	}

	public function update($id)
	{
		$name  = $_POST['name'];
		$total = $_POST['total'];
        $outstanding = $_POST['outstanding'];
        $available = $_POST['available'];

		$this->model('Warehouseadmins')->update($id, $name, $total, $outstanding, $available);

		$this->redirect('assortment');
	}

	public function destroy($id)
	{
		$this->model('Warehouseadmins')->destroy($id);

		$this->redirect('assortment');
	}
}