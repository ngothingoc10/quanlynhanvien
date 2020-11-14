<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Xem thông tin phòng ban </title>
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
// if (!$link) {
//     die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";
//lay ma phongban tu trang phongban.php
// $idpb=$_REQUEST['idpb'];
// if($idpb==""){
//   $sql = "SELECT * FROM phongban";
//   $recordset = mysqli_query($link, $sql);
// }
// else {
//   $sql = "SELECT * FROM phongban WHERE ";
//   $recordset = mysqli_query($link, $sql);
// }
$sql = "SELECT * FROM phongban"; 
$recordset = mysqli_query($link, $sql);

?>
<table border = "1" width= 100%>
  <caption><h1>NHÂN VIÊN CỦA TỪNG PHÒNG BAN</h1></caption>
  <tr>
    <th>IDPB</th>
    <th>Tên Phòng Ban</th>
    <th>Mô Tả</th>
    <th>Xem Nhân Viên</th>
    <tr>

<?php
 while($row = mysqli_fetch_assoc($recordset))
 {
?>
   <tr> 
     <td> <?php echo $row['idpb']; ?></td>
     <td> <?php echo $row['tenpb']; ?></td>
     <td> <?php echo $row['mota']; ?></td>
     <td> <a href="/dulieu/nhanvien.php?idpb=<?php echo $row['idpb']?>">nnn </a></td> 
  <tr>
<?php
 }
?>
</table>
<?php 
 mysqli_close($link);
 ?> 
</body>
</html>