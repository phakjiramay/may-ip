
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ปิยะมาศ  บุญละคร </title>
</head>
<body bgcolor="#CCCCCC">
<center> <img src="str.png"width="250" height="250" align="middle">
<center>
<br><br><br>
<?php
  if (isset ($_POST['submit'])){
	  	
	echo "สายการเรียน:".$_POST['inStanding']."<br>"."<br>" ; 
	echo "เลขประจำประชาชน:".$_POST['code']."<br>"."<br>" ; 
	echo "คำนำหน้า:".$_POST['Prefix']."<br>"."<br>" ; 
	echo "ชื่อ-สกุล:".$_POST['fullname']."<br>"."<br>" ;
	echo "วัน/เดือน/ปีเกิด:".$_POST['birthday']."<br>"."<br>" ;  
	echo "ที่อยู่:".$_POST['inAddress']."<br>"."<br>" ; 
	echo "เบอร์โทร่:".$_POST['inPhone']."<br>"."<br>" ;
	echo "สัญชาติ:".$_POST['inArgentine']."<br>"."<br>" ;
	echo "ระดับการศึกษา:".$_POST['Edu']."<br>"."<br>" ;
	echo "E-mail:".$_POST['email']."<br>"."<br>" ;
	echo "ประวัติการศึกษา:".$_POST['inWorkhistory']."<br>"."<br>" ;
	echo "ความสมารถพิเศษ:".$_POST['charisma']."<br>"."<br>" ;
	  
	  }

  ?>
    </center>
    </center>
  </form>
 
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
</body>
</html>