<?php
require 'flight/Flight.php';
require_once '../student/DAOStudent.php';

Flight::route('/', function(){
    echo 'hello world!';
});

Flight::route('GET /students/@idstudent', function($idstudent) {
    $dao = new DAOStudent();
    $result = $dao->getStudentById($idstudent);
    echo json_encode($result);
});
Flight::route('PUT /students/@idstudent', function($idstudent) {
    $dao = new DAOStudent();
    var_dump(Flight::request()->data->ime);
    $ime = Flight::request()->data->ime;
    $prezime = Flight::request()->data->prezime;
    $brIndexa = Flight::request()->data->brIndexa;
    $result = $dao->update($idstudent, $ime, $prezime, $brIndexa);
    echo json_encode($result);

});


Flight::start();
