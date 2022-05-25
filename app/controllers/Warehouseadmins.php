<?php
class Warehouseadmins extends Controller {

	public function __construct()
	{
		$this->warehouseModel = $this->model('Warehouseadmin');
	}

	public function index()
	{		
		// Retrieve all data from assortment table
		$assortment = $this->warehouseModel->getAssortment();
		
		// Create HTML Rows using assortment data
		$assortmentRows = "";
		foreach ($assortment as $a) {
			$assortmentRows .= "<tr>";
			$assortmentRows .= "<th scope='row'>".$a->id."</th>";
			$assortmentRows .= "<td>".$a->name."</td>";
			$assortmentRows .= "<td>".$a->total."</td>";
			$assortmentRows .= "<td>".$a->outstanding."</td>";
			$assortmentRows .= "<td>".$a->available."</td>";
			$assortmentRows .= "<td>
														<a class='btn btn-xs btn-info' href=/warehouseadmins/edit?id=$a->id>Edit
													</td>";
			$assortmentRows .= "<td>
														<a class='btn btn-xs btn-info' href=/warehouseadmins/destroy?id=$a->id>Delete
													</td>";
			$assortmentRows .= "</tr>";
		}

		$this->view('warehouseadmins/index', $indexData = [
			"assortment" => $assortmentRows
		]);
	}

	//Redirects to create.php
	public function create()
	{
		$this->view('warehouseadmins/create');
	}

	//Stores the information in database through warehouseModel
	public function store()
	{
		$name  = $_POST['name'];
		$total = $_POST['total'];
		$outstanding = $_POST['outstanding'];
		$available = $_POST['available'];

		$this->warehouseModel->store($name, $total, $outstanding, $available);
		$this->redirect('warehouseadmins');
	}

	//Redirects to edit.php with the data from the corresponding ID
	public function edit()
	{
		$data = $this->warehouseModel->edit();
		$this->view('warehouseadmins/edit', $data);
	}

	//Updates the information in database through warehouseModel
	public function update($id)
	{
		$name  = $_POST['name'];
		$total = $_POST['total'];
		$outstanding = $_POST['outstanding'];
		$available = $_POST['available'];

		$this->warehouseModel->update($id, $name, $total, $outstanding, $available);
		//Redirect to warehouseadmins view
		$this->redirect('warehouseadmins');
	}


	//Delete through warehouseModel and redirect to warehouseadmins view
	public function destroy()
	{
		$this->warehouseModel->destroy();

		$this->redirect('warehouseadmins');
	}
}
