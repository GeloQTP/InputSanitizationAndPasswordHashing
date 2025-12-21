<?php
require("db_connect.php");
?>

<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"] ?? '';
    $password = $_POST["password"] ?? '';

    if (empty($username) || empty($password)) { // checks if out input fields are empty.
        echo "Please Input your Credentials!";
    } else {
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT); // hash/encrypts the user password.

        // $statement = "INSERT INTO users (username, passcode) VALUES (?,?)"; (A)

        $statement = $conn->prepare("INSERT INTO users (username, passcode) VALUES (?,?)");
        // sqli object function 'prepare' = It separates the SQL query structure from the data, ensuring that user input cannot alter the query logic.
        //

        $statement->bind_param("ss", $username, $hashedPassword); // A method won't work because this method is object oriented and much safer
        $statement->execute();
        $statement->close();
        header("Location: login.php");
        exit();
    }
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
    <h1>Register</h1>
    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <label for="username">Username</label> <br>
        <input type="text" name="username" id="username"><br>

        <label for="password">Password: </label> <br>
        <input type="password" name="password" id="password"> <br>
        <a href="login.php">Already have an account? Log in here</a> <br>
        <input type="submit" value="Register" name="register">
    </form>
</body>

</html>