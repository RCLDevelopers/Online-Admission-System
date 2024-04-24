<?php

// Establishing connection to the MySQL server
$conn = mysqli_connect("localhost", "root", "")
    or die("Could not connect to the server: " . mysqli_connect_error());

// Creating the database
mysqli_query($conn, "CREATE DATABASE IF NOT EXISTS mdb")
    or die("Could not create the database: " . mysqli_error($conn));

// Selecting the database
mysqli_select_db($conn, "mdb")
    or die("Could not select the database: " . mysqli_error($conn));

?>
