<?php
require("db_connect.php");
?>

<?php

if (!isset($_SESSION["username"])) {
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
    <header>
        <?php require("header.php"); ?> <!--newer and stricter version of include("file_name");-->
    </header>



    <main>

    Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem reprehenderit, tempore ipsum ad amet ab, sed eum fugiat aperiam nesciunt totam earum inventore soluta, qui incidunt doloremque illum. Illum, doloribus!

    </main>



    <footer>
        <?php require("footer.html");  ?>
    </footer>

    <footer>
    </footer>
</body>

</html>