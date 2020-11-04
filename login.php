<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js">
    </script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js">
    </script>
</head>

<body>
    <!-- Main navigation -->
    <div class="container-fluid mt-3 mb-5"
        style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/90.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">

        <!-- Full Page Intro -->
        <section>
            <!-- Mask & flexbox options-->
            <div class="mask d-flex justify-content-center align-items-center">
                <!-- Content -->
                <div class="container py-5 my-5">

                    <h3 class="font-weight-bold text-center white-text pb-2">Login</h3>
                    <p class="lead text-center white-text pt-2 mb-5">ระบบหลังร้าน Shoesshop</p>

                    <!--Grid row-->
                    <div class="row d-flex align-items-center justify-content-center">
                        <!--Grid column-->
                        <div class="col-md-6 col-xl-5">
                            <!--Form-->
                            <form class="form-horizontal" method="post">
                                <div class="card">
                                    <div class="card-body z-depth-2 px-4">
                                        <div class="md-form mt-3">
                                            <i class="fa fa-user prefix grey-text"></i>
                                            <input type="text" name="auser" required id="form3" class="form-control">
                                            <label for="form3">Username</label>
                                        </div>
                                        <div class="md-form">
                                            <i class="fas fa-key prefix grey-text"></i>
                                            <input type="password" id="form2" name="apwd" class="form-control">
                                            <label for="form2">Password</label>
                                        </div>
                                        <div class="text-center my-3">
                                            <button name="Submit" class="btn btn-indigo btn-block">Login</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!--/.Form-->
                        </div>
                        <!--Grid column-->
                    </div>
                    <!--Grid row-->
                </div>
                <!-- Content -->
            </div>
            <!-- Mask & flexbox options-->
        </section>
        <!-- Full Page Intro -->

    </div>
    <!-- Main navigation -->
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
		echo "window.location='./admin/admin.php';";
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