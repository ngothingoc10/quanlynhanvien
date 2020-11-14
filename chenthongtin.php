<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chèn thông tin</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <div class="container">
    <?php include 'header.html'?>
    <main>
      <?php include 'menu.php'?>
      <section class="main">
        <div align = center>
          <form method ="post" action="/dulieu/xulichen.php">
            <table weidth="500px" >
              <caption><h2>Chèn thông tin phòng ban</h2></caption>
              <tr>
                <td><Label for="idpb">ID Phòng Ban:</Label></td>
                <td><input type=text size="30" name="idpb" id="idpb" required></td>
              </tr>
              <tr>
                <td><Label for="tenpb">Tên Phòng Ban:</Label></td>
                <td><input type=text size="30" name="tenpb" id="tenidpb" required></td>
              </tr>
              <tr>
                <td><Label for="mota">Mô tả:</Label></td>
                <td><textarea name="mota" cols="29" rows="5" required></textarea></td>
              </tr>
              <tr align = "center">
                <td colspan="2">
                  <input type="submit" name="submit" value="Sumit">
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
