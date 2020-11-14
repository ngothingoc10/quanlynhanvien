<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <div class="container">
    <?php include 'header.html'?>
    <main>
      <?php include 'menu.php'?>
      <section class="main">
        <?php
          $idpb= $_REQUEST['idpb'];
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
          $sql = "SELECT * FROM phongban WHERE idpb = '$idpb'";
          $recordset = mysqli_query($link, $sql);
          $pb =mysqli_fetch_assoc($recordset);

        ?>
          <!-- tao form -->
        <div align ="center">
          <form method="post" action="/dulieu/xulicapnhat.php">
            <table>
              <caption><h1><strong>Cập nhật thông tin</strong></h1></caption>
              <tr>
                <td> <label for="idpb">ID Phòng Ban:</label></td>
                <td> <input type="text" name="idpb" id="idpb" size="30" value="<?php echo $pb['idpb'] ?>" readonly  required > </td>
              </tr>
              <tr>
                <td> <label for="tenpb">Tên Phòng Ban:</label> </td>
                <td> <input type="text" name="tenpb"  id="tenpb" size="30" value="<?php echo $pb['tenpb'] ?>" required> </td>
              </tr>
              <tr>
                <td> <label for="mota">Mô tả:</label> </td>
                <td> <textarea name="mota" id="mota" cols="29" rows="3" ><?php echo $pb['mota'] ?></textarea><br><br> </td>
              </tr>
              <tr align="center"> 
                <td colspan="2">
                    <input type="submit" name="ok" value="OK">
                    <input type="reset" name="reset" value="Reset">
                </td>
                
              </tr>

            </table>
            
          </form>
        </div>
      </section>
      <?php include 'right_menu.html'?>
    </main>
    <?php include 'footer.html'?>
  </div>
</body>
</html>
