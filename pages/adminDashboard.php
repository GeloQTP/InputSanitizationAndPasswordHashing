<?php
require("../includes/db_connect.php");
?>

<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$statement = $conn->prepare("SELECT * FROM users");
$statement->execute();

$result = $statement->get_result();
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

        <div id="left-side">
            <h1>Welcome to the Admin Dashboard</h1>
            <br>
            <table border="1" cellspacing="1" width="50%" height="150" bgcolor="#f2f2f2">
                <tr>
                    <th>Username</th>
                    <th>Registration Date</th>
                    <th>User Type</th>
                </tr>

                <?php
                while ($rows = $result->fetch_assoc()) { // while the $rows still getting rows from $result->fetch_assoc(), loop
                ?>

                    <tr>
                        <td><?= htmlspecialchars($rows["username"]) ?></td>
                        <td><?= htmlspecialchars($rows["reg_date"]) ?></td>
                        <td><?= htmlspecialchars($rows["role"]) ?></td>
                    </tr>

                <?php
                }
                ?>

            </table>
        </div>

        <div id="right-side">

        </div>

    </main>

    <footer>
        <?php require("../includes/footer.html"); ?>
    </footer>
</body>

</html>