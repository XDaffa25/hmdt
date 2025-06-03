<?php
session_start();
$_SESSION['welcome_done'] = true;
header("Location: ../index.php");
exit();
