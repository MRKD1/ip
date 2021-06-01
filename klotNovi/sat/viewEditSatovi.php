<?php 
require_once '../sat/DAO.php';
$dao = new DAO();
$sat = $dao->getOneSat($id);
$msg = isset($msg)? $msg : "";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
</head>
<body>
    <h1>Edit telefoni</h1>
    <?= $msg;?><br><br>
    <form action="../sat/" method="post">
        ID:<br>
        <input type="hidden" name="id" value="<?= $sat['id'];?>"><?= $id;?><br><br>
        Naziv:<br> 
        <?= $sat['Naziv'];?><br><br>
        Proizvodjac: <br> 
        <?= $sat['Proizvodjac'];?><br><br>
        SKU:<br>
        <input type="text" name="sku" placeholder="SKU" value="<?= $sat['SKU'];?>"><br><br>
        
        
        <input type="submit" name="action" value="izmeni">
    </form>
</body>
</html>