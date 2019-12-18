<?php

/* Attempt MySQL server connection. Assuming you are running MySQL server with default setting (user 'root' with no password) */

$link = mysqli_connect("localhost", "root", "", "registration");

// Escape user inputs for security

$name = mysqli_real_escape_string($link, $_REQUEST['name']);

$email = mysqli_real_escape_string($link, $_REQUEST['email']);

$address = mysqli_real_escape_string($link, $_REQUEST['address']);

$phone = mysqli_real_escape_string($link, $_REQUEST['phone']);

$department = mysqli_real_escape_string($link, $_REQUEST['department']);

// attempt insert query execution

$sql = "INSERT INTO doctors (name, email, address, phone, department) VALUES ('$name', '$email','$address','$phone','$department')";

if(mysqli_query($link, $sql)){

    #Go to the exact page
    header('Location: doctordash.php');

} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

 

// close connection

mysqli_close($link);

?>

