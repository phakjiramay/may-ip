 <?php
// $host = "localhost";
// $usr = "root";
// $pwd = "";
// $dbName = "shoesshop";

// $conn = mysqli_connect($host, $usr, $pwd) or die ("เชื่อมต่อฐานข้อมูลไม่ได้") ;
// mysqli_select_db($conn, $dbName) ;
// mysqli_query($conn, "set names utf8");


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shoesshop";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: "  . mysqli_connect_error());
}
mysqli_set_charset($conn,"utf8");