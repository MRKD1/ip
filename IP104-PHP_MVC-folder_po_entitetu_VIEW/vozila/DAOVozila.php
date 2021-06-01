<?php
require_once '../config/db.php';

class DAOVozila {
	private $db;

	// za 2. nacin resenja
	private $INSERTVOZILA = "INSERT INTO vozila (marka, cena, godiste, id_proizvodjaca) VALUES (?, ?, ?, ?)";
	//private $DELETEOSOBA = "DELETE  FROM osoba WHERE idosoba = ?";
	//private $SELECTBYID = "SELECT * FROM osoba WHERE idosoba = ?";	
	//private $GETLASTNOSOBA = "SELECT * FROM osoba ORDER BY idosoba DESC LIMIT ?";
	private $GETALLVOZILABYPROIZVODJAC = "SELECT vozila.*, proizvodjaci.zemlja_porekla FROM vozila JOIN proizvodjaci ON vozila.id_proizvodjaca = proizvodjaci.id WHERE proizvodjaci.id = ?";
	private $GETALLVOZILA = "SELECT vozila.*, proizvodjaci.zemlja_porekla FROM vozila JOIN proizvodjaci ON vozila.id_proizvodjaca = proizvodjaci.id ORDER BY id ASC";
	public function __construct()
	{
		$this->db = DB::createInstance();
	}
	
	public function getAllVozila()
	{
	    
	    $statement = $this->db->prepare($this->GETALLVOZILA);
	    
	    $statement->execute();
	    
	    $result = $statement->fetchAll();
	    return $result;
	}
	
	public function getAllVozilaByProizvodjac($id) {
	    $statement = $this->db->prepare($this->GETALLVOZILABYPROIZVODJAC);
	    $statement->bindValue(1, $id);
	    
	    $statement->execute();
	    
	    $result = $statement->fetchAll();
	    return $result;
	}
	
	public function insertVozila($marka, $cena, $godiste, $id_proizvodjaca)
	{
	    
	    $statement = $this->db->prepare($this->INSERTVOZILA);
	    $statement->bindValue(1, $marka);
	    $statement->bindValue(2, $cena);
	    $statement->bindValue(3, $godiste);
	    $statement->bindValue(4, $id_proizvodjaca);
	    
	    $statement->execute();
	}

	/*public function getLastNOsoba($n)
	{
		
		$statement = $this->db->prepare($this->GETLASTNOSOBA);
		$statement->bindValue(1, $n, PDO::PARAM_INT);
		
		$statement->execute();
		
		$result = $statement->fetchAll();
		return $result;
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
