<?php
session_start(); // needed at the top everytime we are we are going to access session variables

if (empty($_SESSION["username"])) {
    header("Location: index.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<style>
    * {
        /*css reset*/
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        margin: 0rem 0rem;
    }

    nav {
        padding: 0.5rem;
        background-color: aqua;
    }

    .notification::after {
        content: '0';
        display: inline-block;
    }
</style>

<body>

    <header>
        <nav style="display: flex; align-items: center; justify-content: space-between;">

            <span style="font-family:Poppins">Welcome, <?= $_SESSION["username"] ?>!</span>

            <ul style="display: flex; list-style-type: none; gap: 20px; align-items: center;">
                <li class="notification"><i class="fa fa-bell" style="font-size:14px"></i></li>
                <li class="messages"><i class="fa fa-envelope" style="font-size:16px"></i></li>
                <li class="settings"><i class="fa fa-gear" style="font-size:16px"></i></li>
                <li class="profile-picture"><i class="fa fa-circle"></i></li>
                <button style="border: none; font-size:0.5rem; padding: 0.2rem; border-radius: 2px" onclick="window.location.href='logout.php'">Log out</button>
            </ul>

        </nav>
    </header>

</body>

</html>