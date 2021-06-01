<?php
require 'DAOProizvodjaci.php';

class ControllerProizvodjaci {
    
    function getAll() {
        $dao = new DAOProizvodjaci();
        $proizvodjaci = $dao->getAllProizvodjaci();
        include '../view/viewprikazSvihProizvodjaca.php';
    }
    
    function getAllForVozila() {
        $dao = new DAOProizvodjaci();
        $proizvodjaci = $dao->getAllProizvodjaci();
        return $proizvodjaci;
    }
    
    
}
?>