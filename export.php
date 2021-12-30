<?php 

include_once 'db/connect.php'; 
 

function filterData(&$str){ 
    $str = preg_replace("/\t/", "\\t", $str); 
    $str = preg_replace("/\r?\n/", "\\n", $str); 
    if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"'; 
} 
 

$fileName = "members-data_" . date('Y-m-d') . ".xls"; 
 

$fields = array('STT', 'Manhanvien', 'Ten', 'Gioitinh', 'Ngaysinh', 'Quequan', 'Chucvu'); 
 

$excelData = implode("\t", array_values($fields)) . "\n"; 
 

$query = $conn->query("SELECT * FROM tbl_nhanvien "); 
if($query->num_rows > 0){ 
    
    while($row = $query->fetch_assoc()){ 
       
        $lineData = array($row['STT'], $row['Manhanvien'], $row['Ten'], $row['Gioitinh'], $row['Ngaysinh'], $row['Quequan'], $row['Chucvu']); 
        array_walk($lineData, 'filterData'); 
        $excelData .= implode("\t", array_values($lineData)) . "\n"; 
    } 
}else{ 
    $excelData .= 'No records found...'. "\n"; 
} 
 

header("Content-Type: application/vnd.ms-excel"); 
header("Content-Disposition: attachment; filename=\"$fileName\""); 
 

echo $excelData; 
 
exit;

