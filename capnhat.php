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
  <title>Cập nhật </title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <div class="container">
    <?php include 'header.html'?>
    <main>
      <?php include 'menu.php'?>
      <section class="main">
        <?php
          $servername = "localhost";
          $database = "dulieu";
          $username = "root";
          $password = "root";
          // Create connection
          $link = mysqli_connect($servername, $username, $password, $database);
          
          $sql = "SELECT * FROM phongban"; 
          $recordset = mysqli_query($link, $sql);

          ?>
          <table border = "1" width= 100%>
            <caption><h1>NHÂN VIÊN CỦA TỪNG PHÒNG BAN</h1></caption>
            <tr>
              <th>IDPB</th>
              <th>Tên Phòng Ban</th>
              <th>Mô Tả</th>
              <th>Cập nhật</th>
              <tr>

          <?php
          while($row = mysqli_fetch_assoc($recordset))
          {
          ?>
            <tr> 
              <td> <?php echo $row['idpb']; ?></td>
              <td> <?php echo $row['tenpb']; ?></td>
              <td> <?php echo $row['mota']; ?></td>
              <td> <a href="/dulieu/form_capnhat.php?idpb=<?php echo $row['idpb']?>">nnn </a></td> 
            <tr>
          <?php
          }
          ?>
          </table>
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
