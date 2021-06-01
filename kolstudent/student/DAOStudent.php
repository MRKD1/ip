<?php
require_once '../config/db.php';

class DAOStudent {
    private $db;
    
    private $STUDENTPOSTOJI="SELECT * FROM student WHERE idstudent=?";
    private $UPDATESTUDENT="UPDATE student SET ime=?, prezime=?, brIndexa=? WHERE idstudent=?";

    public function __construct() {
        $this->db = DB::createInstance();
    }

    public function getStudent($idstudent) {
        $statement = $this->db->prepare($this->STUDENTPOSTOJI);
        $statement->bindValue(1, $idstudent);

        $statement->execute();
        $result = $statement->fetch();
        return $result;
    }

    public function getStudentById($idstudent) {
        $statement = $this->db->prepare($this->STUDENTPOSTOJI);
        $statement->bindValue(1, $idstudent);

        $statement->execute();
        
        if ($result = $statement->fetch()) {
            return true;
        } else {
            return false;
        }
    }
        

    public function update($idstudent, $ime, $prezime, $brIndexa) {
        $statement = $this->db->prepare($this->UPDATESTUDENT);
        $statement->bindValue(1, $ime);
        $statement->bindValue(2, $prezime);
        $statement->bindValue(3, $brIndexa);
        $statement->bindValue(4, $idstudent);
        
        $statement->execute();
    }
}

?>