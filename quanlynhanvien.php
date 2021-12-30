
<?php
include_once('db/connect.php')
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
  <script src = "https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="style.css" rel="stylesheet" />
    <script src = "https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
      var i =1;
      $(document).ready(function(){
      $("#xemthem").click(function(){
        i+=1;
      $.get("ajaxphantrang.php",{trang:i},function(data){
        $("#danhsach").html(data);

      });

  });
       $("#quaylai").click(function(){
        i-=1;
      $.get("ajaxphantrang.php",{trang:i},function(data){
        $("#danhsach").html(data);

      });

  });
});
</script>
  
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
      <li role="presentation"><a role="menuitem" tabindex="-1" href="themnhanvien.php">Thêm nhân viên</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="export.php">In</a></li>
    
    </ul>
  </div>
            </div>

            <div class="panel-body">
              <form action = "" method = "POST">
              <div class="row">
                <div class="col-md-9">
                  <input class="form-control" type="text" name = "loc" />
                </div>
                <div class="col-md-3">
                <button type = "submit" name = "timkiem" class = "btn btn-primary btn-lg btn-block">Tìm kiếm</button>
                </div>
              </div>
              </form>
                    <?php
                    if(isset($_POST['timkiem'])){
                      $s = $_POST['loc'];
                      if($s == " "){ echo "Nhập vào thanh tìm kiếm";}
                      else {
                        $sql = "SELECT * FROM tbl_nhanvien WHERE Ten LIKE '%$s%'";
                        if($result = mysqli_query($conn,$sql)){
                        $count = mysqli_num_rows($result);

                     
                      }

                        if($count<0){
                          echo "Không tìm thấy kết quả, <b> ". $s . "</b>";
                        }else{
                          echo "Tìm thấy ".$count." kết quả với từ khóa , <b>". $s . "</b>";
                          ?>
                          <br>
                              <table class="table table-striped table-hover">
                                <tr>
                                  <th>STT</th>
                                  <th>Ảnh</th>
                                  <th>Mã Nhân Viên</th>
                                  <th>Họ Tên</th>
                                  <th>Giới Tính</th>
                                  <th>Ngày Sinh</th>
                                  <th>Quê Quán</th>
                                  <th>Chức Vụ</th>
                                
                                  <th></th>
                                </tr>
                                <tr>
                                <?php
                            	while($row = mysqli_fetch_array($result)) {
                                  ?>
                    <tr>
                    <td><?php echo $row["STT"];?></td>
                    <td><img src="uploads/<?php echo $row['Anh']; ?>" style="max-width: 100px;"></td>
                    <td><?php echo $row["Manhanvien"];?> </td>
                    <td><?php echo $row["Ten"];?></td>
                    <td> <?php echo $row["Gioitinh"];?></td>
                    <td> <?php echo $row["Ngaysinh"];?></td>
                    <td> <?php echo $row["Quequan"];?></td>
                    <td> <?php echo $row["Chucvu"];?></td>
                    <td>
                    <a class="glyphicon glyphicon-edit" href="suanhanvien.php?STT=<?php echo $row["STT"]; ?>"></a> 
                    <a class="glyphicon glyphicon-trash" href="xoanhanvien.php?STT=<?php echo $row["STT"]; ?>"></a> 
                    </td>
                    </tr>
                    <?php 
                  }

                  mysqli_free_result($result);

                        ?>
                              </table>
                                          <?php

                                        }
                                      }

                                    }                   
                                    ?>


<?php
	
	$sql = "SELECT * FROM tbl_nhanvien ORDER BY STT ASC 
  LIMIT 5";
	$result = $conn->query($sql);
	
					?>
              <br>
              <table id = "danhsach" class="table table-striped table-hover">
                <tr>
                  <th>STT</th>
                  <th>Ảnh</th>
                  <th>Mã Nhân Viên</th>
                  <th>Họ Tên</th>
                  <th>Giới Tính</th>
                  <th>Ngày Sinh</th>
                  <th>Quê Quán</th>
                  <th>Chức Vụ</th>
                 
                  <th></th>
                </tr>
                <tr>
                <?php
								while($row = mysqli_fetch_array($result)) {
                  ?>
    <tr>
    <td><?php echo $row["STT"];?></td>
    <td><img src="uploads/<?php echo $row['Anh']; ?>" style="max-width: 30px;"></td>
    <td><?php echo $row["Manhanvien"];?> </td>
    <td><?php echo $row["Ten"];?></td>
    <td> <?php echo $row["Gioitinh"];?></td>
    <td> <?php echo $row["Ngaysinh"];?></td>
    <td> <?php echo $row["Quequan"];?></td>
    <td> <?php echo $row["Chucvu"];?></td>
    <td>
     <a class="glyphicon glyphicon-edit" href="suanhanvien.php?STT=<?php echo $row["STT"]; ?>"></a> 
     <a class="glyphicon glyphicon-trash" href="xoanhanvien.php?STT=<?php echo $row["STT"]; ?>"></a> 
    </td>
    
    </tr>
   
    <?php 
  }

  mysqli_free_result($result);

				?>
              </table>
             
            </div>
          </div>

        </div>
				</div>
        <button id = "quaylai" name = "Xem thêm" type = "button"><</button>
      
        <button id = "xemthem" name = "Xem thêm" type = "button">></button>
			</div>
	


  <footer class="container-fluid text-center">
 <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
  </a>
  <p>Công ty chứng khoán <a  title="Visit w3schools">DVC</a></p>
 
 </div>
 <a href="quanlynhanvien.php" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
    
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1736.1822594880841!2d105.84847406442609!3d21.010771590551055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab8ba96500e3%3A0x35a247266440945b!2zQ8O0bmcgdHkgQ-G7lSBwaOG6p24gQ2jhu6luZyBraG_DoW4gS-G7uSB0aMawxqFuZyAoVGVjaGNvbSBTZWN1cml0aWVzKQ!5e1!3m2!1svi!2s!4v1635515329074!5m2!1svi!2s" width = "1200px";style="width:100%" allowfullscreen="" loading="lazy"></iframe>


</footer>
 </div>
  
  
  


</body>


</html>