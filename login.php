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

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $passcode = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if (!empty($username) && !empty($passcode)) {

        $statement = $conn->prepare("SELECT * FROM users WHERE username = ?");
        if (!$statement) {
            die("Database error: " . $conn->error);
        }

        $statement->bind_param("s", $username);
        $statement->execute();

        $result = $statement->get_result(); // you can get the result of your sql queries.
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $hashedPasscode = $row["passcode"];

            if (password_verify($passcode, $hashedPasscode)) {
                echo "There are total of:" . $result->num_rows . " user/s";
                setcookie("username", $row["username"], time() + 3600, "/", "", true, true);
                $_SESSION["username"] = $row["username"];
                header("Location: dashboard.php");
            } else {
                echo "Invalid Credentials";
            }
        } else {
            echo "User not found";
        }

        $statement->close();
    } else {
        echo "Please fill in all fields.";
    }
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
        <h1>Login</h1>
        <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post"> <!--$_SERVER["PHP_SELF"] is used to get the current file name-->
            <label for="username">Username:</label><br>
            <input type="text" name="username" id="username" required> <br>

            <label for="password">Password:</label> <br>
            <input type="password" name="password" id="password" required> <br>
            <a href="registration.php">Don't have an account? Register here.</a> <br>
            <input type="submit" value="Submit" name="submit"> <br>
        </form>
    </main>

    <footer>
    </footer>

</body>
<script src="script.js"></script>

</html><?php
        $passcode = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
