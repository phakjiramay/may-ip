<!doctype html>
<?php
@session_start();
unset($_SESSION['ses_uid']);
unset($_SESSION['ses_uname']);

echo "<script>";
echo "window.location='view_order_detail.php';";
echo "</script>";
?>