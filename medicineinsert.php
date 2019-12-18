<?php

/* Attempt MySQL server connection. Assuming you are running MySQL server with default setting (user 'root' with no password) */

$link = mysqli_connect("localhost", "root", "", "registration");

// Escape user inputs for security

$name = mysqli_real_escape_string($link, $_REQUEST['name']);

$category = mysqli_real_escape_string($link, $_REQUEST['category']);

$description = mysqli_real_escape_string($link, $_REQUEST['description']);

$manufacturer = mysqli_real_escape_string($link, $_REQUEST['manufacturer']);

$price = mysqli_real_escape_string($link, $_REQUEST['price']);

$status = mysqli_real_escape_string($link, $_REQUEST['status']);

// attempt insert query execution

$sql = "INSERT INTO medicine (mname, mcategory, description, manufacturer, price, status) VALUES ('$name', '$category','$description','$manufacturer','$price','$status')";

if(mysqli_query($link, $sql)){

    #Go to the exact page
    header('Location: medicine.php');

} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

 

// close connection

mysqli_close($link);

?>

