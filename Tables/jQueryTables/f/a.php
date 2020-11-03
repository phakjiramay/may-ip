<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ปิยะมาศ บุญละคร</title>
</head>

<body>

 <form method="post" action=""> 
 	ชื่อ - สกุล <input type="text" name="fullname" autofocus required><br>
    เบอร์โทร <input type="text" name="phone" required > <br>
    อายุ <input type="number" name="age" min="18" max="60" required> ปี<br>
    วันเดือนปีเกิด <input type="date" name="birthday"> <br>
    <input type="submit" name="Submit" value="บันทึกข้อมูล">
 </form>

<br><br><br><hr>
<?php
if (isset ($_POST['Submit'])){
	
	echo "ชื่อ - สกุล:".$_POST['fullname']."<br>" ; 
	echo "เบอร์โทร:".$_POST['phone']."<br>"  ;
	echo "อายุ:".$_POST['age']."ปี<br>"  ;
	echo "วัน/เดือน/ปีเกิด :".$_POST['birthday']."<br>"  ;

}
?>





</body>
</html>