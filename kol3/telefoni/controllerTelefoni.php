<?php
require_once '../telefoni/DAOTelefoni.php';

class ControllerTelefoni {
    
    function getAllTelefoni() {
        include '../telefoni/viewTelefoni.php';
    }
    
    function deleteTelefon() {
        $id = isset($_GET['id'])? $_GET['id'] : "";
        $dao = new DAOTelefoni();
        $dao->deleteTelefoni($id);
        
        include 'viewTelefoni.php';
    }
    
    function goEditTelefon() {
        $id = isset($_GET['id'])? $_GET['id'] : "";
        
        include '../telefoni/viewEditTelefoni.php';
    }
    
    function updateTelefon() {
        $id = isset($_POST['id'])? $_POST['id'] : "";
        $cena = isset($_POST['cena'])? $_POST['cena'] : "";
        if (!empty($cena)) {
            if (is_numeric($cena)) {
                $dao = new DAOTelefoni();
                $telefon = $dao->updateTelefon($cena, $id);
                
                include '../telefoni/viewTelefoni.php';
            } else {
                $msg = "Cena mora biti broj";
                
                include '../telefoni/viewEditTelefoni.php';
            }
        } else {
            $msg = "Morate popuniti cenu";
            
            include '../telefoni/viewEditTelefoni.php';
        }
    }
}

?>