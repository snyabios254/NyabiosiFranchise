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
<title>Nyabiosi Frachise</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="bootstrap-4.1.2-dist/css/bootstrap.min.css">
<script src="bootstrap-4.1.2-dist/jquery.min.js"></script>
<script src="bootstrap-4.1.2-dist/popper.min.js"></script>
<script src="bootstrap-4.1.2-dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="styles/styles.css">
</head>
<body class="bg-secondary container bg-color-white">
  <?php
  include("include/conn.php");
  include("include/firstPage.php");
  include("include/connDB.php");?>
  <header class="bg-white">
    <img class="img-fluid center" style="" src="images/credolinkLogo.jpg">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="home/home.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index1.php">New record</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" disabled type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" disabled type="submit">Search</button>
        </form>
      </div>
    </nav>
  </header>
<div class="bg-white">
  <form method="POST" class="container"><br>
    <div class="form-row"><?php echo $dbaseErr;?>
      <div class="form-group col-lg-4">
        <label for="firstName">First Name: </label>
        <input type="text" value="<?php echo $firstName;?>" class="form-control" id="firstName" name="firstName"><br><?php echo $firstNameErr;?>
      </div>
      <div class="form-group col-lg-4">
        <label for="secName">Second Name:</label>
        <input type="text" name="secName" value="<?php echo $secName;?>" id="secName" class="form-control"><br><?php echo $secNameErr;?>
      </div>
      <div class="form-group col-lg-4">
        <label for="thirdName">Third Name:</label>
        <input type="text" value="<?php echo $thirdName;?>" name="thirdName" id="thirdName" class="form-control"><br><?php echo $thirdNameErr;?>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-lg">
        <label for="subCounty">Residence Sub-County:</label>
        <input type="text" name="subCounty" value="<?php echo $subCounty;?>" id="subCounty" class="form-control"><br><?php echo $subCountyErr;?>
      </div>
      <div class="form-group col-lg">
        <label for="division">Residence Division:</label>
        <input type="text" value="<?php echo $division;?>" name="division" id="division" class="form-control"><br><?php echo $divisionErr;?>
      </div>
      <div class="form-group col-lg">
        <label for="estate">Residence Estate:</label>
        <input type="text" name="estate" value="<?php echo $estate;?>" id="estate" class="form-control"><br><?php echo $estateErr;?>
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

        <div class="input-group input-group-default mb-3"><div class="input-group-prepend"><span class="input-group-text">07</span></div><input type="varchar" value="<?php echo $phoneNo;?>" class="form-control" name="phoneNo" id="phoneNo"></div><?php echo $phoneNoErr;?></div>
      </div>

    <div class="form-row">
      <div class="form-group col-lg-4">
        <label for="employer">Employer: </label>
        <input name="employer" type="text" id="employer" value="<?php echo $employer;?>" class="form-control"><br><?php echo $employerErr;?>
      </div>
      <div class="col-lg-4">
        <label for="occupation">Occupation: </label>
        <input type="text" name="occupation" id="occupation" value="<?echo $occupation;?>" class="form-control"><br><?php echo $occupationErr;?>
      </div>
      <div class="col-lg-4">

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
      <button type="submit" name="submitForm1" class="btn btn-defualt btn-outline-dark float-right">Next  >></button>
    </div><br>
  </form>
  </div>
</div>
</body>
</html>
