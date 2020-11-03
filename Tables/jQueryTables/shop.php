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
</head>
<body  >

<div class="container">
  <h1>Admin</h1>
  <h5>คุณไม่จำเป็นต้องรักการออกกำลังเสมอไป แต่คุณจะรัก"ผล"ของมันเสมอ</h5> 


<fieldset> </div> <br><br>
<button type="button" class="btn btn-info">รองเท้าผู้ชาย</button>
 <button type="button" class="btn btn-info">รองเท้าผู้หญิง</button>
 <a href="logout.php" class="btn btn-secondary my-2">ออกจากระบบ</a>


<!-- Text input-->
 
<div class="form-group">
  ค้นหา<input name="xx" type="text" placeholder="กรอกคำค้นหา" >
  <button id="singlebutton" name="singlebutton" class="btn btn-primary">ค้นหา</button> 
</div>


</fieldset>
</form>
  <div class="table-responsive">
    <table width="50%" class="table table-striped table-bordered table-hover" id="dataTablesID">
      <thead>
        <tr>
          <th width="5%">ลำดับ</th>
          <th width="15%">ชื่อ</th>
          <th width="1%">สี</th>
          <th width="10%">ยี่ห้อ</th>
          <th width="20%">รายละเอียด</th>
          <th width="10%">ราคา</th>
          <th width="15%">Size</th>
          <th width="10%">รูปสินค้า</th>
          <th width="10%"></th>
               
        </tr>
      </thead>
      <tbody>

<?php
include("connectdb.php"); 
    
$sql = "SELECT * FROM `pdfemale` ORDER BY `fm_id` ASC  limit 50";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {

 ?>

        <tr>
    <td><?=$row['fm_id'];?></td> 
   <td><?=$row['fm_name'];?></td>
    <td><?=$row['fm_color'];?></td>
    <td><?=$row['fm_brand'];?></td>
    <td><?=$row['fm_detail'];?></td>
    <td><?=$row['fm_price'];?></td>
     <td><?=$row['xx'];?></td>
   <td><img src="./img/<?=$row['fm_img'];?>"width="100" height="150" ></td>
       <td class="text-center">
                    <div class="btn-group btn-group-sm">
                        <a class="btn btn-info" href="insert2.php?fm_id=<?php echo $row["fm_id"]; ?>">
                            <i class="fa fa-eye"></i>
                        </a>
                        <a class="btn btn-warning" href="update.php?fm_id=<?php echo $row["fm_id"]; ?>">
                            <i class="fas fa-edit"> </i>
                        </a>
                        <a class="btn btn-danger" href="delete.php?fm_id=<?php echo $row["fm_id"]; ?>">
                            <i class="fas fa-trash"> </i>
                        </a>
                    </div>
                </td>
          
 </tr>
 </tr>

  <?php 
   }

//  else {
//   echo "0 results";
// }
} 

  mysqli_close($conn);
?>
      
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                   

</body>
</html>
