<?php
require("db_connect.php");
?>

<?php

session_start();

if (isset($_COOKIE["username"])) { // checks if there are cookies available
    header("Location: dashboard.php"); // if true, login
    exit();
}

if ($_SERVER["REQUEST_METHOD"] === "POST") { // most reliable way when checking for a submitted form or request method
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_FULL_SPECIAL_CHARS); // santizing inputs
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_FULL_SPECIAL_CHARS); // to avoid SQL injection, we can use | to add more arguments
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT); // encrypt our password.

    if (!empty($username) || !empty($password)) { // checks if inputs are clear/empty.
        if ($username != "admin" || !password_verify($password, $hashedPassword)) { // checks if credentials are correct.
            echo "Invalid Credentials";
        } else {
            setcookie("username", $username, time() + 3600, "/", "", true, true); // only store session id or tokens in cookies NEVER passwords.
            $_SESSION["hashedPassword"] = $hashedPassword; // store the password to session for global use.
            $_SESSION["username"] = $username;
            header("Location: dashboard.php");
            exit(); //The die() or exit() function after header is mandatory. If die() or exit() is not put after the header('Location: ....') then script may continue resulting in unexpected behavior.
        }
    } else echo "Please Insert your Credentials";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <header>
    </header>

    <main>
        <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post"> <!--$_SERVER["PHP_SELF"] is used to get the current file name-->
            <label for="username">Username:</label><br>
            <input type="text" name="username" id="username"> <br>

            <label for="password">Password:</label> <br>
            <input type="password" name="password" id="password"> <br>

            <input type="submit" value="Submit" name="submit"> <br>
        </form>
    </main>

    <footer>
    </footer>

</body>
<script src="script.js"></script>

</html>