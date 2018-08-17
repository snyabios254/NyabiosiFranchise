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
<body class="jumbotron container">
<?php include("../include/header.html");
include("singleDB.php");
include("singleConn.php");
?>
<form method="POST">
  <?php include("singleForm.php");?>
</form>
</body>
</html>
