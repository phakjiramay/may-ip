<!DOCTYPE HTML>
<html>

<head>
    <title>Footwear</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rokkitt:100,300,400,700" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Ion Icon Fonts-->
    <link rel="stylesheet" href="css/ionicons.min.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!-- Flexslider  -->
    <link rel="stylesheet" href="css/flexslider.css">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- Date Picker -->
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <!-- Flaticons  -->
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <form class="form-horizontal" method="post">
        <fieldset>

            <!-- Form Name -->
            <center>
                <legend>เข้าสู่ระบบ</legend>
            </center>

            <!-- Text input-->
            <center>
                <div class="form-group">
                    <div class="col-md-4">
                        <input id="Username" name="uuser" type="text" placeholder="User" class="form-control input-md"
                            required="">
            </center>
            </div>
            </div>

            <!-- Text input-->
            <center>
                <div class="form-group">
                    <div class="col-md-4">
                        <input id="Password" name="upwd" type="text" placeholder="Password"
                            class="form-control input-md" required="">
            </center>
            </div>
            </div>

            <!-- Button (Double) -->
            <center>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="Submit"></label>
                    <div class="col-md-8">
                        <button name="Submit" class="btn btn-success">Login</button>
            </center>
            </div>
            </div>

        </fieldset>
    </form>
    <?php  
     if(isset($_POST['Submit'])){
	include("connectdb.php");
	$sql = "select * from user where uuser='".$_POST['uuser']."' and upwd='".md5($_POST['upwd'])."' limit 1";
	$rs = mysqli_query($conn, $sql);
	$num = mysqli_num_rows($rs);
	
	if ($num == 1){
		$data = mysqli_fetch_array($rs);
		$_SESSION['ses_uid'] = $data['uid'];
		$_SESSION['ses_uname'] = $data['uname'];
		echo "<script>";
		echo "window.location='index2.php';";
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