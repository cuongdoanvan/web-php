
<?php
include_once('db/connect.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Công ty chứng khoán</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="style.css" rel="stylesheet" />
	 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script src = "barchart.js"></script>
</head>


<style>
.jumbotron {
  background-color: #473C8B; /* Orange */
  color: #fff;
}

 .container-fluid {
    padding: 30px 20px;
  }
  .bg-grey {
    background-color: #CFCFCF;
  }
  
.logo {
  color: #483D8B;
  font-size: 40px;
}

</style>


<body>
 

<div  style="position: relative; background: url(https://png.pngtree.com/thumb_back/fw800/background/20191105/pngtree-blue-purple-financial-stock-market-background-image_321086.jpg); width:100%; " class="jumbotron text-center">
  
  <h1>Công ty Securities</h1>
  <p>Chào mừng quản lý</p>
  
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
    <nav class="navbar navbar-default" style= "  background-color: #CFCFCF">
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
  
  <!-- Content -->
    <div class="container-fluid text-center bg-grey">
  
<div class="container">
<div class=" col-md-8">
<h1>Sơ lược về Securities</h1>
</br>
<h5>Công ty Cổ phần Chứng khoán (Securities – TCBS) được thành lập từ năm 2008, là công ty con của Ngân hàng NTL.</h5>
</br>
<p>Năm 2019, TCBS đã trở thành công ty chứng khoán có lợi nhuận lớn nhất và hoạt động hiệu quả nhất tại Việt Nam. Sở hữu một tiềm lực tài chính vững mạnh và nền tảng công nghệ tiên tiến, tầm nhìn của TCBS trong 5 năm tới không chỉ dừng lại ở việc đưa đến cho mỗi gia đình Việt Nam một trải nghiệm chuyên biệt về đầu tư và tích lũy, mà sẽ đón đầu các xu hướng Wealthtech trong hành trình chuyển đổi số để trở thành một tập đoàn tài chính công nghệ hàng đầu trong khu vực. Từ một đội ngũ chỉ 30 người, số lượng nhân sự tính đến cuối năm 2019 đã tăng gấp 10 lần, lên tới gần 300 người. Gần 40% trong số này là các chuyên gia thuộc mảng công nghệ, data và hoạt động theo mô hình Scrum/Agile.</p>
</br>
<p>Với định vị thị trường khác biệt ngay từ thuở sơ khai, TCBS đã chọn chiến lược theo đuổi thị trường trái phiếu doanh nghiệp (TPDN). Bắt đầu từ những giải pháp tư vấn bảo lãnh phát hành TPDN cho các khách hàng là doanh nghiệp lớn và uy tín, TCBS đã xác lập vị thế là công ty số 1 thị trường với thị phần tư vấn phát hành luôn ở mức 40%. Tổng khối lượng trái phiếu tư vấn phát hành lũy kế từ 2014 – 2019 đã lên tới 213.322 tỷ đồng. Không chỉ dừng lại ở đối tượng khách hàng là các tổ chức, doanh nghiệp lớn, TCBS còn phân phối TPDN như một sản phẩm đầu tư bán lẻ hấp dẫn và cạnh tranh trên thị trường (iBond) để phục vụ hơn 28.100 khách hàng cá nhân trên toàn quốc. Nhờ có thị phần tư vấn phát hành lớn và cũng là tổ chức đi đầu trong nghiệp vụ tư vấn niêm yết trái phiếu, TCBS đồng thời cũng chiếm vị thế số 1 trên sàn HSX với thị phần hơn 82% ở lĩnh vực môi giới TPDN.</p>
</br>
<p><a href="https://www.tcbs.com.vn/documents/10181/0/Company+profile/a9fcf861-acac-4a96-822d-9405e91a7faa" target="_blank">Tài liệu giới thiệu về TCBS&nbsp;</a>| <a href="https://www.tcbs.com.vn/documents/10181/0/Company+profile+EN/e7a21af4-9120-4641-8715-b26507bbeddf" target="_blank">TCBS Company Profile</a></p>
</div>

<p>&nbsp;</p>

<div class="col-cs-12 col-sm-4 col-md-4">
<img src="doanhthu.png" width = "400px" height = "400">
</div>

</div>
  
  </div>
  
  </br>
   <div class="container-fluid text-center bg-grey">
  

<h1>Tầm nhìn 2020</h1>
<img src="tamnhin.png"></div>


</br>

 
</br>
<div class="container-fluid text-center bg-grey">
  
<h1>Thành tích nổi bật:</h1>

<h5 style="text-align: justify;text-align-last: center;">TCBS đứng vị trí số 1 thị trường về lĩnh vực trái phiếu doanh nghiệp (TPDN). Trong 5 năm liên tiếp 2016 – 2020, thị phần giao dịch TPDN tại Sở giao dịch chứng khoán TP.HCM (HOSE) của TCBS luôn ở mức trên 65%.<br>
Năm 2019, những chỉ số tài chính chủ lực TCBS tiếp tục duy trì ở mức độ vững mạnh và an toàn cao. Tỷ suất lợi nhuận trên vốn chủ sở hữu (ROE) đạt mức 38%, tổng tái ản tăng 45%, biên lợi nhuận ròng giữ ở mức ổn định với tỷ lệ 67%, tỷ suất lợi nhuận sau thuế trên mỗi CBNV của TCBS năm 2019 đạt mức 5,4 tỷ đồng/người, là các chỉ số cao nhất trong các công ty chứng khoán top đầu.</h5>
  </br>
    <div class="row">
	 <div class="col-sm-6">
<div id="dual_x_div" style="height: 350px;"></div>
</div>
 <div class="col-sm-6">
  <div id="piechart_3d" style="width: 600px; height: 400px;"></div>
  </div>
</div>
</div>
</br>
<div class="container-fluid text-center bg-grey">
  <h2>Dịch Vụ</h2>
  <h4>Các dịch vụ tốt nhất</h4>
  <br>
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-off logo"></span>
      <h4>Bảo mật</h4>
      <p>Bảo vệ thông tin khách hàng</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-cloud logo"></span>
      <h4>Dữ liệu</h4>
      <p>Dữ liệu khách hàng</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-lock logo"></span>
      <h4>Công việc</h4>
      <p>Tư vấn đầu tư chứng khoán</p>
    </div>
    </div>
    <br><br>
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-envelope logo"></span>
      <h4>Hộp thư</h4>
      
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
      <h4>Thị trường</h4>
      
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-piggy-bank logo"></span>
      <h4>Qũy đầu tư</h4>
      
    </div>
  </div>
</div>
</br>
 <div class="container-fluid text-center bg-grey">
  <h2>Ban giám đốc</h2>
</br>
</br>
  <div class="row text-center">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="2.png" alt="quyet" width="400" height="300">
        <p><strong>William O'Neil</strong></p>
        <h2>CEO</>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="1.png" alt="musk" width="400" height="300">
        <p><strong>Warren Buffett</strong></p>
        <h2>CEO</h2>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="3.png" alt="San Francisco" width="400" height="300">
        <p><strong>Jesse Livermore</strong></p>
        <h2>CEO</h2>
      </div>
    </div>
  </div>
</div>
</br>
</br>

<footer class="container-fluid text-center">
 <a href="index.php" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
 <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
  </a>
  <p>Công ty chứng khoán <a  title="Visit w3schools">DVC</a></p>
 
 </div>
    
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1736.1822594880841!2d105.84847406442609!3d21.010771590551055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab8ba96500e3%3A0x35a247266440945b!2zQ8O0bmcgdHkgQ-G7lSBwaOG6p24gQ2jhu6luZyBraG_DoW4gS-G7uSB0aMawxqFuZyAoVGVjaGNvbSBTZWN1cml0aWVzKQ!5e1!3m2!1svi!2s!4v1635515329074!5m2!1svi!2s" width = "1200px";style="width:100%" allowfullscreen="" loading="lazy"></iframe>


</footer>
 </div>
  
  
  


</body>


</html>