<?php

$mysqli = new mysqli('localhost', 'root', '', 'Sales') or die(mysqli_error($mysqli));

if (isset($_POST['add-item'])){
    $OrderNumber = (int)$_POST['ORDERNUMBER'];
    $Campain = $_POST['CAMPAIN'];
    $ProductName = $_POST['PRODUCTNAME'];
    $Custumer = $_POST['CUSTOMER'];
    $Status = $_POST['STATUS'];
    $date = (string)$_POST['DATE'];
    $time = $_POST['TIME'];
    $UpdateDate = $date . ' ' . $time . ':00';
    echo "<script>alert('$UpdateDate');</script>";
    
    $mysqli->query("INSERT INTO Orders (ORDERNUMBER, CAMPAIN, PRODUCTNAME, CUSTOMER, STATUS, UPDATEDATE) VALUES(
        $OrderNumber, '$Campain', '$ProductName', '$Custumer', '$Status', '$UpdateDate')") or die($mysqli->error);
    
    header("Location: index.php");
}

if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    
    $mysqli->query("DELETE FROM pedidos WHERE id=$id") or die($mysqli->error);

    header("Location: index.php");
}
