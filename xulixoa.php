<?php 
 $deleteIdpb=$_GET['idpb'];
$link = mysqli_connect("localhost", "root", "root", "dulieu");
if(!$link) die(" Connection fail" .mysqli_connect_error());
if (isset($deleteIdpb)) {

  // delete all nhan vien co trong cac phong ban nay
  $queryNV = "DELETE FROM nhanvien WHERE idpb IN ('$deleteIdpb')";
  $result1 = mysqli_query($link, $queryNV);
  $queryPB  = "DELETE FROM phongban WHERE idpb IN ('$deleteIdpb')";
  $result = mysqli_query($link, $queryPB);
  
}
mysqli_close($link);
header("Location:/dulieu/phongban.php");

?>
