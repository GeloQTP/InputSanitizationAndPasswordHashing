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
    <link rel="stylesheet" href="dashBoard.css">
</head>

<body>

    <div>

    </div>

    <header>
        <?php require("header.php"); ?> <!--newer and stricter version of include("file_name");-->
    </header>

    <main>

        <p><b>Lorem</b> ipsum dolor sit amet <abbr title="this one got abbr tag">consectetur</abbr> adipisicing elit. Rem <em>reprehenderit</em>,
            tempore <kbd>ipsum</kbd> ad amet ob<sup>sup element</sup>, sed <sub>sub element</sub> eum fugiat aperiam nesciunt totam <mark>earum</mark> <strong>inventore</strong> soluta, qui incidunt <del>doloremque</del> illum. Illum, doloribus!
        </p>

        <br>

        <blockquote>
            <p>The more that you read, the more things you will know.
                The more that you learn, the more places you'll go.</p>
            <footer>- Dr. Seuss</footer>
        </blockquote>

        <br>

        <p>I recently read <cite>The Great Gatsby</cite> by F. Scott Fitzgerald.</p>

        <br>

        <q cite="https://www.brainyquote.com/quotes/steve_jobs_416096">Innovation distinguishes between a leader and a follower.</q>
        <br><br>

        <dl>
            <dt>Term 1</dt>
            <dd>Definition 1</dd>
            <dt>Term 2</dt>
            <dd>Definition 2</dd>
            <dt>Term 3</dt>
            <dd>Definition 3</dd>
        </dl>
        <br> <br>

        <ul>
            <li>List 1</li>
            <li>List 2
                <ol>
                    <li>List 2 Sub List 1</li>
                    <li>List 2 Sub List 2</li>
                    <li>List 2 Sub List 3</li>
                </ol>
            </li>
            <li>List 3</li>
            <li>List 4</li>
            <li>List 5</li>
        </ul>

    </main>

    <footer>
        <?php require("footer.html"); ?>
    </footer>
</body>

</html>