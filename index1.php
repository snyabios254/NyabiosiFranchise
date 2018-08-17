<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Nyabiosi Frachise</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="bootstrap-4.1.2-dist/css/bootstrap.min.css">
<script src="bootstrap-4.1.2-dist/jquery.min.js"></script>
<script src="bootstrap-4.1.2-dist/popper.min.js"></script>
<script src="bootstrap-4.1.2-dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="styles/styles.css">
</head>
<body class="container jumbotron">
  <?php
  include("include/conn.php");
  include("include/header.html");
  include("include/firstPage.php");
  include("include/connDB.php");?>
  <form method="POST">
    <div class="form-row"><?php echo $dbaseErr;?>
      <div class="form-group col-lg-4">
        <label for="firstName">First Name: </label>
        <input type="text" value="<?php echo $firstName;?>" class="form-control" id="firstName" name="firstName"><br><?php echo $firstNameErr;?>
      </div>
      <div class="form-group col-lg-4">
        <label for="secName">Second Name:</label>
        <input type="text" name="secName" value="<?php echo $secName;?>" id="secName" class="form-control"><br><?php echo $secName;?>
      </div>
      <div class="form-group col-lg-4">
        <label for="thirdName">Third Name:</label>
        <input type="text" value="<?php echo $thirdName;?>" name="thirdName" id="thirdName" class="form-control"><?php echo $thirdNameErr;?>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-lg">
        <label for="subCounty">Residence Sub-County:</label>
        <input type="text" name="subCounty" value="<?php echo $subCounty;?>" id="subCounty" class="form-control"><?php echo $subCountyErr;?>
      </div>
      <div class="form-group col-lg">
        <label for="division">Residence Division:</label>
        <input type="text" value="<?php echo $division;?>" name="division" id="division" class="form-control"><?php echo $divisionErr;?>
      </div>
      <div class="form-group col-lg">
        <label for="estate">Residence Estate:</label>
        <input type="text" name="estate" value="<?php echo $estate;?>" id="estate" class="form-control"><?php echo $estateErr;?>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-lg">
        <label for="idNo">National ID No: </label>
        <input type="number" name="idNo" value="<?php echo $idNo;?>" id="idNo" class="form-control"><br><?php echo $idNoErr.$idNumrowsErr;?>
      </div>
      <div class="form-group col-lg">
        <label for="email">Email Address: </label>
        <input type="email" class="form-control" value="<?php echo $email;?>" name="email" id="email"><br><?php echo $emailError.$emailNumRowsErr;?>
      </div>
      <div class="form-group col-lg">
        <label for="phoneNo">Phone Number: </label>
        <input type="number" value="<?php echo $phoneNo;?>" class="form-control" name="phoneNo" id="phoneNo" placeholder="Format is 2547********"><br><?php echo $phoneNoErr;?>
      </div>
    </div><hr>
    <div class="form-row">
      <label>Marital status: </label>
      <div class="form-group col-lg" id="ms">
        <div class="custom-control custom-radio custom-control-inline">
          <input type="radio" id="married" <?php if($maritalStatus == "married") {echo "checked";}?> name="maritalStatus" value="married" class="custom-control-input">
          <label class="custom-control-label" for="married">Married</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
          <input type="radio" <?php if($maritalStatus == "single"){echo "checked";}?> id="single" value="single" name="maritalStatus" class="custom-control-input">
          <label class="custom-control-label" for="single">Single</label>
        </div>
      </div><br><?php echo $maritalStatusErr;?>
    </div>
    <button type="submit" name="submitForm1" class="btn btn-defualt btn-outline-dark float-right">Next  >></button>
  </form>
</body>
</html>
