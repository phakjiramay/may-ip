<?php
	@session_start();

	session_destroy();

	echo "กำลังกลับหน้าหลัก กรุณารอสักครู่....";
	echo "<meta http-equiv=\"refresh\" content=\"2;URL=loginB.php\">";
	//header("Location: index.php");

?>
<meta charset="utf-8">