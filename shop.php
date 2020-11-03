<!DOCTYPE html>
<html>

<head>
    <title>Admin </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- การลิ้ง icon เพื่อใช้งาน icon -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- การลิ้ง icon เพื่อใช้งาน icon -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <!-- การลิ้ง sweetalert2 เเบบ cdn  -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>

<body>


    <div class="container">
        <h1>Admin</h1>
        <h5>คุณไม่จำเป็นต้องรักการออกกำลังเสมอไป แต่คุณจะรัก"ผล"ของมันเสมอ</h5>


        <fieldset>
            <br><br>
            &nbsp;
            <a href="insert.php" class="btn btn-success my-2">เพิ่มข้อมูลสินค้า</a><br><br>
            &nbsp;
            &nbsp; <button type="button" class="btn btn-info">รองเท้าผู้ชาย</button>
            &nbsp;
            <button type="button" class="btn btn-info">รองเท้าผู้หญิง</button>
            &nbsp;
            <a href="logout.php" class="btn btn-danger my-2">ออกจากระบบ</a><br><br>


            <!-- Text input-->

            <form method="post" action="">
                ค้นหา <input type="text" name="k" autofocus>
                <input type="Submit" name="Submit" value="ค้นหา">
            </form>

    </div>



    <?php
include("connectdb.php");
        if (isset($_GET["deleteR"] )) {
                echo
                    "<script> 
                        Swal.fire({
                            icon: 'warning',
                            title: 'ยืนยันการลบข้อมูล?',
                            text: 'ท่านเเน่ใจว่า ท่าต้องการลบข้อมูล!',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'ใช่',
                            cancelButtonText: 'ไม่!'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                location = 'shop.php?deleteR2=req&fm_id={$_GET["fm_id"]}'
                            }else{
                                location = 'shop.php'
                            }
                        }); 
                </script>";
        }

        //เช็อกว่่ามีการส่งค่า Get fm_id หรือไม่ (?fm_id=xxx)
        if (isset($_GET["deleteR2"])) {

            // คำสั่ง sql ในการลบข้อมูล ตาราง tbl_products โดยจะลบข้อมูลสินค้า fm_id ที่ส่งมา
            $sql = "DELETE FROM `pdfemale` WHERE `pdfemale`.`p_id` = '{$_GET["p_id"]}'";

            if (mysqli_query($conn, $sql)) {
                unlink("img/".$_GET['p_id'].".png");
                echo
                    "<script> 
                        Swal.fire(
                            'ลบข้อมูลสำเร็จ!',
                            'ท่านได้ลบข้อมูลเรียบร้อย',
                            'success'
                        ).then(()=> location = 'shop.php')
                    </script>";
                //header('Location: shop.php');
            } else {
                echo
                    "<script> 
                    Swal.fire({
                        icon: 'error',
                        title: 'ลบข้อมูลไม่สำเร็จ', 
                    }).then(()=> location = 'shop.php')
                </script>";
            }

            mysqli_close($conn);
        }
    
        ?>