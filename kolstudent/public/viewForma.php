<?php

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
    <?php
        echo $msg;
    ?>

    <form action="" method="post">
        ID: <br>
        <input type="text" name="idstudent" value> <br>
        IME: <br>
        <input type="text" name="ime"> <br>
        PREZIME: <br>
        <input type="text" name="prezime"> <br>
        INDEX: <br>
        <input type="text" name="brIndexa"> <br>
        <input type="submit" name="action" value="Update">
    </form>
</body>
</html>