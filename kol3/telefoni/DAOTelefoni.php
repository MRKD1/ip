<?php
require_once '../config/db.php';

class DAOTelefoni {
	private $db;

	private $GETALLTELEFONI = "SELECT telefoni.*, proizvodjaci.naziv FROM telefoni JOIN proizvodjaci ON telefoni.id_proizvodjaca = proizvodjaci.id";
	private $UPDATETELEFONI = "UPDATE telefoni SET cena = ? WHERE id = ?";
	private $DELETETELEFONI = "DELETE  FROM telefoni WHERE id = ?";
	private $GETTELEFONBYID = "SELECT telefoni.*, proizvodjaci.naziv FROM telefoni JOIN proizvodjaci ON telefoni.id_proizvodjaca = proizvodjaci.id WHERE telefoni.id = ?";

	
	public function __construct()
	{
		$this->db = DB::createInstance();
	}

	public function getAllTelefoni() {
		$statement = $this->db->prepare($this->GETALLTELEFONI);
		$statement->execute();
		$result = $statement->fetchAll();
		return $result;
	}

	public function updateTelefoni ($cena, $id) {
		$statement = $this->db->prepare($this->UPDATETELEFONI);
		$statement->bindValue(1, $cena);
		$statement->bindValue(2, $id);
		$statement->execute();
	}

	public function deleteTelefoni ($id) {
		$statement = $this->db->prepare($this->DELETETELEFONI);
		$statement->bindValue(1, $id);
		$statement->execute();
	}

	public function getTelefonById ($id) {
		$statement = $this->db->prepare($this->GETTELEFONBYID);
		$statement->bindValue(1, $id);
		$statement->execute();
		$result = $statement->fetch();
		return $result;
	}
}
?>
