<?php
session_start();

session_destroy();
header("Location: ../Login/login.php");
exit();
?>
