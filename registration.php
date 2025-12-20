<?php
require("db_connect.php");
?>

<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="registration.php" method="post">
        <label for="username">Username</label> <br>
        <input type="text" name="username" id="username"><br>

        <label for="password">Password: </label> <br>
        <input type="password" name="password" id="password"> <br>

        <input type="submit" value="Register" name="register">
    </form>
</body>

</html>