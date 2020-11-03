<!doctype html>
<?php
@session_start();
unset($_SESSION['ses_aid']);
unset($_SESSION['ses_aname']);

echo "<script>";
echo "window.location='login.php';";
echo "</script>";
?>


