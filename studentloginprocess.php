<?php
    $email = $_POST["email"];
    $password = $_POST["password"];

    //Database connection here
    $con = new mysqli('localhost', 'root', '', 'eu_database');
    if($con->connect_error) {
        die("Failed to connect: ".$con->connect_error);
    } else {
        $stmt = $con->prepare("SELECT * FROM `students` WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows > 0) {
            $data = $stmt_result->fetch_assoc();
            if($data['password'] === $password) {
                header("location: studentsuccess.php");
            } else {
                header("location: studentfailed.php");
            }
        } else {
            header("location: studentfailed.php");
        }
    }
?>