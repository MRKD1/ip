<?php
require_once 'ControllerTelefoni.php';
$action = isset($_REQUEST['action'])? $_REQUEST['action'] : "goTelefoni";
$ct = new ControllerTelefoni();

switch ($_SERVER['REQUEST_METHOD']) {
    case "GET":
        switch ($action) {
            case "goTelefoni":
                $ct->getAllTelefoni();
                break;
                
            case "delete":
                $ct->deleteTelefon();
                break;
            case "goedit":
                $ct->goEditTelefon();
                break;
        }
        break;
    case "POST":
        switch ($action) {
            case "Save":
                $ct->updateTelefon();
                break;
            
        }
        break;
}
?>