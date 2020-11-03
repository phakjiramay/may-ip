<meta charset="utf-8">
<?php

	if (isset($_GET['p_id'])){
		include("connectdb.php");
		$sql = "DELETE FROM pdfemale WHERE p_id='".$_GET['p_id']."'";
		mysqli_query($conn,$sql) or die ("ลบข้อมูลไม่ได้");
		 
		 unlink("img/".$_GET['p_id'].".png");
		 
		 echo "<script>";
		 echo "window.location='shop.php';" ; //กลับไปที่หน้าเริ่มต้น
		 echo "</script>";
		
		}



?>