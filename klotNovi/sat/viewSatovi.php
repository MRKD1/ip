<?php

include_once "../sat/DAO.php";
$dao = new DAO();
$satovi = $dao->getAllSatovi();

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
    <table border="1" st>

        <tr>
            <td>ID</td>
            <td>Naziv</td>
            <td>Proizvodjac</td>
            <td>SKU</td>
            <td>Izmeni</td>
            <td>Izbrisi</td>
        </tr>
        <?php foreach ($satovi as $sat) { ?>
            <tr>
                <td><?php echo $sat['id']; ?></td>
                <td><?php echo $sat['Naziv']; ?></td>
                <td><?php echo $sat['Proizvodjac']; ?></td>
                <td><?php echo $sat['SKU']; ?></td>
                <td><a href="../sat/?action=goedit&id=<?= $sat['id'] ?>">Izmeni</a></td>
                <td><a href="../sat/?action=delete&id=<?= $sat['id'] ?>">Izbrisi</a></td>
            </tr>
        <?php } ?>
    </table>
    <br>
    <br>




</body>

</html>