<!DOCTYPE html>
<html>
    <head>
        <title>Class Schedules Input</title>
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
        <?php require_once 'classprocess.php'; ?>
        <div class="row justify-content-center">
        <form action="classprocess.php" method="POST">
            <input type="hidden" name="classID" value="<?php echo $classID; ?>">
            <br>
            <h1>Class Subject Form</h1>
            <p>Please fill in this form and follow the format to add a new subject.</p>
            <hr>
            <div class="form-group">
                <label><b>Block</b></label>
                <input type="text" name="block" class="form-control" value="<?php echo $block; ?>" placeholder="CPE-401" required>
            </div>
            <div class="form-group">
                <label><b>Subject</b></label>
                <input type="text" name="subject" class="form-control" value="<?php echo $subject; ?>" placeholder="SOFTWAREDSNL" required>
            </div>
            <div class="form-group">
                <label><b>Time</b></label>
                <input type="text" name="time" class="form-control" value="<?php echo $time; ?>" placeholder="1:20p-4:20p" required>
            </div>
            <div class="form-group">
                <label><b>Days</b></label>
                <input type="text" name="days" class="form-control" value="<?php echo $days; ?>" placeholder="TH" required>
            </div>
            <div class="form-group">
                <label><b>Building</b></label>
                <input type="text" name="building" class="form-control" value="<?php echo $building; ?>" placeholder="SH" required>
            </div>
            <div class="form-group">
                <label><b>Room #</b></label>
                <input type="text" name="room" class="form-control" value="<?php echo $room; ?>" placeholder="101" required>
            </div>
            <hr>
            <br>
            <div class="form-group">
                <?php if ($update == true): ?>
                    <button type="submit" class="btn btn-info" name="update">Update Schedules</button>
                <?php else: ?>
                    <button type="submit" class="btn btn-primary" name="save">Add Subject</button>
                <?php endif; ?>
                    <a href="dashfaculty.php"><button type="button" class="btn btn-danger">Cancel</button></a>
            </div>
        </form>
        </div>
    </body>
</html>