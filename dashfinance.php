<!DOCTYPE html>
<html>
    <head>
        <title>Admin Dashboard</title>

        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="icon" href="https://www.pngitem.com/pimgs/m/621-6218014_huddle-icons-students-per-school-school-icon-png.png"
            type="icon type">

            <style>
            header {
                background-color: #666;
                padding: 15px;
                text-align: left;
                font-size: 35px;
                font-family: 'Times New Roman', Times, serif;
                color: #f1f1f1;
                border: 2px solid #555;
            }

            body {
                font-family: 'Times New Roman', Times, serif;
            }

            .left {
                float: right;
            }

            .sidebar {
                margin: 0;
                padding: 0;
                width: 200px;
                background-color: #f1f1f1;
                position: absolute;
                height: 100%;
                overflow: auto;
                font-size: large;
                border-right: 2px solid #555;
            }

            .sidebar a {
                display: block;
                color: black;
                padding: 16px;
                text-decoration: none;
            }
                
            .sidebar a.active {
                background-color: #666;
                color: white;
            }

            .sidebar a:hover:not(.active) {
                background-color: #555;
                color: white;
            }

            div.content {
                margin-left: 200px;
                padding: 1px 16px;
            }

            th, td {
                text-align: center;
            }

            th {
                background-color: #666;
                color: #f1f1f1;
            }

            .secret {
                background-color: transparent;
                background-repeat: no-repeat;
                border: none;
                cursor: pointer;
                overflow: hidden;
                outline: none;
                color: #f1f1f1;
            }
        </style>

    </head>

    <body>
        <header>
            <form method="POST" action="eu.php">
                <button type="submit" class="secret">Excellence University</button>
            </form>
        </header>
        
        <div class="sidebar">
        <br>
            <a href="dashstudent.php">Students</a>
            <a href="dashfaculty.php">Faculty Members</a>
            <a href="dashclass.php">Class Schedules</a>
            <a class="active" href="dashfinance.php">Finances</a>
        </div>

        <?php
            $mysqli = new mysqli('localhost', 'root', '', 'eu_database') or die(mysqli_error($mysqli));
            $result = $mysqli->query("SELECT * FROM finance") or die($mysqli->error);
        ?>

        <br>
        
        <div class="content">
            <h3><b>List of finances this school year 2021 - 2022</b></h3>
            
            <form method="POST" action="financecreate.php">
                <button type="submit" class="left">Add Finance</button>
            </form>

            <br><br>

            <table class="table">
                <thead>
                    <tr>
                        <th>Item ID</th>
                        <th>Date</th>
                        <th>Teller</th>
                        <th>Student Name</th>
                        <th>Remarks</th>
                        <th>Amount</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>

                <?php
                    while ($row = $result->fetch_assoc()):
                ?>

                    <tr>
                        <td><?php echo $row['financeID']?></td>
                        <td><?php echo $row['date']?></td>
                        <td><?php echo $row['teller']?></td>
                        <td><?php echo $row['studName']?></td>
                        <td><?php echo $row['remarks']?></td>
                        <td><?php echo $row['amount']?></td>
                        <td>
                            <a href="financecreate.php?edit=<?php echo $row['financeID'];?>"
                                class="btn btn-info">Edit</a>
                            <a href="financecreate.php?delete=<?php echo $row['financeID'];?>"
                                class="btn btn-danger">Delete</a>
                        </td>
                    </tr>

                <?php endwhile; ?>

            </table>
        </div>

        <?php
            function pre_r($array) {
                echo '<pre>';
                print_r($array);
                echo '</pre>';
            }
        ?>

    </body>

</html>