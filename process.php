<?php

$mysqli = new mysqli('localhost', 'root', '', 'Sales') or die(mysqli_error($mysqli));

if (isset($_POST['add-item'])){
        $Id = $_Post['ID'];
        $OrderNumber = $_POST['ORDERNUMBER'];
        $Campain = $_POST['CAMPAIN'];
        $ProductName = $_POST['PRODUCTNAME'];
        $Custumer = $_POST['CUSTOMER'];
        $Status = $_POST['STATUS'];
        $UpdateDate = $_POST['UPDATEDATE'];
        
    $mysqli->query("INSERT INTO Orders (ORDERNUMBER, CAMPAIN, PRODUCTNAME, CUSTOMER, STATUS, UPDATEDATE) VALUES(
        '$OrderNumber', '$Campain', '$ProductName', '$Custumer', '$Status', '$UpdateDate')") or die($mysqli->error);
    
    header("Location: index.php");
}

if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    
    $mysqli->query("DELETE FROM pedidos WHERE id=$id") or die($mysqli->error);

    header("Location: index.php");
}