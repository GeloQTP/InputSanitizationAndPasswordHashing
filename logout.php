<?php
session_start();
session_destroy();
setcookie("username", "", time() - 3601, "/");
header("Location: index.php");
exit();
