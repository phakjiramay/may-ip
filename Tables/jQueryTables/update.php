<?php
	include("connectdb.php");
	$sql = "SELECT * FROM book where b_id='".$_GET['id']."'";
	$rs = mysqli_query($conn,$sql);
    $data = mysqli_fetch_array($rs);
			
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ฟอร์มแก้ไขข้อมูล </title>
<!-- Latest compiled and minified CSS -->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</head>

<body>
<form class="form-horizontal" method="post" enctype="multipart/form-data">
<fieldset>

<!-- Form Name -->
<legend> ฟอร์มแก้ไขข้อมูล </legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="fm_id">ลำดับสินค้า</label>  
  <div class="col-md-4">
  <input id="id" name="id" type="text" placeholder="" class="form-control input-md"  readonly value="<?=$data['fm_id'];?>">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">ชื่อสินค้า</label>  
  <div class="col-md-4">
  <input id="name" name="name" type="text" placeholder="" class="form-control input-md" required="" value="<?=$data['fm_name'];?>">
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="color">สีรองเท้า</label>  
  <div class="col-md-4">
  <input id="color" name="color" type="text" placeholder="" class="form-control input-md" required="" value="<?=$data['fm_color'];?>">
    
  </div>
</div>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="brand">ยี่ห้อ</label>  
  <div class="col-md-4">
  <input id="brand" name="brand" type="text" placeholder="" class="form-control input-md" required="" value="<?=$data['fm_brand'];?>">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="detail">รายละเอียดสินค้า</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="detail" name="detail"><?=$data['fm_detail'];?></textarea>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="price">ราคาสินค้า</label>  
  <div class="col-md-4">
  <input id="price" name="price" type="text" placeholder="" class="form-control input-md" required="" value="<?=$data['fm_price'];?>">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Size">Size</label>  
  <div class="col-md-4">
  <input id="Size" name="Size" type="text" placeholder="" class="form-control input-md" required="" value="<?=$data['#'];?>">
    
  </div>
</div>
<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="img">รูปสินค้า</label>
  <div class="col-md-4">
    <input id="img" name="img" class="input-file" type="file">
  </div>
</div>



<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Submit"></label>
  <div class="col-md-4">
    <button id="Submit" name="Submit" class="btn btn-success">บันทึก</button>
  </div>
</div>

</fieldset>
</form>


<?php

	 if (isset ($_POST ['Submit'])){
		 include("connectdb.php");
		 $sql = "update pdfemale set   b_fm_name='".$_POST['name']."', fm_color='".$_POST['color']."', fm_brand='".$_POST['brand']."', fm_detail='".$_POST['detail']."', fm_price='".$_POST['price'].
		 "'where b_id='".$_GET['id']."'";
		 //var_dump($sql); exit;
		 mysqli_query($conn,$sql) or die ("แก้ไขข้อมูลไม่ได้");
		 
		 if(isset($_FILES ['img']['name'])){
		 @copy($_FILES['img']['tmp_name'],"images/".$_POST['id'].".png");  //codeเพิ่มรูป  
		 }
		 
		 echo "<script>";
		 echo "alert ('แก้ไขข้อมูลสำเร็จ');";
		 echo "window.location='index.php';";
		 echo "</script>";
		 }

?>



</body>
</html>