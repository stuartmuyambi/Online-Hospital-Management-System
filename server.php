<?php 
	session_start();

	// variable declaration
	$username = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'registration');

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, '<div class="alert alert-warning">Username is required</div>'); }
		if (empty($password_1)) { array_push($errors, '<div class="alert alert-warning">Password is required</div>'); }

		if ($password_1 != $password_2) {
			array_push($errors, '<div class="alert alert-warning">The two passwords do not Match</div>');
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO users (username, password) 
					  VALUES('$username', '$password')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = '<div class="alert alert-danger">You are now logged in</div>';
			header('location: home.php');
		}

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, '<div class="alert alert-warning">Username is required</div>');
		}
		if (empty($password)) {
			array_push($errors,  '<div class="alert alert-warning">Password is required</div>');
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = '<div class="alert alert-success">You are now logged in</div>';
				header('location: home.php');
			}else {
				array_push($errors, '<div class="alert alert-danger">Wrong Information Provided. Try again!</div>');
			}
		}
	}
	
?>
