<?php
	@session_start();
	include("connectdb.php");
	@$sql = "select * from pdfemale where fm_id ='".$_GET['id']."' ";
	@$rs = mysqli_query($conn, $sql) ;
	@$data = mysqli_fetch_array($rs, MYSQLI_BOTH);
	@$id = $_GET['id'] ;
	
	if(isset($_GET['id'])) {
		@$_SESSION['fid'][$id] = $data['fm_id'];
        @$_SESSION['fname'][$id] = $data['fm_name'];
        @$_SESSION['fcolor'][$id] = $data['fm_color']; 
        @$_SESSION['fbrand'][$id] = $data['fm_brand'];
        @$_SESSION['fdetail'][$id] = $data['fm_detail'];
        @$_SESSION['fprice'][$id] = $data['fm_price'];
        @$_SESSION['fimg'][$id] = $data['fm_img'];
		@$_SESSION['fitem'][$id]++;
	}
?>
<!DOCTYPE HTML>
<html>

<head>
    <title>Footwear - Free Bootstrap 4 Template by Colorlib</title>
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
                                <li class="active"><a href="index2.php">Home</a></li>
                                <li><a href="women.php">Women</a></li>
                                <li><a href="men.php">MEN</a></li>
                                <li><a href="Cart.php">Cart</a></li>
                                <li><a href="shop.php">admin</a></li>
                                <li class="cart"><a href="cart.php"><i class="icon-shopping-cart"></i> Cart [0]</a>
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
                                            <h3><a href="#">Our biggest sale yet 50% off all summer shoes</a></h3>
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


        <div class="colorlib-product">
            <div class="container">
                <div class="row row-pb-lg">
                    <div class="col-md-10 offset-md-1">
                        <div class="process-wrap">
                            <div class="process text-center active">
                                <p><span>01</span></p>
                                <h3>Shopping Cart</h3>
                            </div>
                            <div class="process text-center">
                                <p><span>02</span></p>
                                <h3>Checkout</h3>
                            </div>
                            <div class="process text-center">
                                <p><span>03</span></p>
                                <h3>Order Complete</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-pb-lg">
                    <div class="col-md-12">
                        <div class="product-name d-flex">
                            <div class="one-forth text-left px-4">
                                <span>ชื่อสินค้า</span>
                            </div>
                            <div class="one-eight text-center">
                                <span>ราคา/ชิ้น</span>
                            </div>
                            <div class="one-eight text-center">
                                <span>จำนวน (ชิ้น)</span>
                            </div>
                            <div class="one-eight text-center">
                                <span>รวม</span>
                            </div>
                            <div class="one-eight text-center px-4">
                                <span>Remove</span>
                            </div>
                        </div>
                        <?php
if(!empty($_SESSION['fid'])) {
	foreach($_SESSION['fid'] as $c_number) {
		@$i++;
		@$sum[$c_number] = $_SESSION['fprice'][$pt_id] * $_SESSION['fitem'][$c_number] ;
		@$total += $sum[$c_number] ;
?>
                        <div class="product-cart d-flex">
                            <div class="one-forth">
                                <div class="product-img"
                                    style="background-image: url(img/<?=$_SESSION['fimg'][$c_number];?>" );">
                                </div>
                                <div class="display-tc">
                                    <h3><?=$_SESSION['fname'][$c_number];?></h3>
                                </div>
                            </div>
                            <div class="one-eight text-center">
                                <div class="display-tc">
                                    <span class="price"><?=$_SESSION['fprice'][$c_number],0;?></span>
                                </div>
                            </div>
                            <div class="one-eight text-center">
                                <div class="display-tc">
                                    <input type="text" id="quantity" name="quantity"
                                        class="form-control input-number text-center"
                                        value="<?=$_SESSION['fitem'][$c_number];?>" min="1" max="100">
                                </div>
                            </div>
                            <div class="one-eight text-center">
                                <div class="display-tc">
                                    <span class="price"><?=$_SESSION['fitem'][$c_number];?></span>
                                </div>
                            </div>
                            <div class="one-eight text-center">
                                <div class="display-tc">
                                    <a href="clear2.php?id=<?=$c_number;?>" class="closed"></a>
                                </div>
                            </div>
                        </div>
                        <?php } // end foreach ?>

                        <div class="display-tc">
                            <h3>
                                <div colspan="5" align="right"><strong>รวมทั้งสิ้น</strong> &nbsp;
                                    <span><?=number_format($total,0);?></span>
                                    <span>บาท</span>
                            </h3>
                            <div>
                            </div>
                            <?php 
} else {
?>
                            <center><span>
                                    <colspan="7" height="50" align="center">ไม่มีสินค้าในตะกร้า
                                </span></center>
                            <?php } // end if ?>
                            </footer>
                        </div>
                        <center>
                            <p><a href="checkout.php?a=<?=$_SESSION['fid'][$c_number];?>" class="btn btn-primary"
                                    role="button">ยืนยัน
                                </a>
                        </center>
                        <div class="gototop js-top">
                            <a href="#" class="js-gotop"><i class="ion-ios-arrow-up"></i></a>
                        </div>

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