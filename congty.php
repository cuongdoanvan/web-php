<?php
include_once('db/connect.php');
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


<div id="viewport">
  <!-- Sidebar -->
  <div style = "background-color: #191970; /* Orange */" id="sidebar">
    <header>
      <a href="index.php">Tổng quan</a>
    </header>
    <ul class="nav">
      <li>
        <a href="congty.php">
          <span class="fa fa-home mr-3"></span> Công ty
        </a>
      </li>
    
		
				
    </ul>
  </div>
   <!-- thanh ngang dang xuat -->
   <div id="content">
    <nav class="navbar navbar-default">
	 <!-- định vị giá trị button -->
     <div style="position:relative;left:1135px; top:7px;" class="dropdown">
    <button  class="btn btn-secondary dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">
    <span class="glyphicon glyphicon-user"> <span class="caret"></span></button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
      <li role="presentation"><a role="menuitem" tabindex="-1" href="login.php">Đăng nhập</a></li>

      <li role="presentation" class="divider"></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="login.php">Đăng xuất</a></li>
    </ul>
  </div>

    </nav>
   
  </div>
  <?php
$sql = "SELECT * FROM  chinhanh"; 
if ($result=mysqli_query($conn,$sql)){
	// Return the number of rows in result set
	  $rowcount=mysqli_num_rows($result);
	 
	// Free result set
	  mysqli_free_result($result);
  }

  $sql = "SELECT * FROM  tbl_nhanvien"; 
  if ($result=mysqli_query($conn,$sql)){
    // Return the number of rows in result set
      $nhanvien=mysqli_num_rows($result);
     
    // Free result set
      mysqli_free_result($result);
    }

   $sql = "SELECT DISTINCT Chucvu FROM  tbl_nhanvien"; 
    if ($result=mysqli_query($conn,$sql)){
      // Return the number of rows in result set
        $chucvu=mysqli_num_rows($result);
       
      // Free result set
        mysqli_free_result($result);
      }


  ?>
  	<section id="main">
		<div class="container">
			<div class="row">
				
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading main-color-bg">
							<h3 class="panel-title">Công ty</h3>
						</div>
						<div class="panel-body">
							<div class="col-md-4">
								<div class="well dash-box" >
									<h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                	<?php
									printf( $nhanvien);
									?>
                </h2>
									<h4>Nhân viên</h4>
								</div>
							</div>
							<div class="col-md-4">
								<div class="well dash-box">
									<h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                	<?php
									printf( $chucvu);
									?>
                </h2>
									<h4>Chức vụ</h4>
								</div>
							</div>
							<div class="col-md-4">
								<div class="well dash-box">
									<h2><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span> 
									<?php
									printf( $rowcount);
									?>
								
								</h2>
									<h4>Chi nhánh</h4>
								</div>
							</div>
						</div>
					</div>
					<?php
	
	$sql = "SELECT * FROM chinhanh";
  $result=mysqli_query($conn,$sql);
	
					?>
					

					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Chi nhánh</h3>
						</div>
						<div class="panel-body">
							<table class="table table-striped table-hover">
								<tr>
									<th>STT</th>
									<th>Tên</th>
									<th>Giám đốc</th>
									<th>Địa chỉ</th>
								</tr>
								
								<tbody>
									<?php
								while($row = mysqli_fetch_array($result)) {
    echo 
    "<tr><td>".$row["STT"]."</td><td>".$row["Ten"]." </td><td>".$row["Giamdoc"]."</td><td> ".$row["Diachi"]."</td></tr>";
  }
  mysqli_free_result($result);

				?>
                </tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
  
  
  
  

 <footer class="container-fluid text-center">
 <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
  </a>
  <p>Công ty chứng khoán <a  title="Visit w3schools">DVC</a></p>
 
 </div>
 <a href="congty.php" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
    
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1736.1822594880841!2d105.84847406442609!3d21.010771590551055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab8ba96500e3%3A0x35a247266440945b!2zQ8O0bmcgdHkgQ-G7lSBwaOG6p24gQ2jhu6luZyBraG_DoW4gS-G7uSB0aMawxqFuZyAoVGVjaGNvbSBTZWN1cml0aWVzKQ!5e1!3m2!1svi!2s!4v1635515329074!5m2!1svi!2s" width = "1200px";style="width:100%" allowfullscreen="" loading="lazy"></iframe>


</footer>
 </div>
  
  
  


</body>


</html>