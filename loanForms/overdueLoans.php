<?php
session_start();
if (isset($_SESSION['loginPass'])) {
  #echo 'it is set yall';
  $password = $_SESSION['loginPass'];
} else {
  header("location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Overdue loans</title>
  <?php
  include("../include/conn.php");
  include("../include/bootstrapLinks.html");
  ?>
</head>
<body class="bg-secondary container bg-color-white">
  <div class="bg-light rounded border border-info">
    <?php
    include("../home/homeHeader.html");
    include("currentLoansSql.php");
    echo $overdueLoans;
    ?>
  </div>
</body>
</html>
