<?php
require 'flight/Flight.php';
require_once '../proizvodjaci/DAOProizvodjaci.php';

Flight::route('/', function(){
    echo 'hello world!';
});

Flight::route('GET /proizvodjaci', function(){
    $dao = new DAOProizvodjaci();
    $response = $dao->getAllProizvodjaci();
    echo json_encode($response);
});
    
Flight::route('PUT /proizvodjaci/@id', function($id){
    $dao = new DAOProizvodjaci();
    $naziv = Flight::request()->data->naziv;
    //$id = Flight::request()->data->id;
    $response = $dao->updateProizvodjac($naziv, $id);
    var_dump($naziv);
    var_dump($id);
    echo json_encode($response);
});



Flight::start();
?>
