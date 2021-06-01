<?php
    require_once '../telefoni/DAOTelefoni.php';
    $dao = new DAOTelefoni();
    $telefoni = $dao->getAllTelefoni();
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
    <h1>TELEFONI</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>NAZIV</th>
            <th>CENA</th>
            <th>ID PROIZVODJACA</th>
            <th>NAZIV PROIZVODJACA</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
        <?php foreach ($telefoni as $telefon) {?>
        <tr>
            <td><?= $telefon['id'];?></td>
            <td><?= $telefon['naziv'];?></td>
            <td><?= $telefon['cena'];?></td>
            <td><?= $telefon['id_proizvodjaca'];?></td>
            <td><?= $telefon['naziv'];?></td>
            <td><a href="../telefoni/?action=goedit&id=<?= $telefon['id'];?>">EDIT</a></td>
            <td><a href="../telefoni/?action=delete&id=<?= $telefon['id'];?>">DELETE</a></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>