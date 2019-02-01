<?php
$loginEmail = $loginEmailErr = $emailPop = $loginPass = $loginPassErr = '';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  if (!empty($_POST['loginEmail'])) {
    $loginEmail = mysqli_real_escape_string($conn, $_POST['loginEmail']);
  } else {
    $loginEmailErr = '
    <div class="alert alert-danger" role="alert">
      The email that was entered is incorrect.
    </div>
    ';
  }

  if (!empty($_POST['loginPass'])) {
    $loginPass = mysqli_real_escape_string($conn, $_POST['loginPass']);
  } else {

  }

  if ($loginPass != '05012018') {
    $loginPassErr = '
    <div class="alert alert-danger" role="alert">
     Incorrect password.
    </div>
    ';
  }

  $pass = '05012018';

  if ($loginEmail == 'credolink@molo.com' && $loginPass == $pass) {
      $_SESSION['loginPass'] = $pass;
      if (isset($_SESSION['loginPass'])) {
        echo 'going to home';
        header("location: index1.php");
      } else {
        #echo 'refreshing currently';
        header("location: ../login.php");
      }
  } else {
    #echo 'something is wrong';
  }
}
