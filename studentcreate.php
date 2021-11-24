<!DOCTYPE html>
<html>

<head>
    <title>Student Form</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="icon"
            href="https://www.pngitem.com/pimgs/m/621-6218014_huddle-icons-students-per-school-school-icon-png.png"
            type="icon type">

    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
        }
    </style>
</head>

<body>
    <?php require_once 'studentprocess.php'; ?>
    <div class="row justify-content-center">
        <form action="studentprocess.php" method="POST">
            <input type="hidden" name="studentID" value="<?php echo $studentID; ?>">
            <br>
            <h1>Student Account</h1>
            <p>Please fill in this form and follow the format to create an account.</p>
            <hr>
            <div class="form-group">
                <label><b>Full Name</b></label>
                <input type="text" name="firstName" class="form-control" value="<?php echo $firstname; ?>" placeholder="Advincula, Ailene T." required>
            </div>
            <div class="form-group">
                <label><b>City</b></label>
                <input type="text" name="address" class="form-control" value="<?php echo $address; ?>" placeholder="Angeles City" required>
            </div>
            <div class="form-group">
                <label><b>Year Level</b></label>
                <input type="text" name="level" class="form-control" value="<?php echo $level; ?>" placeholder="First Year" required>
            </div>
            <div class="form-group">
                <label><b>Course</b></label>
                <input type="text" name="course" class="form-control" value="<?php echo $course; ?>" placeholder="Computer Engineering" required>
            </div>
            <div class="form-group">
                <label><b>Date of Birth</b></label>
                <input type="text" name="dob" class="form-control" value="<?php echo $dob; ?>" placeholder="MM/DD/YYYY" required>
            </div>
            <div class="form-group">
                <label><b>Student Email</b></label>
                <input type="email" name="email" class="form-control" value="<?php echo $email; ?>" placeholder="atadvincula@eu.edu.ph" required>
            </div>
            <div class="form-group">
                <label><b>Password</b></label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>" placeholder="Enter Password" required>
            </div>
            <hr>
            <br>
            <div class="form-group">
                <?php if ($update == true): ?>
                    <button type="submit" class="btn btn-info" name="update">Update Student</button>
                <?php else: ?>
                    <button type="submit" class="btn btn-primary" name="save">Add Student</button>
                <?php endif; ?>
                    <a href="dashstudent.php"><button type="button" class="btn btn-danger">Cancel</button></a>
            </div>
        </form>
    </div>
</body>

</html>