<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>รายการใบสั่งซื้อ</title>
</head>

<body>
    <h1>รายการใบสั่งซื้อ</h1>
    <table width="832" border="1" cellspacing="1" cellpadding="1">
        <tr>
            <td width="153">&nbsp;</td>
            <td width="153">เลขที่ใบสั่งซื้อ</td>
            <td width="193">วันที่</td>
            <td width="150">ราคารวม</td>
            <td width="155">ลูกค้า</td>
        </tr>

        <?php
	include("connectdb.php");
	$sql = "select  *  from  `orders`  order by oid  desc ";
	$rs = mysqli_query($conn, $sql) ;
	while ($data = mysqli_fetch_array($rs, MYSQLI_BOTH)) {
?>

        <tr>
            <td><a href="checkout.php?a=<?=$data['c_id'];?>">ดูรายละเอียด</a></td>
            <td><?=$data['o_id'];?></td>
            <td><?=$data['o_date'];?></td>
            <td><?=number_format($data['o_total'],0);?></td>
            <td>---</td>
        </tr>

        <?php  }  ?>

    </table>
</body>

</html>