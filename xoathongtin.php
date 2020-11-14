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
  <title>Xóa Thông Tin</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <div class="container">
    <?php include 'header.html'?>
    <main>
      <?php include 'menu.php'?>
      <section class="main">
        
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
    </section>
      <?php include 'right_menu.html'?>
    </main>
    <?php include 'footer.html'?>
  </div>
</body>
</html>
