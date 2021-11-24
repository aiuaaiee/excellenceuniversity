<!DOCTYPE html>
<html>
<head>
	<title>Faculty Portal</title>
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
	<div class="container vh-100">
		<div class="row justify-content-center h-100">
			<div class="card w-25 my-auto shadow">
				<div class="card-header text-center bg-primary text-white">
					<h2>Faculty Portal</h2>
				</div>
				<div class="card-body">
					<form action="facultyloginprocess.php" method="post">
						<div class="form-group">
							<label><b>Faculty Email</b></label>
							<input type="text" class="form-control" name="email" placeholder="atadvincula@eu.edu.ph" required/>
						</div>
						<div class="form-group">
							<label><b>Password</b></label>
							<input type="password" class="form-control" name="password" required />
						</div>
						<input type="submit" class="btn btn-primary w-100" value="Login" name="">
						<hr>
						<a href="eu.php"><button type="button" class="btn btn-danger w-100">Cancel</button></a>
					</form>
				</div>
				<div class="card-footer text-right">
					<small>&copy; Excellence University</small>
				</div>
			</div>
		</div>
	</div>
</body>
</html>