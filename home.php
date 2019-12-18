<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
	<head>
		<title>KHC | Home</title>
		<link rel="stylesheet" type="text/css" href="styles.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="icon" href="images/logo/logo.png"/>
		<link rel="stylesheet" href="css/fontawesome-all.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body class="hide-scroll">
    <nav class="menu" tabindex="0">
	<div class="smartphone-menu-trigger"></div>
  <header class="avatar">
		<a href="home"><img src="images/logo/logo.png" /></a>
    <h4 class="display-6"><?php echo $_SESSION['username']; ?></h4>
  </header>
	<ul>
    <li tabindex="0" class="icon-dashboard text-uppercase active"><span><span class="fa fa-chalkboard"></span> Dashboard</span></li>
    <li tabindex="0" class="icon-customers text-uppercase"><a href="department.php"><span><span class="fa fa-project-diagram"></span> Department</span></a></li>
    <li tabindex="0" class="icon-users text-uppercase"><a href="doctordash.php"><span><span class="fa fa-user-md"></span> Doctor</span></li>
    <li tabindex="0" class="icon-settings text-uppercase"><a href="patient.php"><span><span class="fa fa-user-friends"></span> Patient</span></a></li>
    <li tabindex="0" class="icon-settings text-uppercase"><a href="medicine.php"><span><span class="fa fa-pills"></span> Medicine</span></a></li>
    <li tabindex="0" class="icon-settings text-uppercase"><a href="appointments.php"><span><span class="fa fa-newspaper"></span> Appointments</span></a></li>
    <li tabindex="0" class="icon-settings text-uppercase"><a href="donations.php"><span><span class="fa fa-tint"></span> donations</span></li>
    <li tabindex="0" class="icon-settings text-uppercase"><a href="payments.php"><span><span class="fa fa-money-check-alt"></span> Payments</span></a></li>
    <li tabindex="0" class="icon-settings text-uppercase"><a href="reports.php"><span><span class="fa fa-address-card"></span> reports</span></a></li>
    <li tabindex="0" class="icon-settings text-uppercase"><a href="index.php" style="color: #fff;"><span><span class="fas fa-sign-out-alt"></span> sign out</span></a></li>
  </ul>
