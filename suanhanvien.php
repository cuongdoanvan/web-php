
<?php
include_once('db/connect.php')
?>
<?php
if(isset ($_GET['STT'])){
    $STT = $_GET['STT'];
}
?>


<?php
    if(isset($_POST["sua"])){
      $manhanvien = $_POST["manhanvien"];
      $ten = $_POST["ten"];
      $gioitinh = $_POST["gioitinh"];
      $ngaysinh = $_POST["ngaysinh"];
      $quequan = $_POST["quequan"];
      $chucvu = $_POST["chucvu"];
      if(isset ($_FILES['Image'])){
        $file = $_FILES['Image']['name']; 
        $tmp_name = $_FILES['Image']['tmp_name'];
        move_uploaded_file( $tmp_name,'uploads/'.$file);
    
      $sql = "UPDATE tbl_nhanvien SET Anh = '$file',
      Manhanvien = '$manhanvien', Ten = '$ten', Gioitinh = '$gioitinh', Ngaysinh = '$ngaysinh'
      ,Quequan = '$quequan',Chucvu = '$chucvu' WHERE STT = $STT"; 
      $them = mysqli_query($conn,$sql);
      header("location:quanlynhanvien.php");
    
    }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Theme Company</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="style.css" rel="stylesheet" />
  
</head>
<style>
footer .glyphicon {
  font-size: 20px;
  margin-bottom: 20px;
  color: #f4511e;
}
</style>
<style>
.jumbotron {
  background-color: #473C8B; /* Orange */
  color: #fff;
}

 .container-fluid {
    padding: 30px 20px;
  }
  .bg-grey {
    background-color: #f6f6f6;
  }
  
.logo {
  color: #483D8B;
  font-size: 40px;
}

</style>


<body>
 

<div  style="position: relative; background: url(https://png.pngtree.com/thumb_back/fw800/background/20191105/pngtree-blue-purple-financial-stock-market-background-image_321086.jpg); width:100%; " class="jumbotron text-center">
  
  <h1>Công ty Chứng Khoán DVC</h1>
  <p>Chào mừng quản lý</p>
  <form class="form-inline">
    <div class="input-group">
      <input type="email" class="form-control" size="50" placeholder="" required>
      <div class="input-group-btn">
        <button type="button" class="btn btn-info">Tìm kiếm</button>
      </div>
    </div>
  </form>
</div>
<?php
$sql = "SELECT * FROM  tbl_nhanvien WHERE Gioitinh = 'nam'"; 
if ($result=mysqli_query($conn,$sql)){
	// Return the number of rows in result set
	  $nam=mysqli_num_rows($result);
	
	// Free result set
	  mysqli_free_result($result);
  }
 
  $sql = "SELECT * FROM  tbl_nhanvien WHERE Gioitinh = 'nu'"; 
if ($result=mysqli_query($conn,$sql)){
	// Return the number of rows in result set
	  $nu=mysqli_num_rows($result);
	
	// Free result set
	  mysqli_free_result($result);
  }
  ?>

<div id="viewport">
  <!-- Sidebar -->
  <div style = "background-color: #191970; /* Orange */" id="sidebar">
    <header>
      <a href="baitap2web.php">Tổng quan</a>
    </header>
    <ul class="nav">
     
      <li>
        <a href="quanlynhanvien.php">
          <span class="fa fa-user mr-3"></span> Nhân viên
        </a>
      </li>
      <li>
        <a href="quanlyluong.php">
         <span class="fa fa-sticky-note mr-3"></span> Quản lý lương
        </a>
      </li>
     
      <li>
        <a href="khenthuong.php">
          <span class="fa fa-sticky-note mr-3"></span> Khen thưởng-Kỷ luật
		</a>
      </li>
<div  style = "background-color: #191970; /* Orange */"  class="well">
						
						<h4>Nhân Viên Nam</h4>
						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
								<?php
							echo "$nam";
							?>
							</div>
						</div>
						<h4>Nhân Viên Nữ </h4>
						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="400" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
							<?php
							echo "$nu";
							?>
							</div>
						</div>
					</div>
				
    </ul>
  </div>
   <!-- thanh ngang dang xuat -->
   <div id="content">
    <nav class="navbar navbar-default">
	 <!-- định vị giá trị button -->
	 
    
		

    </nav>
   
  </div>
  
  <?php
	
	$sql = "SELECT * FROM tbl_nhanvien";
	$result = $conn->query($sql);
	
					?>
		<div class="container">
			<div class="row">
				
				<div class="col-md-12">
					
          <div class="panel panel-default">
            <div class="panel-heading main-color-bg">
              <h3 class="panel-title">Nhân Viên</h3>
			  
			       <div style="position:relative;left:1000px; top:-20px;" class="dropdown">
					<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              Chức năng
              <span class="caret"></span>
            </button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="menu2">
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Thêm nhân viên</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">In</a></li>
    
    </ul>
  </div>
            </div>

<?php
$sql = "SELECT * FROM tbl_nhanvien WHERE STT= $STT";
$result = mysqli_query($conn, $sql);
$rows = mysqli_fetch_array($result,1);
   ?> 
                    

            
                <form method = "POST" action = " "enctype = "multipart/form-data">
                
                <div class="form-group">
							<label class="col-sm-3 control-label no-padding-right">Ảnh</label>
							<div class="col-sm-9">
								<input type="file" class="form-control" id="anh" name="Image" >
                
									
							</div>
						</div>
						<br/>
						<br/>
                <div class="form-group">
							<label class="col-sm-3 control-label no-padding-right">Mã nhân viên</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="manhanvien" name="manhanvien"
									value="<?php echo $rows["Manhanvien"];?>" />
							</div>
						</div>
						<br/>
						<br/>
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right">Tên</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="ten"
									name="ten" value="<?php echo $rows["Ten"];?>" />
							</div>
						</div>
</br>
</br>
            <div class="form-group">
							<label class="col-sm-3 control-label no-padding-right">Giới tính</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="gioitinh" name="gioitinh"
									value="<?php echo $rows["Gioitinh"];?>" />
							</div>
						</div>
						<br/>
						<br/>
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right">Ngày sinh</label>
							<div class="col-sm-9">
								<input type="date" class="form-control" id="ngaysinh"
									name="ngaysinh" value="<?php echo $rows["Ngaysinh"];?>" />
							</div>

						</div>
            </br>
</br>
            <div class="form-group">
							<label class="col-sm-3 control-label no-padding-right">Quê quán</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="quequan" name="quequan"
									value="<?php echo $rows["Quequan"];?>" />
							</div>
						</div>
						<br/>
						<br/>
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right">Chức vụ</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="chucvu"
									name="chucvu" value="<?php echo $rows["Chucvu"];?>" />
							</div>

						</div>
</br>
            <button type = "submit" name = "sua" class = "btn btn-primary btn-lg btn-block">Sửa</button>
                </form>
              
                
								
   

  
  
</div>
          </div>

        </div>
				</div>
			</div>


 </div>

</body>


</html>
  
  

 
  
  
  

