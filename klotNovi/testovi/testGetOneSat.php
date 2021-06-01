<?php

    include_once "../sat/DAO.php";
    $dao = new DAO();
    $sat = $dao->getOneSat(5);
    
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
    <p><?= $sat['id'] ?></p>
    <p><?= $sat['Naziv'] ?></p>
    <p><?= $sat['Proizvodjac'] ?></p>
    <p><?= $sat['SKU'] ?></p>
</body>
</html>