<?php

$mysqli = new mysqli('localhost', 'root', '', 'eu_database') or die(mysqli_error($mysqli));

$update = false;

$classID = 0;

$block = '';
$subject = '';
$time = '';
$days = '';
$building = '';
$room = '';

if (isset($_POST['save'])) {
    $block = $_POST['block'];
    $subject = $_POST['subject'];
    $time = $_POST['time'];
    $days = $_POST['days'];
    $building = $_POST['building'];
    $room = $_POST['room'];

    $mysqli->query("INSERT INTO `class`(`block`, `subject`, `time`, `days`, `building`, `room`) 
    VALUES ('$block','$subject','$time','$days','$building','$room')") 
        or die(mysqli_error($mysqli));

    header("location: dashclass.php");
}

if (isset($_GET['delete'])){
    $classID = $_GET['delete'];
    $mysqli->query("DELETE FROM `class` WHERE classID=$classID") 
        or die(mysqli_error($mysqli));

    header("location: dashclass.php");
}

if (isset($_GET['edit'])){
    $classID = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM `class` WHERE classID=$classID")
        or die($mysqli->error);
    if ($result->num_rows){
        $row = $result->fetch_array();
        $block = $row['block'];
        $subject = $row['subject'];
        $time = $row['time'];
        $days = $row['days'];
        $building = $row['building'];
        $room = $row['room'];
    }

}

if (isset($_POST['update'])){
    $classID = $_POST['classID'];
    $block = $_POST['block'];
    $subject = $_POST['subject'];
    $time = $_POST['time'];
    $days = $_POST['days'];
    $building = $_POST['building'];
    $room = $_POST['room'];

    $mysqli->query("UPDATE `class` SET `block`='$block',`subject`='$subject',`time`='$time',
    `days`='$days',`building`='$building',`room`='$room' WHERE classID=$classID")
        or die($mysqli->error);

    header("location: dashclass.php");
}
