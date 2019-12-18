<?php

/* Attempt MySQL server connection. Assuming you are running MySQL server with default setting (user 'root' with no password) */

$link = mysqli_connect("localhost", "root", "", "registration");

// Escape user inputs for security

$dob = mysqli_real_escape_string($link, $_REQUEST['dob']);

$name = mysqli_real_escape_string($link, $_REQUEST['name']);

$email = mysqli_real_escape_string($link, $_REQUEST['email']);

$address = mysqli_real_escape_string($link, $_REQUEST['address']);

$phone = mysqli_real_escape_string($link, $_REQUEST['phone']);

$sex = mysqli_real_escape_string($link, $_REQUEST['sex']);

$bloodgroup = mysqli_real_escape_string($link, $_REQUEST['bloodgroup']);

// attempt insert query execution

$sql = "INSERT INTO patients (dob,name, email, address, phone, sex, bloodgroup) VALUES ('$dob','$name', '$email','$address','$phone','$sex','$bloodgroup')";

if(mysqli_query($link, $sql)){

    #Go to the exact page
    header('Location: patient.php');

} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

 

// close connection

mysqli_close($link);

?>

