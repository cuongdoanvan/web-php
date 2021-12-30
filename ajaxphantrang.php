<?php
include_once('db/connect.php');

$sotintrang = 5;

$trang = $_GET['trang'];
settype($trang,'int');

$from = ($trang-1)*$sotintrang;

$qr = "SELECT*FROM tbl_nhanvien
        ORDER BY STT ASC 
        LIMIT $from, $sotintrang
";

$tin = mysqli_query($conn,$qr);

?>
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
								While($row = mysqli_fetch_array($tin)){
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

				?>
              </table>
