
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ปิยะมาศ  บุญละคร </title>
</head>
<body bgcolor="#CCCCCC">
 <form method="post" action="d.php">
<p><center> <img src="str.png"width="250" height="250" align="middle">
<center>
<br><big><big>แบบฟอร์มสมัครสอบเข้า ม.4 </big></big></p></center>
	<table align="center" border="0" width="900" cellpadding="1">
<tr>
<td background=""><center td colspan="2"><h3>โรงเรียนสตรีศึกษา ร้อยเอ็ด </h3></td>
    </center>
      <table align="center" background="" width="450" border="0" cellspacing="1"><br>
   <tr>
   <td>สายการเรียน</td>
    <td><input name="inStanding" type="radio" value="วิทย์-คณิต" checked/> วิทย์-คณิต<br>
    <input name="inStanding" type="radio" value="อังกฤษ-คณิต" checked/> อังกฤษ-คณิต<br>
    <input name="inStanding" type="radio" value="อังกฤษ-สังคม" checked/> อังกฤษ-คณิต<br>
    <input name="inStanding" type="radio" value="อังกฤษ-ฝรั่งเศษ" checked/> อังกฤษ-ฝรั่งเศษ<br>
    </td>
  <tr>
    <td>เลขประจำตัวประชาชน</td>
    <td><input name="code" type="text" id="code"/></td>
  </tr>
  <tr>
    <td>คำนำหน้า</td>
    <td><select name="Prefix" id="Prefix">
      <option value="นาย">นาย</option>
      <option value="นางสาว">นางสาว</option>
      <option value="นาง">นาง</option>
    </select></td>
  </tr>
  <tr>
 <td width="102">ชื่อ-สกุล</td>
<td width="376"><input name="fullname" type="text" id="fullname"/></td>
  <tr>
  <td>วันเเดือนปีเกิด</td>
<td><input type="date" name="birthday"> </td>
  <tr>
    <td>ที่อยู่</td>
    <td><textarea name="inAddress" cols="50" rows"30" id="inAddress"></textarea></td>
  </tr>
  <tr>
    <td>เบอร์โทรศัพท์</td>
    <td><input name="inPhone" type="text" id="inPhone"/></td>
  </tr>
  <tr>
   <td>สัญชาติ</td>
  <td><input name="inArgentine" type="radio" value="ไทย" checked/> ไทย
    <input name="inArgentine" type="radio" value="ต่างชาติ" checked/> ต่างชาติ
  <tr>
    <td>ระดับการศึกษา</td>
    <td><select name="Edu" id="Edu">
      
      <option value="ม.3">ม.3</option>
     
    </select></td>
  </tr>
  <tr>
    <td>E-mail</td>
    <td><input name="email" type="text" id="email"/></td>
  </tr> 
	<tr>
    <td>ประวัติการศึกษา</td>
    <td><textarea name="inWorkhistory" cols="50" rows"20" id="inWorkhistory"></textarea></td>
  </tr>
  <tr>
    <td>ความสามารถพิเศษ</td>
    <td><input name="charisma" type="text" id="charisma"/></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>
	<button name="submit" type="submit" class="btn btn-outline-primary">สมัครงาน</button>
    <button name="submit" type="reset" class="btn btn-outline-danger">ยกเลิก</button>
    <button name="submit"type="button" class="btn btn-success" onClick="window.print()">พิมพ์ใบสมัคร</button>
  </td>
  </tr>
      </table>
    </center>
  </form>
   <br><br><br><hr>
  <?php
  if (isset ($_POST['submit'])){
	  	
	echo "สายการเรียน:".$_POST['inStanding']."<br>" ; 
	echo "เลขประจำประชาชน:".$_POST['code']."<br>" ; 
	echo "คำนำหน้า:".$_POST['Prefix']."<br>" ; 
	echo "ชื่อ-สกุล:".$_POST['fullname']."<br>" ;
	echo "วัน/เดือน/ปีเกิด:".$_POST['birthday']."<br>" ;  
	echo "ที่อยู่:".$_POST['inAddress']."<br>" ; 
	echo "เบอร์โทร่:".$_POST['inPhone']."<br>" ;
	echo "สัญชาติ:".$_POST['inArgentine']."<br>" ;
	echo "ระดับการศึกษา:".$_POST['Edu']."<br>" ;
	echo "E-mail:".$_POST['email']."<br>" ;
	echo "ประวัติการศึกษา:".$_POST['inWorkhistory']."<br>" ;
	echo "ความสมารถพิเศษ:".$_POST['charisma']."<br>" ;
	  
	  }

  ?>
</body>
</html>