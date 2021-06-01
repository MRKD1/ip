<?php

 include_once "../sat/DAO.php";

class controllerStudent {



    function viewSatovi () {
        include_once "../sat/viewSatovi.php";
    }


    function deleteSat(){
        $id = ($_GET['id'])?$_GET['id']:"";
        $dao = new DAO;
        $dao->deleteSat($id);
        include_once "../sat/viewSatovi.php";
    }

    function goEditSat() {
        $id = isset($_GET['id'])? $_GET['id'] : "";
        
        include '../sat/viewEditSatovi.php';
    }

   

    function izmeniSat() {
        $id = isset($_POST['id'])? $_POST['id'] : "";
        $sku = isset($_POST['sku'])? $_POST['sku'] : "";
        if (!empty($sku)) {
            if (is_numeric($sku)) {
                $dao = new DAO();
                $sat = $dao->updateSat($id, $sku);
                
                include_once "../sat/viewSatovi.php";
            } else {
                $msg = "SKU mora biti broj";
                
                include '../sat/viewEditSatovi.php';
            }
        } else {
            $msg = "Morate popuniti SKU";
            
            include '../sat/viewEditSatovi.php';
        }
    }


















    // function getAllStudents(){
    //     include_once "./viewAllStudents.php";
    // }

    // function deleteStudent(){
    //     $id = isset($_GET['id'])? $_GET['id']:"";
    //     $dao = new DAO();
    //     // $dao->deleteStudent($id);
    //     include_once "./viewAllStudents.php";
    // }

    // function editOcena(){
    //     $id = isset($_GET['id'])?$_GET['id']:"";
    //     include_once "./viewEditOcena.php";
    // }

    // function editOcenaForReal(){
    //     $id = isset($_POST['id'])?$_POST['id']:"";
    //     $ocena = isset($_POST['ocna'])?$_POST['ocna']:"";
    //     $dao = new DAO();
    //     // $dao->updateOcena($id, $ocena);
    //     include_once "./viewAllStudents.php";
    // }

    // function addStudent(){
    //     $ime = isset($_POST['ime'])?$_POST['ime']:"";
    //     $prezime = isset($_POST['prezime'])?$_POST['prezime']:"";
    //     $ocena = isset($_POST['ocena'])?$_POST['ocena']:"";
    //     $dao = new DAO();
    //     // $dao->addStudent($ime, $prezime, $ocena);
    //     include_once "./viewAllStudents.php";
    // }

}


?>