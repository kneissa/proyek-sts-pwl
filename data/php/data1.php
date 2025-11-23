<?php
session_start();
$_SESSION['pendaftaran'] = $_POST;
header("Location: ../../register.php");
exit;
?>
