<?php
include_once('db/connect.php')
?>
<?php
if(isset ($_GET['STT'])){
    $STT = $_GET['STT'];
}
?>
<?php
$sql = "DELETE FROM tbl_nhanvien WHERE STT = $STT";
$xoa = mysqli_query($conn,$sql);
header("location:quanlynhanvien.php");

?>