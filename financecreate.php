<!DOCTYPE html>
<html>
    <head>
        <title>Finances</title>
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
        <?php require_once 'financeprocess.php'; ?>
        <div class="row justify-content-center">
        <form action="financeprocess.php" method="POST">
            <input type="hidden" name="financeID" value="<?php echo $financeID; ?>">
            <br>
            <h1>Finance Form</h1>
            <p>Please fill in this form and follow the format.</p>
            <hr>
            <div class="form-group">
                <label><b>Date</b></label>
                <input type="text" name="date" class="form-control" value="<?php echo $date; ?>" placeholder="DD/MM/YYYY" required>
            </div>
            <div class="form-group">
                <label><b>Teller</b></label>
                <input type="text" name="teller" class="form-control" value="<?php echo $teller; ?>" placeholder="teller01" required>
            </div>
            <div class="form-group">
                <label><b>Student Name</b></label>
                <input type="text" name="studName" class="form-control" value="<?php echo $name; ?>" placeholder="Bondoc, Matthew D." required>
            </div>
            <div class="form-group">
                <label><b>Remarks</b></label>
                <input type="text" name="remarks" class="form-control" value="<?php echo $remarks; ?>" placeholder="Reservation Fee" required>
            </div>
            <div class="form-group">
                <label><b>Amount</b></label>
                <input type="text" name="amount" class="form-control" value="<?php echo $amount; ?>" placeholder="2,000.00" required>
            </div>
            <hr>
            <br>
            <div class="form-group">
                <?php if ($update == true): ?>
                    <button type="submit" class="btn btn-info" name="update">Update Finances</button>
                <?php else: ?>
                    <button type="submit" class="btn btn-primary" name="save">Add Finance</button>
                <?php endif; ?>
                    <a href="dashfinance.php"><button type="button" class="btn btn-danger">Cancel</button></a>
            </div>
        </form>
        </div>
    </body>
</html>