
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
    <script>
      function quay_lai_trang_truoc(){
          history.back();
      }
  </script>
</head>
<body bgcolor="#ECAB53">
<?php
$servername = "localhost";
$database = "dulieu";
$username = "root";
$password = "root";
// Create connection
$link = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_GET['idpb'])){
    $idpb = $_GET['idpb'];
    if ($idpb ==""){
        $sql = "SELECT * FROM nhanvien";
        $recordset = mysqli_query($link, $sql);
      }
    else{
      $sql = "SELECT * FROM nhanvien WHERE idpb ='$idpb'";
      $recordset = mysqli_query($link, $sql);

     }

}else {

    $sql = "SELECT * FROM nhanvien";
    $recordset = mysqli_query($link, $sql);
  
}

?>
<table border = "1" width= 100%>
  <caption><h1>NHÂN VIÊN</h1></caption>
  <tr>
    <th>IDNV</th>
    <th>Họ Tên</th>
    <th>ID Phòng Ban</th>
    <th>Địa Chỉ</th>
    <tr>

<?php
 while($row = mysqli_fetch_assoc($recordset))
 {
?>
   <tr> 
     <td> <?php echo $row['idnv']; ?></td>
     <td> <?php echo $row['hoten']; ?></td>
     <td> <?php echo $row['idpb']; ?></td>
     <td> <?php echo $row['diachi']; ?></td>
  <tr>
<?php
 }
?>
</table>
<input type="button" onclick="quay_lai_trang_truoc()" value="Quay lại trang trước">

<?php 
 mysqli_close($link);
 ?> 
  
</body>
</html>