<?php
require_once '../config/db.php';

class DAO {
	private $db;


	// private $INSERTOSOBA = "INSERT INTO osoba (ime, prezime, JMBG, vremeUpisa) VALUES (?, ?, ?, CURRENT_TIMESTAMP)";
	// private $DELETEOSOBA = "DELETE  FROM osoba WHERE idosoba = ?";
	// private $SELECTBYID = "SELECT * FROM osoba WHERE idosoba = ?";	
	// private $GETLASTNOSOBA = "SELECT * FROM osoba ORDER BY idosoba DESC LIMIT ?";


	private $DELETESAT = "DELETE FROM `satovi` WHERE id = ?";
	private $GETALLSATOVI = "SELECT * FROM `satovi`";
	private $GETONESAT = "SELECT `id`, `Naziv`, `Proizvodjac`, `SKU` FROM `satovi` WHERE id = ?";
	private $UPDATESAT = "UPDATE `satovi` SET `SKU`= ? WHERE id= ?";
	
	public function __construct()
	{
		$this->db = DB::createInstance();
	}



	public function deleteSat($id){
		$statement = $this->db->prepare($this->DELETESAT);
		$statement->bindValue(1, $id);
		$statement->execute();
	}

	public function getAllSatovi(){
		$statement = $this->db->prepare($this->GETALLSATOVI);
		$statement->execute();
		$result = $statement->fetchAll();
		return $result;
	}

	public function getOneSat($id)
	{
		$statement = $this->db->prepare($this->GETONESAT);
		$statement->bindValue(1, $id);
		$statement->execute();
		$result = $statement->fetch();
		return $result;
	}

	public function updateSat($id, $sku){
		$statement = $this->db->prepare($this->UPDATESAT);
		$statement->bindValue(1, $sku);
		$statement->bindValue(2, $id);
		$statement->execute();
	}






	// public function getLastNOsoba($n)
	// {

	// 	// 2. nacin
		
	// 	$statement = $this->db->prepare($this->GETLASTNOSOBA);
	// 	$statement->bindValue(1, $n, PDO::PARAM_INT);
		
	// 	$statement->execute();
		
	// 	$result = $statement->fetchAll();
	// 	return $result;
	// }

	// public function insertOsoba($ime, $prezime, $JMBG)
	// {
		
	// 	// 2. nacin
	// 	$statement = $this->db->prepare($this->INSERTOSOBA);
	// 	$statement->bindValue(1, $ime);
	// 	$statement->bindValue(2, $prezime);
	// 	$statement->bindValue(3, $JMBG);
		
	// 	$statement->execute();
	// }

	// public function deleteOsoba($idosoba)
	// {

		
	// 	// 2. nacin
	// 	$statement = $this->db->prepare($this->DELETEOSOBA);
	// 	$statement->bindValue(1, $idosoba);
		
	// 	$statement->execute();
	// }

	// public function getOsobaById($idosoba)
	// {
		
	// 	// 2. nacin
	// 	$statement = $this->db->prepare($this->SELECTBYID);
	// 	$statement->bindValue(1, $idosoba);
		
	// 	$statement->execute();
		
	// 	$result = $statement->fetch();
	// 	return $result;
	// }
}
?>
