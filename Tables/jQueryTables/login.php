<?php
	@session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>เข้าสู่ระบบ</title>
	
<link href="bootstrap.css" rel="stylesheet">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</head>

<body >
<style type="text/css">.item #header-wrapper {background:(https://images.pexels.com/photos/4173624/pexels-photo-4173624.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500);width:100%} </style>


<form class="form-horizontal" method="post">
<fieldset><br>

<!-- Form Name -->
<center>
<legend>Login</legend></center> <br>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="auser">Username</label>  
  <div class="col-md-4">
  <input id="auser" name="auser" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="apwd">Password</label>  
  <div class="col-md-4">
  <input id="apwd" name="apwd" type="password" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Submit"></label>
  <div class="col-md-4">
    <button id="Submit" name="Submit" class="btn btn-primary">Login</button>
    
  </div>
</div>

</fieldset>
</form>
	
<?php
if(isset($_POST['Submit'])){
	include("connectdb.php");
	$sql = "select * from admin where auser='".$_POST['auser']."' and apwd='".md5($_POST['apwd'])."' limit 1";
	$rs = mysqli_query($conn, $sql);
	$num = mysqli_num_rows($rs);
	
	if ($num == 1){
		$data = mysqli_fetch_array($rs);
		$_SESSION['ses_aid'] = $data['aid'];
		$_SESSION['ses_aname'] = $data['aname'];
		echo "<script>";
		echo "window.location='shop.php';";
		echo "</script>";
	} else {
		echo "<script>";
		echo "alert('Username หรือ Password ไม่ถูกต้อง');";
		echo "</script>";
		exit;
	}
}
?>
	
</body>
</html>





