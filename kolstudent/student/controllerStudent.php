<?php

require_once './DAOStudent.php';
session_start();

class controllerStudent{
    function update() {
        $idstudent = isset($_POST['idstudent']) ? $_POST['idstudent'] : "";
        $ime = isset($_POST['ime']) ? $_POST['ime'] : "";
        $prezime = isset($_POST['prezime']) ? $_POST['prezime'] : "";
        $brIndexa = isset($_POST['brIndexa']) ? $_POST['brIndexa'] : "";

        if (!empty($idstudent) && !empty($ime) && !empty($prezime) && !empty($brIndexa)) {
            $dao = new DAOStudent();
            $postoji = $dao->getStudentById($idstudent);
            if ($postoji == true) {
                $dao->update($idstudent, $ime, $prezime, $brIndexa);
                $_SESSION['korisnik'] = $idstudent;

                include '../public/prikaz.php';
            } else {
                $msg = "Student sa datim brojem indeksa ne postoji";
                include '../public/viewForma.php';
            }
        } else {
            $msg = "Morate popuniti sva polja";
            include '../public/viewForma.php';
        }
    }

    function logout() {
        if($_SESSION["korisnik"]!= "") {
            session_unset($_SESSION["korisnik"]);
            session_destroy();
            include '../public/viewForma.php';
        }
    }
}

?>