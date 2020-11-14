<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Phòng Ban</title>
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
        // Check connection
        if (!$link) {
          die("Connection failed: " . mysqli_connect_error());
        }
        // echo "Connected successfully";
        $sql = "SELECT * FROM phongban";

        $recordset = mysqli_query($link, $sql);

      ?>
      <table border = "1" width= 100%>
        <caption><h1>PHÒNG BAN</h1></caption>
        <tr>
          <th>ID PHÒNG BAN</th>
          <th>TÊN PHÒNG BAN</th>
          <th>MÔ TẢ</th>
        <tr>

        <?php
          while($row = mysqli_fetch_assoc($recordset))
          {
          ?>
          <tr> 
            <td> <?php echo $row['idpb']; ?></td>
            <td> <?php echo $row['tenpb']; ?></td>
            <td> <?php echo $row['mota']; ?></td>
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
