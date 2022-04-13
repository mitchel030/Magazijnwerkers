<?php
class Warehouseadmin
{
	//Instantiate database and table
  private $db;
	private $table = 'assortment';

	public function __construct()
	{
		$this->db = new Database;
	}

	// Create select statement and return all results in an array
	public function getAssortment()
	{
		$this->db->query("SELECT * FROM {$this->table}");
		return $this->db->resultSet();
	}

	//Send array to database through SQL Query
	public function store($name, $total, $outstanding, $available)
	{
		$this->db->query("INSERT INTO {$this->table} (name, total, outstanding, available) VALUES (:name, :total, :outstanding, :available)");
		
		$this->db->bind(':name', $name);
		$this->db->bind(':total', $total);
    $this->db->bind(':outstanding', $outstanding);
    $this->db->bind(':available', $available);

		return $this->db->execute();
	}

	//Selects array from where id = ${id}
	public function edit()
	{
		$id = $_GET["id"];
		$this->db->query("SELECT * FROM {$this->table} WHERE id = {$id}");
		return $this->db->single();
	}

	//Create update function which updates the array that was selected in the edit function
	public function update($id, $name, $total, $outstanding, $available)
	{
		$this->db->query("UPDATE {$this->table} SET name = :name, total = :total, outstanding = :outstanding, available = :available WHERE id = {$id}");

		$this->db->bind(':name', $name);
		$this->db->bind(':total', $total);
    $this->db->bind(':outstanding', $outstanding);
    $this->db->bind(':available', $available);

		return $this->db->execute();
	}

	//Gets ID, deletes from database through SQL Query and executes
	public function destroy()
	{
		$id = $_GET["id"];
		$this->db->query("DELETE FROM {$this->table} WHERE id = {$id}");
		return $this->db->execute();
	}
}
