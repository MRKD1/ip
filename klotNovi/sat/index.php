<?php 
require_once '../sat/controllerTemplate-basic.php';

$action = isset($_REQUEST['action'])? $_REQUEST['action'] : "goSat";

$ct = new controllerStudent();

switch ($_SERVER['REQUEST_METHOD']) {
    case "GET":
        switch ($action) {
            case "goSat":
                $ct->viewSatovi();
                break;
            case "goedit":
                $ct->goEditSat();
                break;
            case "delete":
                $ct->deleteSat();
                break;

        }
        break;
    case "POST":
        switch($action){
            case "izmeni":
                $ct->izmeniSat();
                break;
        }

   
}

