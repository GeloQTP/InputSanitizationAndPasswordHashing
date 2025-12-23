<?php
require("db_connect.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dashBoard.css">
</head>

<body>

    <div>

    </div>

    <header>
        <?php require("adminHeader.php"); ?> <!--newer and stricter version of include("file_name");-->
    </header>

    <main>

        <h1>Welcome to the Admin Dashboard</h1>

    </main>

    <footer>
        <?php require("footer.html"); ?>
    </footer>
</body>

</html>