<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tìm Kiếm Nhân Viên</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <div class="container">
    <?php include 'header.html'?>
    <main>
      <?php include 'menu.php'?>
      <section class="main">
        
        <?php
          $thongtinErr=$thongtin="";
          $pdienErr=$pdien="";
          echo '<h2  style="text-align: center;">Tìm kiếm thông tin nhân viên </h2>';

        
          if (isset($_REQUEST['ok'])) {
            if (empty($_POST["thongtin"])){
              $thongtinErr = "Cần nhập thông tin";
            } else $thongtin=$_POST["thongtin"];
            if ( empty($_POST["pdien"])){
              $pdienErr = "Cần nhập thông tin";
            } else $pdien = $_POST["pdien"];
          }
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
          // echo "Connected successfully";
          // $thongtin= $_POST['thongtin'];
          // $pdien= $_POST['pdien'];
          if(isset($_POST['thongtin']) && isset($_POST['pdien'])) {
            $thongtin= $_POST['thongtin'];
            $pdien= $_POST['pdien'];
            $sql = "SELECT * FROM nhanvien WHERE(( hoten = '$thongtin' and '$pdien'= 'tennv' ) or (idnv = '$thongtin'and '$pdien'= 'idnv'))";
            $recordset = mysqli_query($link, $sql);
          }
          
            
        ?>
          <div align="center">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            
              <label >ID Nhân Viên</label>
              <input type="radio" name="pdien" <?php if (isset($pdien) && $pdien=="idnv") echo "checked";?> value="idnv">
              <label >Tên Nhân Viên</label>
              <input type="radio" name="pdien"  <?php if (isset($pdien) && $pdien=="tennv") echo "checked";?> value="tennv">
              <span class="error">* <?php echo $pdienErr;?></span>
              <br><br>
              <label for="thongtin">Nhập Thông tin:</label>
              <input type="text" name="thongtin" id="thongtin" value="<?php echo $thongtin;?>">
              <span class="error">* <?php echo $thongtinErr;?></span>
              <br><br>
              <input type="submit" name="ok" value="Search">
              <input type="reset" name="reset" value="Reset">
              <input type="submit" name="Exit" value="Exit"><br><br>
              
            </form>
          </div> 
            
          <table border = "1" width= "100%">
            <caption><h1>NHÂN VIÊN</h1></caption>
            <tr>
              <th>IDNV</th>
              <th>Ho_Ten</th>
              <th>ID_Phòng_Ban</th>
              <th>Địa_Chỉ</th>
            <tr>
          
          <?php
          if (isset($recordset)) {
            while($row = mysqli_fetch_assoc($recordset)) {
              echo "<tr><td>{$row['idnv']}</td>
                    <td>{$row['hoten']}</td>
                    <td>{$row['idpb']}</td>
                    <td>{$row['diachi']}</td>
                    <tr>";
            }
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
