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
        <div class="containter flex-center">
          <div class="item-center">
            <h1>Login</h1>

            <form method="post" action="/dulieu/xulilogin.php">

              <label for="username">Username:</label>
              <input type="text" name="username" id="username" size='20' required >
              <br><br>
              <label for="password">Password:</label>
              <input type="password" name="password"  size='20'  required><br><br>
              <input type="submit" name="ok" value="OK">
              <input type="reset" name="reset" value="Reset">
            </form>
          </div>
          
        </div>
        </section>
      <?php include 'right_menu.html'?>
    </main>
    <?php include 'footer.html'?>
  </div>
</body>
</html>
