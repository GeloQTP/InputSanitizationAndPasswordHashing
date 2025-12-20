<?php

$db_host = "localhost"; // variables we need that contains data from our database
$db_user = "root";
$db_pass = "";
$db_name = "dashboarddb";

try {
    $conn = mysqli_connect( // variable $conn to handle mysqli_connect() connection; it is now a variable.
        $db_host,
        $db_user,
        $db_pass,
        $db_name
    ); // mysqli_connect() function, requires 4 arguments
} catch (mysqli_sql_exception) { // catch if there is an error with our mysqli_connect()
    echo "Connection Error";
}

if ($conn) { // checks if connection is successful.
    echo "You are Connected!";
}
