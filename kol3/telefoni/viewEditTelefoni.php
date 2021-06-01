<?php
    require_once '../telefoni/DAOTelefoni.php';
    $dao = new DAOTelefoni();
    $tel = $dao->getTelefonById($id);
    $msg = isset($msg) ? $msg : "";
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
    <h1>EDIT TELEFON</h1>
    <?= $msg;?> <br><br>
    <form action="../telefoni" method="post">
        ID: <br>
        <input type="hidden" name="id" value="<?= $tel['id'];?>"> <?= $id;?> <br><br>
        NAZIV: <br>
        <?= $tel['naziv'];?> <br><br>
        CENA: <br>
        <input type="text" name="cena" placeholder="cena" value="<?= $tel['cena'];?>"> <br><br>
        <?= $tel['id_proizvodjaca'];?><br><br>
        Naziv proizvodjaca: <br> 
        <?= $tel['naziv'];?><br><br>
        <input type="submit" name="action" value="Save">
    </form>
</body>
</html>