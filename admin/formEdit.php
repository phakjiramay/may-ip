<?php
session_start();
// if (isset($_SESSION['ses_aid'])) {

//     if (isset($_GET["p_id"])) { 
        
        ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Footwear</title>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- การลิ้ง css bootstrap เเบบ cdn -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- การลิ้ง javascript ของ bootstrap เเบบ cdn -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- การลิ้ง sweetalert2 เเบบ cdn  -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</head>

<body class="">


    <br>


    <!-- จบ คลาส container -->

    <div class="container my-5 px-0 1">

        <!--Section: Content-->
        <section class="p-5 my-md-5 text-center">

            <?php

                    //นำเข้าไฟล์ การเชื่อมต่อฐานข้อมูล
                    include_once("./config/connectDB.php");

                    $sql = "SELECT * FROM pdfemale WHERE p_id='{$_GET["p_id"]}'";
                    $result = mysqli_query($conn, $sql);

                    // เเสดงข้อมูลจากฐานข้อมูล
                    while ($data = mysqli_fetch_assoc($result)) { ?>
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <!-- Material form login -->
                    <div class="card">

                        <!--Card content-->
                        <div class="card-body">

                            <!-- Form -->
                            <form class="text-center" style="color: #757575;" method="post" action=""
                                enctype="multipart/form-data">
                                <h3 class="font-weight-bold my-4 pb-2 text-center text-danger">เเก้ไขสินค้า </h3>
                                <div class="form-group">
                                    <input type="text" value="<?php echo $data["p_name"]; ?>" class="form-control"
                                        required autofocus placeholder="ชื่อสินค้า" name="p_name" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" value="<?php echo $data["p_detail"]; ?>"
                                        required placeholder="ราคาสินค้า" name="p_detail" required>
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control" value="<?php echo $data["p_price"]; ?>"
                                        required placeholder="จำนวนสินค้า" name="p_price" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" value="<?php echo $data["p_color"]; ?>" class="form-control"
                                        required autofocus placeholder="ชื่อสินค้า" name="p_color" required>
                                </div>
                                <div class="form-group">
                                    <input type="file" class="form-control" value="<?php echo $data["p_img"]; ?>"
                                        required placeholder="ราคาสินค้า" name="p_img" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" value="<?php echo $data["p_brand"]; ?>"
                                        required placeholder="จำนวนสินค้า" name="p_brand" required>
                                </div>
                                <!-- <div class="form-group"> -->
                                <input type="hidden" class="form-control" value="<?php echo $data["pt_id"]; ?>" required
                                    placeholder="" name="pt_id" required>
                                <!-- </div> -->

                                <div class="text-center">
                                    <input type="submit" name="SubmitUpdate" value="เเก้ไข" class="btn btn-warning">
                                </div>

                            </form>
                            <!-- Form -->

                        </div>

                    </div>
                    <!-- Material form login -->
                </div>
            </div>


            <?php
                    } ?>

        </section>
        <!--Section: Content-->
    </div>
    <!-- จบ คลาส container -->

    <?php

            if (isset($_POST["SubmitUpdate"])) {
                //นำเข้าไฟล์ การเชื่อมต่อฐานข้อมูล
                include_once("./config/connectDB.php");

                //คำสั่ง SQL บันทึกข้อมูลลงฐานข้อมูล
                $sqlUp = "UPDATE `pdfemale` SET `p_name` = '{$_POST["p_name"]}', `p_color` = '{$_POST["p_color"]}',
                         `p_brand` = '{$_POST["p_brand"]}', `p_detail` = '{$_POST["p_detail"]}', `p_price` = '{$_POST["p_price"]}',
                          `p_img` = '{$_FILES["p_img"]["name"]}', `pt_id` = '{$_POST["pt_id"]}' WHERE `pdfemale`.`p_id` = {$_GET["p_id"]};";

                if (mysqli_query($conn, $sqlUp)) {
                            // @copy($_FILES['p_img']['tmp_name'],"../img/". basename($_FILES["p_img"]["name"]));
                            @copy($_FILES['p_img']['tmp_name'],"../img/". basename($_FILES["p_img"]["name"]));
                            //@copy($_FILES["p_img"]["name"],"../img/".$_FILES["p_img"]["name"].".jpg"); 
                    echo
                        "<script> 
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'เเก้ไขข้อมูลสำเร็จ',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(()=> location = 'admin.php')
                </script>";
                } else {
                    echo
                        "<script> 
                    Swal.fire({
                        icon: 'error',
                        title: 'เเก้ไขข้อมูลไม่สำเร็จ', 
                        text: 'โปรดตรวจสอบความถูกต้องของข้อมูล!',
                    }) 
                </script>";
                }
                mysqli_close($conn);
            }

            ?>

    </bodyclass=>

</html>

<?php
//     }
// } else {
//     header('Location: login.php');
//     exit;
// }
?>