<?php
  //nhan lai username vaf password tu trang login.php
  $user = $_REQUEST['username'];
  $pass = $_REQUEST['password'];

  $servername = "localhost";
  $database = "dulieu";
  $username = "root";
  $password = "root";
  // Create connection
  $link = mysqli_connect($servername, $username, $password, $database);
  $sql = "SELECT * FROM admin WHERE username ='$user' and password ='$pass'";
  $recordset = mysqli_query($link,$sql);
  //Kiem tra co ban ghi tra ve khong?
  $row = mysqli_fetch_assoc($recordset);
  if (!$row){
    header("Location:/dulieu/login.php");
  }
  else{
    session_start();
    $_SESSION['username'] = $user;

    header("Location:/dulieu/capnhat.php");
  }
  //giai phong cac tap ban gi
  mysqli_free_result($row); //giai phong bo nho cua bien da luu kq truy van truoc do
  mysqli_close($link);//dong 1 ket noi co so du lieu dang mo
?>
