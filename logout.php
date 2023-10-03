<?php
// start session //
session_start();
// kill the session //
unset($_SESSION['ADMIN']);

// retorn to the login page//
header("location:login.php");



?>