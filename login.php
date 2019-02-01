<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Credolink Frachise</title>
  <?php
  include("include/conn.php");?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="bootstrap-4.1.2-dist/css/bootstrap.min.css">
  <script src="bootstrap-4.1.2-dist/jquery.min.js"></script>
  <script src="bootstrap-4.1.2-dist/popper.min.js"></script>
  <script src="bootstrap-4.1.2-dist/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="styles/styles.css">
</head>
<body class="text-center" style="padding-top: 13%;">
  <?php include("login/loginSql.php")?>
  <div class="form-row">
    <div class="col-md"></div>
    <div class="col-md">
      <form class="container form-signin" method="POST">
          <h1 class="h3 mb-3 font-weight-normal">Credolink Franchise login.</h1>
          <label for="inputEmail" class="sr-only">Email address</label>
          <input type="email" value="<?php echo $loginEmail;?>" name="loginEmail" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus=""><br><?php echo $loginEmailErr;?>
          <label for="inputPassword" name="loginPass" class="sr-only">Password</label><br>
          <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="loginPass" required=""><br><?php echo $loginPassErr;?>
          <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
          <p class="mt-5 mb-3 text-muted">© snyabiosi 2017-2018</p>
      </form>
    </div>
    <div class="col-md"></div>
  </div>
</body>
</html>
