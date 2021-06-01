<?php
require_once '../config/db.php';

class DAOProizvodjaci {
	private $db;
	
    private $GETALLPROIZVODJACI = "SELECT * FROM proizvodjaci";
    private $UPDATEPROIZVODJAC = "UPDATE proizvodjaci SET naziv = ? WHERE id = ? ";

	public function __construct(){
		$this->db = DB::createInstance();
	}

    public function getAllProizvodjaci() {
        $statement = $this->db->prepare($this->GETALLPROIZVODJACI);
        $statement->execute();
		$result = $statement->fetchAll();
		return $result;
    }

    public function updateProizvodjac($naziv, $id) {
        $statement = $this->db->prepare($this->UPDATEPROIZVODJAC);
        $statement->bindValue(1, $naziv);
        $statement->bindValue(2, $id);
        
        if($statement->execute()) {
            return true;
        } else {
            return false;
        }
    }
}

?>
