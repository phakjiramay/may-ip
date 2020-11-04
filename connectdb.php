 <?php
$host = "localhost";
$usr = "root";
$pwd = "";
$dbName = "shopp";

$conn = mysqli_connect($host, $usr, $pwd,$dbName) or die ("เชื่อมต่อฐานข้อมูลไม่ได้") ; 
mysqli_query($conn, "set names utf8");
?>