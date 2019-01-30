<?php
  session_start();
  if (isset($_SESSION['formNo'])) {
    $formNo = $_SESSION['formNo'];
  } else {header("location: ../index1.php");}
?>
<!DOCTYPE html>
<html>
<head>
<title>CredoLink Frachise</title>
<?php
include("../include/bootstrapLinks.html");
include("../include/conn.php");
?>
</head>
<body class="container bg-secondary" style="height: 100%;">
<?php include("../home/homeHeader.html");
include("singleDB.php");
include("singleConn.php");
?>
<div class="bg-white">
<form method="POST" class="container bg-white">
  <?php include("singleForm.php");?>
</form>
</div>
</body>
</html>
