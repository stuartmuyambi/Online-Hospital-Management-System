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
		<title>KHC | Departments</title>
		<link rel="stylesheet" type="text/css" href="styles.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="icon" href="images/logo/logo.png"/>
		<link rel="stylesheet" href="css/fontawesome-all.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
    <nav class="menu" tabindex="0">
	<div class="smartphone-menu-trigger"></div>
  <header class="avatar">
		<a href="home"><img src="images/logo/logo.png" /></a>
    <h4 class="display-6"><?php echo $_SESSION['username']; ?></h4>
  </header>
	<ul>
    <li tabindex="0" class="icon-dashboard text-uppercase"><span><span class="fa fa-chalkboard"></span> <a href="home.php">Dashboard</a></span></li>
    <li tabindex="0" class="icon-customers text-uppercase active"><span><span class="fa fa-project-diagram"></span>Department</span></li>
    <li tabindex="0" class="icon-users text-uppercase"> <a href="doctordash.php"><span><span class="fa fa-user-md"></span> Doctor</span></a></li>
    <li tabindex="0" class="icon-settings text-uppercase"><a href="patient.php"><span><span class="fa fa-user-friends"></span> Patient</span></a></li>
    <li tabindex="0" class="icon-settings text-uppercase"><a href="medicine.php"><span><span class="fa fa-pills"></span> Medicine</span></a></li>
    <li tabindex="0" class="icon-settings text-uppercase"><a href="appointments.php"><span><span class="fa fa-newspaper"></span> Appointments</span></a></li>
    <li tabindex="0" class="icon-settings text-uppercase"><a href="donations.php"><span><span class="fa fa-tint"></span> donations</span></li>
    <li tabindex="0" class="icon-settings text-uppercase"><a href="payments.php"><span><span class="fa fa-money-check-alt"></span> Payments</span></a></li>
    <li tabindex="0" class="icon-settings text-uppercase"><a href="finance.php"><span><span class="fa fa-money-bill-wave"></span> Finance</span></a></li>
    <li tabindex="0" class="icon-settings text-uppercase"><a href="reports.php"><span><span class="fa fa-address-card"></span> reports</span></a></li>
    <li tabindex="0" class="icon-settings text-uppercase"><a href="index.php" style="color: #fff;"><span><span class="fas fa-sign-out-alt"></span> Sign out</span></a></li>
  </ul>
</nav>
<main>
	<nav class="top-nav">
		<div class="row">
			<div class="col-md-4">
				<h4 class="header-text mt-4 text-uppercase"> <span class="fa fa-project-diagram"></span> Manage Departments</h4>
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
	<div class="tab-container">
    <!-- Begining of Tab -->

      <ul class="nav nav-tabs tab-header" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#home2" role="tab"> <span class="fa fa-align-justify"></span>  DEPARTMENTS LIST</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#profile2" role="tab"><span class="fa fa-plus"></span> ADD DEPARTMENT</a>
        </li>
      </ul>

      <div class="tab-content" role="tablist">
        <div class="tab-pane fade show active bg-color" id="home2" role="tabpanel">
          <div>
          	<div class="tab-div">
          		<?php
          		$con=mysqli_connect("localhost","root","","registration");
          		$result = mysqli_query($con,"SELECT * FROM departments");

          		echo "<table class='table table-striped'>
          		<tr style='background-color: #f16d00d8; color: #fff;'>
          		<th>ID</th>
          		<th>DEPARTMENT</th>
          		<th>DESCRIPTION</th>
          		</tr>";

          		while($row = mysqli_fetch_array($result))
          			{
          				echo "<tr>";
          				echo "<td>" . $row['id'] . "</td>";
          				echo "<td>" . $row['Department'] . "</td>";
          				echo "<td>" . $row['Description'] . "</td>";
          				echo "</tr>";
          			}
          			echo "</table>";
          			mysqli_close($con);
          			?>

          		</div>
          	</div>
        </div>
        <!-- Second tab -->
        <div class="tab-pane fade bg-color" id="profile2" role="tabpanel">
        	<!-- Beginning of form section -->
        	<div class="form-tab mx-auto">
        		<div class="form-padding">
        			<form class="form-horizontal" role="form" action="departmentinsert.php" method="post">
        				<div class="form-group">
        					<div class="col-sm-10 ">
        						<input type="text" class="form-control" id="department" name="department" placeholder="Department Name">
        					</div>
        				</div>
        				<div class="form-group">
        					<div class="col-sm-10"> 
        						<input type="text" class="form-control" id="description" name="description" placeholder="Department Description">
        					</div>
        				</div>
        				<div class="bg-button">
        					<div class="form-group mt-3"> 
        						<div class="col-sm-offset-2 col-sm-10">
        							<button type="submit" class="btn btn-primary">ADD DEPARTMENT</button>
        						</div>
        					</div>
        				</div>
        			</form>
        		</div>
        	</div>
        </div>
        <!-- End of form section -->

        <!-- End of Tab -->

    </div>
    <div class="text-center mt-2">
    	&copy; <?php echo date('Y')?> KAWAALA HEALTH CENTER
    </div>
</main>
<script src="js/index.js"></script>
<script src="js/jquery-slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/util.js"></script>
<script src="js/tab.js"></script>
<script src="js/dropdown.js"></script>
</div>		
</body>
</html>