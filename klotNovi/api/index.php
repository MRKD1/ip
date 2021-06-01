<?php

require_once "../sat/DAO.php";

require 'flight/Flight.php';

Flight::route('/', function(){
    echo 'hello world!';

});

Flight::route('/GET/sat', function(){

    $dao = new DAO();
    $response = $dao->getAllSatovi();
    echo json_encode($response);

});

Flight::route('/GET/sat/@id', function($id){

    $dao = new DAO();
    $response = $dao->getOneSat($id);
    echo json_encode($response);

});


Flight::start();
