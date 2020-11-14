<?php 

$link = mysqli_connect("localhost", "root", "root", "dulieu");
if(!$link) die(" Connection fail" .mysqli_connect_error());
if (isset($_POST['xoa'])) {
		
  $deleteId = $_POST['xoa'];
 
  // implode function break the array in to string 
  $deleteId = implode("','", $deleteId);

  // delete all nhan vien co trong cac phong ban nay
  $queryDeleteNhanvien  = "DELETE FROM nhanvien WHERE idpb IN ('$deleteId')";
  $result = mysqli_query($link, $queryDeleteNhanvien);
   

  $query  = "DELETE FROM phongban WHERE idpb IN ('$deleteId')";

  $result = mysqli_query($link, $query);
  
}
mysqli_close($link);
header("Location:/dulieu/phongban.php");

?>
