<meta charset="utf-8">
<?php
	@session_start();
	include("connectdb.php");
	
		foreach($_SESSION['fid'] as $o_member) {
			$sum[$o_member] = $_SESSION['fprice'][$o_member] * $_SESSION['fitem'][$o_member] ;
			$total += $sum[$o_member] ;
		}
	
	$sql = "insert into `orders` values('', '$total', CURRENT_TIMESTAMP, '0');" ;
	mysqli_query($conn, $sql) or die ("insert error") ;
	$id = mysqli_insert_id($conn);
	
	foreach($_SESSION['fid'] as $o_member) {
		$sql2 = "insert into orders_detail values('', '$id', '".$_SESSION['fid'][$o_member]."', '".$_SESSION['fitem'][$o_member]."');" ;
		mysqli_query($conn, $sql2);
	}
	
echo "<meta http-equiv=\"refresh\" content=\"0;URL=cart.php\">";
?>