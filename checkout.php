<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>รายละเอียดใบสั่งซื้อ <?=$_GET['b'];?></title>
</head>

<body>
    <h1>รายละเอียดใบสั่งซื้อ เลขที่ <?=$_GET['a'];?></h1>
    <table width="863" border="1" cellspacing="1" cellpadding="1">
        <tr>
            <td width="54">ที่</td>
            <td width="318">สินค้า</td>
            <td width="141">จำนวน</td>
            <td width="149">ราคา/ชิ้น</td>
            <td width="173">รวม</td>
        </tr>

        <?php
	include("connectdb.php");
	$sql = "SELECT  *  FROM  orders_detail
          INNER JOIN pdfemale ON orders_detail.pid = pdfemale.fm_id
          WHERE orders_detail.oid = '{$_GET['a']}'  ";
	$rs = mysqli_query($conn, $sql) ;
	$i = 0;
	while ($data = mysqli_fetch_array($rs, MYSQLI_BOTH)) {
		$i++;
		$sum = $data['fm_price'] * $data['item'] ;
		$total += $sum;
?>
        <tr>
            <td><?=$i;?></td>
            <td><img src="img/<?=$data['fm_picture'];?>" width="80"> <br>
                <?=$data['od_product'];?> : <?=$data['fm_name'];?></td>
            <td><?=$data['item'];?></td>
            <td><?=number_format($data['fm_price'],0);?></td>
            <td><?=number_format($sum,0);?></td>
        </tr>
        <?php } ?>

        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>รวมทั้งสิ้น</td>
            <td><?=number_format($total,0);?></td>
        </tr>
    </table>
</body>

</html>