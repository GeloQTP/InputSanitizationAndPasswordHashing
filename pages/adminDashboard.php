<?php
require("../includes/db_connect.php");
?>

<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$statement = $conn->prepare("SELECT * FROM users");
$statement->execute();

$result = $statement->get_result();
$rows = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/dashboard.css">
</head>

<body>

    <div>

    </div>

    <header>
        <?php require("../includes/adminHeader.php"); ?> <!--newer and stricter version of include("file_name");-->
    </header>

    <main>

        <h1>Welcome to the Admin Dashboard</h1>
        <br>
        <table border="1" cellspacing="5" cellpadding="5" width="50%" height="200" align="center" bgcolor="#f2f2f2">
            <tr>
                <th>Username</th>
                <th>Registration Date</th>
                <th>User Type</th>
            </tr>

        </table>

    </main>

    <footer>
        <?php require("../includes/footer.html"); ?>
    </footer>
</body>

</html>