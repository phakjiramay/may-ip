<meta charset="utf-8">
<?php
	@session_start();
	$id2 = $_GET['id'] ;
	unset($_SESSION['fid'][$id2]) ;
	unset($_SESSION['fname'][$id2]) ;
	unset($_SESSION['fprice'][$id2]) ;
	unset($_SESSION['fdetail'][$id2]) ;
	unset($_SESSION['fpicture'][$id2]) ;
	unset($_SESSION['fitem'][$id2]) ;
	echo "<meta http-equiv=\"refresh\" content=\"0;URL=cart.php\">";

?>