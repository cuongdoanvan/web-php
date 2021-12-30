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
   
  </form>
</div>

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
		
				
    </ul>
  </div>
   <!-- thanh ngang dang xuat -->
   <div id="content">
    <nav class="navbar navbar-default">
	 <!-- định vị giá trị button -->
	 
    
		
     

    </nav>
   
  </div>
  
  	<section id="main">
		<div class="container">
			<div class="row">
				
				<div class="col-md-12">
					
          <div class="panel panel-default">
            <div class="panel-heading main-color-bg">
              <h3 class="panel-title">Lương</h3>
			  

           
            <br>
            <?php
	
	$sql = "SELECT * FROM luong";
	$result = $conn->query($sql);
	
					?>
              <br>
              <table class="table table-striped table-hover">
                <tr>
                  <th>STT</th>
                  <th>Chi nhánh</th>
                  <th>Chức vụ</th>
                  <th>Lương</th>

                  <th></th>
                </tr>
                <tr>
                <?php
								while($row = $result->fetch_assoc()) {
                  ?>
    <tr>
    <td><?php echo $row["STT"];?></td>
    <td><?php echo $row["chinhanh"];?> </td>
    <td><?php echo $row["Chucvu"];?></td>
    <td> <?php echo $row["luong"];?></td>
  
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
		
		
	</section>
  
  
  
  

 <a href="baitap2web.html" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
    


 </div>
  
  
  


</body>


</html>