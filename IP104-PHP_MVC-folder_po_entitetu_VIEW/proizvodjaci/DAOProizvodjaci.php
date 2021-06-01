<?php
require_once '../config/db.php';

class DAOProizvodjaci {
	private $db;

	// za 2. nacin resenja
	//private $INSERTOSOBA = "INSERT INTO osoba (ime, prezime, JMBG, vremeUpisa) VALUES (?, ?, ?, CURRENT_TIMESTAMP)";
	//private $DELETEOSOBA = "DELETE  FROM osoba WHERE idosoba = ?";
	//private $SELECTBYID = "SELECT * FROM osoba WHERE idosoba = ?";	
	//private $GETLASTNOSOBA = "SELECT * FROM osoba ORDER BY idosoba DESC LIMIT ?";
	private $GETALLPROIZVODJACI = "SELECT * FROM proizvodjaci ORDER BY id ASC";
	
	public function __construct()
	{
		$this->db = DB::createInstance();
	}
	
	
	public function getAllProizvodjaci()
	{
	    
	    $statement = $this->db->prepare($this->GETALLPROIZVODJACI);
	    
	    $statement->execute();
	    
	    $result = $statement->fetchAll();
	    return $result;
	}

	/*public function getLastNOsoba($n)
	{
		
		$statement = $this->db->prepare($this->GETLASTNOSOBA);
		$statement->bindValue(1, $n, PDO::PARAM_INT);
		
		$statement->execute();
		
		$result = $statement->fetchAll();
		return $result;
	}*/

	/*public function insertOsoba($ime, $prezime, $JMBG)
	{
		
		$statement = $this->db->prepare($this->INSERTOSOBA);
		$statement->bindValue(1, $ime);
		$statement->bindValue(2, $prezime);
		$statement->bindValue(3, $JMBG);
		
		$statement->execute();
	}*/

	/*public function deleteOsoba($idosoba)
	{
		
		$statement = $this->db->prepare($this->DELETEOSOBA);
		$statement->bindValue(1, $idosoba);
		
		$statement->execute();
	}*/

	/*public function getOsobaById($idosoba)
	{
		
		$statement = $this->db->prepare($this->SELECTBYID);
		$statement->bindValue(1, $idosoba);
		
		$statement->execute();
		
		$result = $statement->fetch();
		return $result;
	}*/
}
?>