</nav>
<main>
	<nav class="top-nav">
		<div class="row">
			<div class="col-md-4">
				<h4 class="header-text mt-4 "> <span class="fa fa-info-circle"></span> MAIN DASHBOARD</h4>
			</div>
			<div class="col-md-7 mt-4">
				<h4 class="header-text float-right d-none d-sm-block">
				<span class="fa fa-calendar-alt"></span>
					<?php 
					$currentDate = date('d-M-Y');
					$day= date('l');
					echo $day;
					echo "    ";
					echo $currentDate;
				?></h4>
			</div>
			<div class="col-md-1"></div>
		</div>
	</nav>
	<div class="main-dash">
			<div class="row">
				<!--One set-->
				<div class="col-md-2 mr-4">
					<div class="dash-panel mt-1">
						<div class="text-center mt-3 text-uppercase">
							<a href="department.php" class="greyText">
							<span class="fa fa-project-diagram fa-icon"></span>
							<h5 class="mt-3">Department</h5>
						</a>
						</div>
					</div>
				</div>

				<div class="col-md-2 mr-4">
					<div class="dash-panel mt-1">
						<div class="text-center mt-3 text-uppercase">
							<a href="doctordash.php" class="greyText">
							<span class="fa fa-user-md fa-icon"></span>
							<h5 class="mt-3">Doctor</h5>
						</a>
						</div>
					</div>
				</div>

				<div class="col-md-2 mr-4">
					<div class="dash-panel mt-1">
						<div class="text-center mt-3 text-uppercase">
							<a href="patient.php" class="greyText">
							<span class="fa fa-users fa-icon"></span>
							<h5 class="mt-3">Patients</h5>
						</a>
						</div>
					</div>
				</div>

				<div class="col-md-2 mr-4">
					<div class="dash-panel mt-1">
						<div class="text-center mt-3 text-uppercase">
							<a href="medicine.php" class="greyText">
							<span class="fa fa-pills fa-icon"></span>
							<h5 class="mt-3">Medicine</h5>
						</a>
						</div>
					</div>
				</div>

				<div class="col-md-2 mr-4">
					<div class="dash-panel mt-1">
						<div class="text-center mt-3 text-uppercase">
							<a href="appointments.php" class="greyText">
							<span class="fa fa-newspaper fa-icon"></span>
							<h5 class="mt-3">Appointments</h5>
						</a>
						</div>
					</div>
				</div>
			</div>

			<!-- Second row of panels -->
			<div class="row mt-4">
				<!--Second set-->
				<div class="col-md-2 mr-4">
					<div class="dash-panel mt-1">
						<div class="text-center mt-3 text-uppercase">
							<a href="donations.php" class="greyText">
							<span class="fa fa-tint fa-icon"></span>
							<h5 class="mt-3">Donations</h5>
						</a>
						</div>
					</div>
				</div>

				<div class="col-md-2 mr-4">
					<div class="dash-panel mt-1">
						<div class="text-center mt-3 text-uppercase">
							<a href="reports.php" class="greyText">
							<span class="fa fa-address-card fa-icon"></span>
							<h5 class="mt-3">Reports</h5>
						</a>
						</div>
					</div>
				</div>
				
				<!--Third set-->
				<div class="col-md-2 mr-4">
					<div class="dash-panel mt-1">
						<div class="text-center mt-3 text-uppercase">
							<a href="admissions.php" class="greyText">
							<span class="fa fa-file-medical-alt fa-icon"></span>
							<h5 class="mt-3">Admissions</h5>
						</a>
						</div>
					</div>
				</div>

				<div class="col-md-2 mr-4">
					<div class="dash-panel mt-1">
						<div class="text-center mt-3 text-uppercase">
							<a href="bedallotment" class="greyText">
							<span class="fa fa-procedures fa-icon"></span>
							<h5 class="mt-3">Bed Allotment</h5>
						</a>
						</div>
					</div>
				</div>

				<div class="col-md-2 mr-4">
					<div class="dash-panel mt-1">
						<div class="text-center mt-3 text-uppercase">
							<a href="payments.php" class="greyText">
							<span class="fa fa-money-check-alt fa-icon"></span>
							<h5 class="mt-3">PAYMENT</h5>
						</a>
						</div>
					</div>
				</div>
			</div>

			<div class="row mt-4">
				<div class="col-md-12">
					<div class="amount">
						<div class="row text-center">
							<div class="col-md-4">
								<div class="text-center mt-2 text-uppercase">
										<span class="fa fa-user-md fa-icon"></span>
										<h2 class="mt-3"><?php
										$con=mysqli_connect("localhost","root","","registration");

										$sql="SELECT name,email FROM doctors ORDER BY name";

										if ($result=mysqli_query($con,$sql))

										// Return the number of rows in result set
											$rowcount=mysqli_num_rows($result);
										printf($rowcount);
										// Free result set
										mysqli_free_result($result);
									    mysqli_close($con);
									?>
								</h2>
								</div>
							</div>
							<div class="col-md-4">
								<div class="text-center mt-2 text-uppercase">
										<span class="fa fa-users fa-icon"></span>
										<h2 class="mt-3"><?php
										$con=mysqli_connect("localhost","root","","registration");

										$sql="SELECT name,email FROM patients ORDER BY name";

										if ($result=mysqli_query($con,$sql))

										// Return the number of rows in result set
											$rowcount=mysqli_num_rows($result);
										printf($rowcount);
										// Free result set
										mysqli_free_result($result);
									    mysqli_close($con);
									?>
								</h2>
								</div>
							</div>
							<div class="col-md-4">
								<div class="text-center mt-2 text-uppercase">
										<span class="fa fa-newspaper fa-icon"></span>
										<h2 class="mt-3"><?php
										$con=mysqli_connect("localhost","root","","registration");

										$sql="SELECT patient,doctor FROM appointments ORDER BY patient";

										if ($result=mysqli_query($con,$sql))

										// Return the number of rows in result set
											$rowcount=mysqli_num_rows($result);
										printf($rowcount);
										// Free result set
										mysqli_free_result($result);
									    mysqli_close($con);
									?>
								</h2>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="text-center mt-2">
			&copy; <?php echo date('Y')?> KAWAALA HEALTH CENTER
		</div>
		</div>
</main>
    
        <script src="js/index.js"></script>
</div>		
</body>
</html>