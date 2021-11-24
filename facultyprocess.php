<?php

$mysqli = new mysqli('localhost', 'root', '', 'eu_database') or die(mysqli_error($mysqli));

$update = false;

$facultyID = 0;

$firstname = '';
$middlename = '';
$lastname = '';
$address = '';
$position = '';
$dob = '';
$age = '';
$email = '';
$password = '';

if (isset($_POST['save'])) {
    $firstname = $_POST['firstName'];
    $address = $_POST['address'];
    $position = $_POST['jobPosition'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $mysqli->query("INSERT INTO `faculty`(`firstName`, `address`, `jobPosition`, `dob`, `email`, `password`) 
    VALUES ('$firstname','$address','$position','$dob','$email','$password')") 
        or die(mysqli_error($mysqli));

    header("location: dashfaculty.php");
}

if (isset($_GET['delete'])){
    $facultyID = $_GET['delete'];
    $mysqli->query("DELETE FROM `faculty` WHERE facultyID=$facultyID") 
        or die(mysqli_error($mysqli));

    header("location: dashfaculty.php");
}

if (isset($_GET['edit'])){
    $facultyID = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM `faculty` WHERE facultyID=$facultyID")
        or die($mysqli->error);
    if ($result->num_rows){
        $row = $result->fetch_array();
        $firstname = $row['firstName'];
        $address = $row['address'];
        $position = $row['jobPosition'];
        $dob = $row['dob'];
        $email = $row['email'];
        $password = $row['password'];
    }

}

if (isset($_POST['update'])){
    $facultyID = $_POST['facultyID'];
    $firstname = $_POST['firstName'];
    $address = $_POST['address'];
    $position = $_POST['jobPosition'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $mysqli->query("UPDATE `faculty` SET `firstName`='$firstname',`address`='$address',`jobPosition`='$position',
    `dob`='$dob',`email`='$email',`password`='$password' WHERE facultyID=$facultyID")
        or die($mysqli->error);

    header("location: dashfaculty.php");
}
