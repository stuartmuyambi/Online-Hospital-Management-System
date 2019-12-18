<?php

/* Attempt MySQL server connection. Assuming you are running MySQL server with default setting (user 'root' with no password) */

$link = mysqli_connect("localhost", "root", "", "registration");

// Escape user inputs for security

$name = mysqli_real_escape_string($link, $_REQUEST['name']);

$age = mysqli_real_escape_string($link, $_REQUEST['age']);

$sex = mysqli_real_escape_string($link, $_REQUEST['sex']);

$bloodgroup = mysqli_real_escape_string($link, $_REQUEST['bloodgroup']);

// attempt insert query execution

$sql = "INSERT INTO donars (name, age, sex, bloodgroup) VALUES ('$name', '$age','$sex,'$bloodgroup')";

if(mysqli_query($link, $sql)){

    #Go to the exact page
    header('Location: donations.php');

} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

 

// close connection

mysqli_close($link);

?>

