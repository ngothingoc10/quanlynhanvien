<aside class="left-sidebar">
  <button class="btn-menu"><a class="a-menu" href="index.php" target="main">Trang chủ</a></button> <br>
  <button class="btn-menu"><a class="a-menu" href="nhanvien.php" target="main">Xem nhân viên</a></button> <br>
  <button class="btn-menu"><a class="a-menu" href="phongban.php" target="main">Xem phòng ban</a></button> <br>
  <button class="btn-menu"><a class="a-menu" href="timkiem.php" target="main">Tìm kiếm nhân viên</a></button> <br>
  <button class="btn-menu"><a class="a-menu" href="nvpb.php" target="main">Thông tin nv pb</a></button> <br>
  <?php 
    session_start();
    if (!isset($_SESSION['username'])) {
      echo '<button class="btn-menu"><a class="a-menu" href="login.php" target="main">Login</a></button> <br>';
    } else {
      echo '<button class="btn-menu"><a class="a-menu" href="capnhat.php" target="main">Cập nhật thông tin</a></button> <br>';
      echo '<button class="btn-menu"><a class="a-menu" href="chenthongtin.php" target="main">Chèn thông tin</a></button> <br>';
      echo '<button class="btn-menu"><a class="a-menu" href="xoathongtin.php" target="main">Xóa thông tin</a></button> <br>';
      echo '<button class="btn-menu"><a class="a-menu" href="xoatatca.php" target="main">Xóa tất cả</a></button> <br>';
      echo '<button class="btn-menu"><a class="a-menu" href="logout.php" target="main">Logout</a></button> <br>';
    }
  ?>
</aside>
