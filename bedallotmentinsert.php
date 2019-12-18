<?php

/* Attempt MySQL server connection. Assuming you are running MySQL server with default setting (user 'root' with no password) */

$link = mysqli_connect("localhost", "root", "", "registration");

// Escape user inputs for security

$bednumber = mysqli_real_escape_string($link, $_REQUEST['bednumber']);

$wardnumber = mysqli_real_escape_string($link, $_REQUEST['wardnumber']);

$patient = mysqli_real_escape_string($link, $_REQUEST['patient']);

$sex = mysqli_real_escape_string($link, $_REQUEST['sex']);

$date = mysqli_real_escape_string($link, $_REQUEST['date']);

// attempt insert query execution

$sql = "INSERT INTO bedallotment (bednumber,wardnumber, patient, sex, date) VALUES ('$bednumber','$wardnumber', '$patient','$sex','$date')";

if(mysqli_query($link, $sql)){

    #Go to the exact page
    header('Location: bedallotment.php');

} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

 

// close connection

mysqli_close($link);

?>

