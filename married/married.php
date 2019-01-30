<?php
  session_start();
  if (isset($_SESSION['formNo'])) {
    $formNo = $_SESSION['formNo'];
  } else {
    header("location: ../index1.php");
  }
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
<body class="jumbotron container bg-white">
  <?php include("../home/homeHeader.html");
  include("../single/singleDB.php");
  include("marriedConn.php");
  ?>
  <form method="POST">
    <label class="badge badge-success">Spouse information</label>
    <div class="form-row">
      <div class="form-group col-lg">
        <label for="spFirstName">First Name:</label>
        <input type="text" name="spFirstName" value="<?php echo $spFirstName;?>" id="spFirstName" class="form-control"><br><?php echo $spFirstNameErr;?>
      </div>
      <div class="form-group col-lg">
        <label for="spSecName">Second Name:</label>
        <input type="text" name="spSecName" value="<?php echo $spSecName;?>" id="spSecName" class="form-control"><br><?php echo $spSecNameErr;?>
      </div>
      <div class="form-group col-lg">
        <label for="spThirdName">Third Name:</label>
        <input type="text" name="spThirdName" value="<?php echo $spThirdName;?>" id="spThirdName" class="form-control"><br><?php echo $spThirdNameErr;?>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-lg">
        <label for="spIdNo">ID number:</label>
        <input type="text" name="spIdNo" value="<?php echo $spIdNo;?>" id="spIdNo" class="form-control"><br><?php echo $spIdNoErr;?>
      </div>
      <div class="form-group col-lg">
        <label for="spPhoneNo">Phone number:</label>
        <div class="input-group input-group-default mb-3"><div class="input-group-prepend"><span class="input-group-text">07</span></div><input type="text" name="spPhoneNo" value="<?php echo $spPhoneNo;?>" id="spPhoneNo" class="form-control"></div><br></div>
      <?php echo $spPhoneNoErr;?>
    </div>
    <?php include("../single/singleForm.php");?>
  </form>
</body>
</html>
