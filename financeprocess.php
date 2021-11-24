<?php

$mysqli = new mysqli('localhost', 'root', '', 'eu_database') or die(mysqli_error($mysqli));

$update = false;

$financeID = 0;

$date = '';
$teller = '';
$name = '';
$remarks = '';
$amount = '';

if (isset($_POST['save'])) {
    $date = $_POST['date'];
    $teller = $_POST['teller'];
    $name = $_POST['studName'];
    $remarks = $_POST['remarks'];
    $amount = $_POST['amount'];

    $mysqli->query("INSERT INTO `finance`(`date`, `teller`, `studName`, `remarks`, `amount`) 
    VALUES ('$date','$teller','$name','$remarks','$amount')") 
        or die(mysqli_error($mysqli));

    header("location: dashfinance.php");
}

if (isset($_GET['delete'])){
    $financeID = $_GET['delete'];
    $mysqli->query("DELETE FROM `finance` WHERE financeID=$financeID") 
        or die(mysqli_error($mysqli));

    header("location: dashfinance.php");
}

if (isset($_GET['edit'])){
    $financeID = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM `finance` WHERE financeID=$financeID")
        or die($mysqli->error);
    if ($result->num_rows){
        $row = $result->fetch_array();
        $date = $row['date'];
        $teller = $row['teller'];
        $name = $row['studName'];
        $remarks = $row['remarks'];
        $amount = $row['amount'];
    }

}

if (isset($_POST['update'])){
    $financeID = $_POST['financeID'];
    $date = $_POST['date'];
    $teller = $_POST['teller'];
    $name = $_POST['studName'];
    $remarks = $_POST['remarks'];
    $amount = $_POST['amount'];

    $mysqli->query("UPDATE `finance` SET `date`='$date',`teller`='$teller',`studName`='$name',`remarks`='$remarks',
    `amount`='$amount' WHERE financeID=$financeID")
        or die($mysqli->error);

    header("location: dashfinance.php");
}
