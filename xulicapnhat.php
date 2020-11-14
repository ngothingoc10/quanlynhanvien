<?php
  session_start();
  $username = $_SESSION['username'];
  if (isset($username)) {
    $idpb = $_REQUEST['idpb'];
    $tenpb =$_REQUEST['tenpb'];
    $mota =$_REQUEST['mota'];
    echo $idpb;

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
    $sql = "UPDATE phongban SET tenpb = '$tenpb', mota = '$mota' WHERE idpb = '$idpb'";
    $recordset = mysqli_query($link, $sql);
    mysqli_close($link);
    header("Location:/dulieu/capnhat.php");
  } else {
    header("Location:/dulieu/login.php")
  }
?>
