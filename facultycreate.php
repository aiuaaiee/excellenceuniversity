<!DOCTYPE html>
<html>
    <head>
        <title>Faculty Member Form</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
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
        <?php require_once 'facultyprocess.php'; ?>
        <div class="row justify-content-center">
        <form action="facultyprocess.php" method="POST">
            <input type="hidden" name="facultyID" value="<?php echo $facultyID; ?>">
            <br>
            <h1>Faculty Member Account</h1>
            <p>Please fill in this form and follow the format to create an account.</p>
            <hr>
            <div class="form-group">
                <label><b>Full Name</b></label>
                <input type="text" name="firstName" class="form-control" value="<?php echo $firstname; ?>" placeholder="Victorino, Jan Kerwin N." required>
            </div>
            <div class="form-group">
                <label><b>City</b></label>
                <input type="text" name="address" class="form-control" value="<?php echo $address; ?>" placeholder="Angeles City" required>
            </div>
            <div class="form-group">
                <label><b>Job Position</b></label>
                <input type="text" name="jobPosition" class="form-control" value="<?php echo $position; ?>" placeholder="Professor" required>
            </div>
            <div class="form-group">
                <label><b>Date of Birth</b></label>
                <input type="text" name="dob" class="form-control" value="<?php echo $dob; ?>" placeholder="MM/DD/YYYY" required>
            </div>
            <div class="form-group">
                <label><b>Email</b></label>
                <input type="email" name="email" class="form-control" value="<?php echo $email; ?>" placeholder="jkvictorino@eu.edu.ph" required>
            </div>
            <div class="form-group">
                <label><b>Password</b></label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>" placeholder="Enter Password" required>
            </div>
            <hr>
            <br>
            <div class="form-group">
                <?php if ($update == true): ?>
                    <button type="submit" class="btn btn-info" name="update">Update Faculty</button>
                <?php else: ?>
                    <button type="submit" class="btn btn-primary" name="save">Add Faculty</button>
                <?php endif; ?>
                    <a href="dashfaculty.php"><button type="button" class="btn btn-danger">Cancel</button></a>
            </div>
        </form>
        </div>
    </body>
</html>