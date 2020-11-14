<?php 
  session_start();
  $username = $_SESSION['username'];
  if (!isset($username)) {
    header("Location:/dulieu/login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Xóa thông tin</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <div class="container">
    <?php include 'header.html'?>
    <main>
      <?php include 'menu.php'?>
      <section class="main">

      <?php
        $link =  mysqli_connect("localhost", "root","root","dulieu") ;
        if(!$link) die("Connection failed " .mysqli_connect_error());
        $sql = "SELECT * FROM phongban ";
        $recordset = mysqli_query($link,$sql);
      ?>
      <form method="post" action="/dulieu/xulixoatatca.php">
      <table border="1" width ="100%">
        <caption><h1>Xóa Các  Phòng Ban</h1></caption>
        <tr>
          <th>
            ID Phòng Ban
          </th>
          <th>
            Tên Phòng Ban
          </th>
          <th>
            Mô tả
          </th>
          <th>
            Xóa
          </th>
        </tr>
      <?php 
        while ($row = mysqli_fetch_assoc($recordset)) {
      ?>

      <tr>
        <td><?php echo $row['idpb']?></td>
        <td><?php echo $row['tenpb']?></td>
        <td><?php echo $row['mota']?></td>
        <td align="center"> <input type="checkbox" name="xoa[]" id = "xoa[]" value="<?php echo $row['idpb'] ;?>" ></td>
      </tr>
      <?php 
        }
      ?>
      <td colspan="3"></td>
      <td align="center" ><input type="submit" value=" Xóa Tất Cả"></td>
      </table>
      </form>
      <?php 
        mysqli_close($link);
      ?>
      </section>
      <?php include 'right_menu.html'?>
    </main>
    <?php include 'footer.html'?>
  </div>
</body>
</html>
