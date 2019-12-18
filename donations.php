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
		<title>KHC | Donations</title>
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
    <li tabindex="0" class="icon-dashboard text-uppercase"><a href="home.php"><span><span class="fa fa-chalkboard"></span> Dashboard</span></a></li>
    <li tabindex="0" class="icon-customers text-uppercase"><a href="department.php"><span><span class="fa fa-project-diagram"></span> Department</span></a></li>
    <li tabindex="0" class="icon-users text-uppercase"><a href="doctordash.php"><span><span class="fa fa-user-md"></span> Doctor</span></li>
    <li tabindex="0" class="icon-settings text-uppercase"><span><span class="fa fa-user-friends"></span> Patient</span></li>
    <li tabindex="0" class="icon-settings text-uppercase"><a href="medicine.php"><span><span class="fa fa-pills"></span> Medicine</span></a></li>
    <li tabindex="0" class="icon-settings text-uppercase"><a href="appointments.php"><span><span class="fa fa-newspaper"></span> Appointments</span></a></li>
    <li tabindex="0" class="icon-settings text-uppercase active"><a href="donations.php"><span><span class="fa fa-tint"></span> donations</span></li>
    <li tabindex="0" class="icon-settings text-uppercase"><a href="payments.php"><span><span class="fa fa-money-check-alt"></span> Payments</span></a></li>
    <li tabindex="0" class="icon-settings text-uppercase"><a href="finance.php"><span><span class="fa fa-money-bill-wave"></span> Finance</span></a></li>
    <li tabindex="0" class="icon-settings text-uppercase"><a href="reports.php"><span><span class="fa fa-address-card"></span> reports</span></a></li>
    <li tabindex="0" class="icon-settings text-uppercase"><a href="index.php" style="color: #fff;"><span><span class="fas fa-sign-out-alt"></span> sign out</span></a></li>
  </ul>
</nav>
<main>
	<nav class="top-nav">
		<div class="row">
			<div class="col-md-7">
				<h4 class="header-text mt-4 "> <span class="fa fa-tint"></span> MANAGE BLOOD DONATIONS</h4>
			</div>
			<div class="col-md-4 mt-4">
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
	</nav>
	<div class="main-dash">

		<div class="tab-container">
    <!-- Begining of Tab -->

      <ul class="nav nav-tabs tab-header" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#home2" role="tab"> <span class="fa fa-align-justify"></span> BLOOD DONORS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#profile2" role="tab"><span class="fa fa-plus"></span> ADD BLOOD DONOR</a>
        </li>
      </ul>

      <div class="tab-content" role="tablist">
        <div class="tab-pane fade show active bg-color" id="home2" role="tabpanel">
          <div>
          	<div class="tab-div">
          		<?php
          		$con=mysqli_connect("localhost","root","","registration");
          		$result = mysqli_query($con,"SELECT * FROM donars");

          		echo "<table class='table table-striped'>
          		<tr style='background-color: #f16d00d8; color: #fff;'>
          		<th>ID</th>
          		<th>NAME</th>
          		<th>AGE</th>
          		<th>SEX</th>
              <th>BLOOD GROUP</th>
          		</tr>";

          		while($row = mysqli_fetch_array($result))
          			{
          				echo "<tr>";
          				echo "<td>" . $row['id'] . "</td>";
          				echo "<td>" . $row['name'] . "</td>";
          				echo "<td>" . $row['age'] . "</td>";
          				echo "<td>" . $row['sex'] . "</td>";
                  echo "<td>" . $row['bloodgroup'] . "</td>";
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
        			<form class="form-horizontal" role="form" action="" method="post">
        				<div class="form-group">
        					<div class="col-sm-10 ">
        						<input type="text" class="form-control" id="name" name="name" placeholder="Donars name">
        					</div>
        				</div>
        				<div class="form-group">
        					<div class="col-sm-10 ">
        						<input type="text" class="form-control" id="age" name="age" placeholder="Donar's Age">
        					</div>
        				</div>
        				<div class="form-group">
        					<div class="col-sm-10 ">
                    <select name="sex" id="sex" class="form-control">
                      <option value="">Gender</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select>
        					</div>
        				</div>
                <div class="form-group">
                  <div class="col-sm-10 ">
                    <select name="bloodgroup" id="bloodgroup" class="form-control">
                      <option value="">Blood Group</option>
                      <option value="O+">O-positive</option>
                      <option value="O-">O-negative</option>
                      <option value="A+">A-positive</option>
                      <option value="A-">A-negative</option>
                      <option value="B+">B-positive</option>
                      <option value="B-">B-negative</option>
                      <option value="AB+">AB-positive</option>
                      <option value="AB-">AB-negative</option>
                    </select>
                  </div>
                </div>
        				<div class="bg-button">
        					<div class="form-group mt-3"> 
        						<div class="col-sm-offset-2 col-sm-10">
        							<button type="submit" class="btn btn-primary">ADD DONATION RECORD</button>
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
		</div>
</main>
    
        <script src="js/index.js"></script>
</div>
<script src="js/index.js"></script>
<script src="js/jquery-slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/util.js"></script>
<script src="js/tab.js"></script>
<script src="js/dropdown.js"></script>		
</body>
</html>