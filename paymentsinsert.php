<?php

/* Attempt MySQL server connection. Assuming you are running MySQL server with default setting (user 'root' with no password) */

$link = mysqli_connect("localhost", "root", "", "registration");

// Escape user inputs for security

$name = mysqli_real_escape_string($link, $_REQUEST['name']);

$date = mysqli_real_escape_string($link, $_REQUEST['date']);

$status = mysqli_real_escape_string($link, $_REQUEST['status']);

// attempt insert query execution

$sql = "INSERT INTO payments (name,date, status) VALUES ('$name','$date', '$status')";

if(mysqli_query($link, $sql)){

    #Go to the exact page
    header('Location: payments.php');

} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

 

// close connection

mysqli_close($link);

?>

