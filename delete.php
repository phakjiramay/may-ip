<meta charset="utf-8">
<?php

	if (isset($_GET['fm_id'])){
		include("connectdb.php");
		$sql = "DELETE FROM pdfemale WHERE fm_id='".$_GET['fm_id']."'";
		mysqli_query($conn,$sql) or die ("ลบข้อมูลไม่ได้");
		 
		 unlink("img/".$_GET['fm_id'].".png");
		 
		 echo "<script>";
		 echo "window.location='shop.php';" ; //กลับไปที่หน้าเริ่มต้น
		 echo "</script>";
		
		}



?>