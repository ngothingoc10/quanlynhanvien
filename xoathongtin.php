<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Xóa Thông Tin</title>
</head>
<body bgcolor="#ECAB53">
  <?php 
    $link = mysqli_connect("localhost", "root", "root", "dulieu");
    if(!$link) die("Connection failed" .mysqli_connect_error());
    $sql = "SELECT * FROM phongban ";
    $result = mysqli_query($link, $sql);
  ?>
  <form method="GET" action="dulieu/xulixoa.php">
    <table width ="100%" border="1">
      <caption><h1>Xóa Phòng Ban</h1></caption>
      <tr>
        <th>IP Phòng Ban</th>
        <th>Tên Phòng Ban</th>
        <th>Mô Tả</th>
        <th>Delete</th>
      </tr>
      <?php 
        while($row = mysqli_fetch_assoc($result)){
      ?>
      <tr>
        <td><?php echo $row['idpb']?></td>
        <td><?php echo $row['tenpb']?></td>
        <td><?php echo $row['mota']?></td>
        <td align="center"><a style="text-decoration: none;"  href="/dulieu/xulixoa.php?idpb=<?php echo $row['idpb']?>" > DELETE</a> </td>
      </tr>
      <?php
        }
        mysqli_close($link);
      ?>
    </table>
  </form>

  
</body>
</html>