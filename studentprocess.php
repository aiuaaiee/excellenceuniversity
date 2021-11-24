<?php

$mysqli = new mysqli('localhost', 'root', '', 'eu_database') or die(mysqli_error($mysqli));

$update = false;

$studentID = 0;

$firstname = '';
$address = '';
$level = '';
$course = '';
$dob = '';
$email = '';
$password = '';

if (isset($_POST['save'])) {
    $firstname = $_POST['firstName'];
    $address = $_POST['address'];
    $level = $_POST['level'];
    $course = $_POST['course'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $mysqli->query("INSERT INTO `students`(`firstName`,`address`, `yearLevel`, `course`, `dob`, `email`, `password`) 
    VALUES ('$firstname','$address','$level','$course','$dob','$email','$password')") 
        or die(mysqli_error($mysqli));

    header("location: dashstudent.php");
}

if (isset($_GET['delete'])){
    $studentID = $_GET['delete'];
    $mysqli->query("DELETE FROM `students` WHERE studentID=$studentID") 
        or die(mysqli_error($mysqli));

    header("location: dashstudent.php");
}

if (isset($_GET['edit'])){
    $studentID = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM `students` WHERE studentID=$studentID")
        or die($mysqli->error);
    if ($result->num_rows){
        $row = $result->fetch_array();
        $firstname = $row['firstName'];
        $address = $row['address'];
        $level = $row['yearLevel'];
        $course = $row['course'];
        $dob = $row['dob'];
        $email = $row['email'];
        $password = $row['password'];
    }

}

if (isset($_POST['update'])){
    $studentID = $_POST['studentID'];
    $lastname = $_POST['lastName'];
    $address = $_POST['address'];
    $level = $_POST['level'];
    $course = $_POST['course'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $mysqli->query("UPDATE `students` SET `firstName`='$firstname',`address`='$address',`yearLevel`='$level',`course`='$course',
    `dob`='$dob',`email`='$email',`password`='$password' WHERE studentID=$studentID")
        or die($mysqli->error);

    header("location: dashstudent.php");
}
