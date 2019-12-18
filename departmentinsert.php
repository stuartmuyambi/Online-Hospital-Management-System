<?php

/* Attempt MySQL server connection. Assuming you are running MySQL server with default setting (user 'root' with no password) */

$link = mysqli_connect("localhost", "root", "", "registration");

// Escape user inputs for security

$department = mysqli_real_escape_string($link, $_REQUEST['department']);

$description = mysqli_real_escape_string($link, $_REQUEST['description']);

// attempt insert query execution

$sql = "INSERT INTO departments (Department, Description) VALUES ('$department', '$description')";

if(mysqli_query($link, $sql)){

    #Go to the exact page
    header('Location: department.php');

} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

 

// close connection

mysqli_close($link);

?>

