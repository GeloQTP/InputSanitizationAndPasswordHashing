<?php

$db_host = "localhost"; // variables we need that contains data from our database
$db_user = "root";
$db_pass = "";
$db_name = "dashboarddb";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name); // mysqli_connect() function, requires 4 arguments

if ($conn) { // checks if connection is successful.
    echo "You are Connected!";
} else {
    echo "Connection Error";
}
