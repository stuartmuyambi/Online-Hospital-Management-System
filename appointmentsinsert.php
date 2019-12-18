<?php

/* Attempt MySQL server connection. Assuming you are running MySQL server with default setting (user 'root' with no password) */

$link = mysqli_connect("localhost", "root", "", "registration");

// Escape user inputs for security

$appointment = mysqli_real_escape_string($link, $_REQUEST['appointment']);

$patient = mysqli_real_escape_string($link, $_REQUEST['patient']);

$doctor = mysqli_real_escape_string($link, $_REQUEST['doctor']);

// attempt insert query execution

$sql = "INSERT INTO appointments (date, patient, doctor) VALUES ('$appointment', '$patient','$doctor')";

if(mysqli_query($link, $sql)){

    #Go to the exact page
    header('Location: appointments.php');

} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

 

// close connection

mysqli_close($link);

?>

