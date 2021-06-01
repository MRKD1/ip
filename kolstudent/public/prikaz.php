<?php
require_once '../student/DAOStudent.php';
if(!isset($_SESSION)) session_start();
if($_SESSION["korisnik"]!="") {
    $dao = new DAOStudent();
    $student = $dao->getStudent($_SESSION['korisnik']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    ID:<?= $student["idstudent"]?> <br>
    IME:<?= $student["ime"]?> <br>
    PREZIME:<?= $student["prezime"]?> <br>
    INDEX:<?= $student["brIndexa"]?> <br>
    <a href="../student/?action=logout">LOGOUT</a>
</body>
</html>

<?php
} else {
    header("Location:../index.php");
}
?>

