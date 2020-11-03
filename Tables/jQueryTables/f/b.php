<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ปิยะมาศ บุญละคร </title>
</head>

<body>
	<form method="post" action="">
    	รหัสนิสิต <input type="text" name="code"><br>
        <input type="submit" name="Submit" value=" OK">
     </form>
<br><br><br><hr>
<?php 

if (isset ($_POST ['Submit'])){
	//echo $_POST['code'];
	
	$c = $_POST ['code'] ;
	$y = substr ($c,0,2) ;
	echo "<img width='300'
	src='http://202.28.32.211/picture/student/".$y."/".$c.".jpg'> <br>";
	
	
	
}


?>




</body>
</html>