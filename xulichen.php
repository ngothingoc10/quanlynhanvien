<?php
  session_start();
  $username = $_SESSION['username'];
  if (isset($username)) {
    $idpb = $_REQUEST['idpb'];
    $tenpb = $_REQUEST['tenpb'];
    $mota = $_REQUEST['mota'];
    $link = mysqli_connect("localhost","root","root","dulieu");
    if(!$link)  die("Connection failed: " . mysqli_connect_error());
    $sql =" INSERT INTO phongban (idpb,tenpb,mota )
              VALUES('$idpb', '$tenpb' , '$mota')";
    $recordset = mysqli_query($link, $sql);
    mysqli_close($link);
    header("Location:/dulieu/phongban.php");
  } else {
    header("Location:dulieu/login.php");
  }
?>
