<?php
session_start();
session_destroy();
setcookie("username", "", time() - 3601, "/");
header("Location: ../pages/login.php");
exit();
