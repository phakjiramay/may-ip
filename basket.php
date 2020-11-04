<?php
	@session_start();
	include("connectdb.php");
	@$sql = "select * from product where p_id='".$_GET['id']."' ";
	@$rs = mysqli_query($conn, $sql) ;
	@$data = mysqli_fetch_array($rs, MYSQLI_BOTH);
	@$id = $_GET['id'] ;
	
	if(isset($_GET['id'])) {
		@$_SESSION['sid'][$id] = $data['p_id'];
		@$_SESSION['sname'][$id] = $data['p_name'];
		@$_SESSION['sprice'][$id] = $data['p_price'];
		@$_SESSION['sdetail'][$id] = $data['p_detail'];
		@$_SESSION['spicture'][$id] = $data['p_picture'];
		@$_SESSION['sitem'][$id]++;
	}
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>ตะกร้าสินค้า</title>
    <link href="bootstrap.css" rel="stylesheet" type="text/css">
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

    <div class="colorlib-loader"></div>

    <div id="page">
        <nav class="colorlib-nav" role="navigation">
            <div class="top-menu">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7 col-md-9">
                            <div id="colorlib-logo"><a href="index.html">Footwear</a></div>
                        </div>
                        <div class="col-sm-5 col-md-3">
                            <form action="#" class="search-wrap" method="post">
                                <div class="form-group">
                                    <input type="search" class="form-control search" placeholder="Search">
                                    <button class="btn btn-primary submit-search text-center" type="submit"><i
                                            class="icon-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 text-left menu-1">
                            <ul>
                                <li class="active"><a href="index.php">Home</a></li>
                                <li><a href="women.php">Women</a></li>
                                <li><a href="men.php">MEN</a></li>
                                <li><a href="Cart.php">Cart</a></li>
                                <li><a href="login.php">admin</a></li>
                                <li class="cart"><a href="basket.php"><i class="icon-shopping-cart"></i> Cart [0]</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sale">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 offset-sm-2 text-center">
                            <div class="row">
                                <div class="owl-carousel2">
                                    <div class="item">
                                        <div class="col">
                                            <h3><a href="#">25% off (Almost) Everything! Use Code: Summer Sale</a></h3>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col">
                                            <h3><a href="#">Oure biggest sale yet 50% off all summer shoes</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <div class="breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <p class="bread"><span><a href="index.html">Home</a></span> / <span>Shopping Cart</span></p>
                    </div>
                </div>
            </div>
        </div>
        <blockquote>
            <h2>ตะกร้าสินค้า</h2>
            <a href="index.php" class="btn btn-primary">กลับไปเลือกสินค้า</a>
            <a href="clear.php" class="btn btn-warning">ลบสินค้าทั้งหมด</a>
            <a href="record.php" class="btn btn-success">สั่งซื้อสินค้า</a>


            <br><br>
            <table width="100%" class="table">
                <tr>
                    <th width="5%">ที่</th>
                    <th width="19%">รูปสินค้า</th>
                    <th width="24%">ชื่อสินค้า</th>
                    <th width="14%">ราคา/ชิ้น</th>
                    <th width="15%">จำนวน (ชิ้น)</th>
                    <th width="14%">รวม</th>
                    <th width="9%">&nbsp;</th>
                </tr>
                <?php
if(!empty($_SESSION['sid'])) {
	foreach($_SESSION['sid'] as $pid) {
	@$i++;
		@$sum[$pid] = $_SESSION['sprice'][$pid] * $_SESSION['sitem'][$pid] ;
		@$total += $sum[$pid] ;
?>
                <tr>
                    <td><?=$i;?></td>
                    <td><img src="images/<?=$_SESSION['spicture'][$pid];?>" width="120"></td>
                    <td><?=$_SESSION['sname'][$pid];?></td>
                    <td><?=number_format($_SESSION['sprice'][$pid],0);?></td>
                    <td> <?=$_SESSION['sitem'][$pid];?></td>
                    <td><?=number_format($sum[$pid],0);?></td>
                    <td><a href="clear2.php?id=<?=$pid;?>" class="btn btn-danger">ลบ</a></td>
                </tr>
                <?php } // end foreach ?>
                <tr>
                    <td colspan="5" align="right"><strong>รวมทั้งสิ้น</strong> &nbsp; </td>
                    <td><strong><?=number_format($total,0);?></strong></td>
                    <td><strong>บาท</strong></td>
                </tr>
                <?php 
} else {
?>
                <tr>
                    <td colspan="7" height="50" align="center">ไม่มีสินค้าในตะกร้า</td>
                </tr>
                <?php } // end if ?>
            </table>
        </blockquote>

        <!-- jQuery -->
        <script src="js/jquery.min.js"></script>
        <!-- popper -->
        <script src="js/popper.min.js"></script>
        <!-- bootstrap 4.1 -->
        <script src="js/bootstrap.min.js"></script>
        <!-- jQuery easing -->
        <script src="js/jquery.easing.1.3.js"></script>
        <!-- Waypoints -->
        <script src="js/jquery.waypoints.min.js"></script>
        <!-- Flexslider -->
        <script src="js/jquery.flexslider-min.js"></script>
        <!-- Owl carousel -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- Magnific Popup -->
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/magnific-popup-options.js"></script>
        <!-- Date Picker -->
        <script src="js/bootstrap-datepicker.js"></script>
        <!-- Stellar Parallax -->
        <script src="js/jquery.stellar.min.js"></script>
        <!-- Main -->
        <script src="js/main.js"></script>
</body>

</html>