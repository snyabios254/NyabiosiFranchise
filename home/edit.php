<?php
include("../include/conn.php");
include("../home/editSql.php");?>
<!DOCTYPE html>
<html>
<head>
  <title><?php echo $firstName.' '.$secName.' '.$thirdName;?></title>
  <?php include("../include/bootstrapLinks.html");?>
</head>
<body class="bg-secondary container">
  <div class="bg-light rounded border border-info">
    <?php
      include("../home/homeHeader.html");
      include("../home/editSupportSql.php");
    ?><br>
  <form class="container" method="POST">
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="firstName">First Name</label>
        <input type="text" class="form-control" name="firstName" id="firstName" placeholder="<?php echo $firstName;?>">
      </div>
      <div class="form-group col-md-4">
        <label for="secName">Second Name</label>
        <input type="text" name="secName" class="form-control" id="secName" placeholder="<?php echo $secName;?>">
      </div>
      <div class="form-group col-md-4">
        <label for="thirdName">Third Name</label>
        <input type="text" name="thirdName" id="thirdName" class="form-control" placeholder="<?php echo $thirdName;?>">
      </div>
    </div>
    <div>
    <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputEmail4">ID Number</label>
      <input type="integer" name="idNo" class="form-control" id="inputEmail4" placeholder="<?php echo $idNo;?>">
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Email</label>
      <input type="email" name="email" class="form-control" id="inputPassword4" placeholder="<?php echo $email;?>">
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Phone Number</label>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">07</span>
        </div>
        <input type="text" name="phoneNo" class="form-control" id="inputPassword4" placeholder="<?php echo $phoneNo;?>">
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputCity">Sub-County</label>
      <input type="text" name="subCounty" class="form-control" id="inputCity" placeholder="<?php echo $subCounty;?>">
    </div>
    <div class="form-group col-md-4">
      <label for="inputCity">Division</label>
      <input type="text" name="division" class="form-control" id="inputCity" placeholder="<?php echo $division;?>">
    </div>
    <div class="form-group col-md-4">
      <label for="inputZip">Estate</label>
      <input type="text" name="estate" class="form-control" id="inputZip" placeholder="<?php echo $estate;?>">
    </div>
  </div><hr>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Employer</label>
      <input type="text" name="employer" class="form-control" id="inputCity" placeholder="<?php echo $employer;?>">
    </div>
    <div class="form-group col-md-6">
      <label for="inputCity">Occupation</label>
      <input type="text" name="occupation" class="form-control" id="inputCity" placeholder="<?php echo $occupation;?>">
    </div>
  </div><hr>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputCity"><b>Spouse: </b>First Name</label>
      <input type="text" name="spouseFirstName" class="form-control" id="inputCity" <?php echo $disabled;?> placeholder="<?php echo $spouseFirstName;?>">
    </div>
    <div class="form-group col-md-4">
      <label for="inputCity">Second Name</label>
      <input type="text" name="spouuseSecName" class="form-control" id="inputCity" <?php echo $disabled;?> placeholder="<?php echo $spouseSecName;?>">
    </div>
    <div class="form-group col-md-4">
      <label for="inputCity">Third Name</label>
      <input type="text" name="spouseThirdName" class="form-control" <?php echo $disabled;?> id="inputCity" placeholder="<?php echo $spouseThirdName;?>">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Id Number</label>
      <input type="text" name="spouseIdNos" class="form-control" id="inputCity" <?php echo $disabled;?> placeholder="<?php echo $spouseIdNo;?>">
    </div>
    <div class="form-group col-md-6">
      <label for="inputCity">Phone Number</label>
      <input type="text" name="spousePhoneNo" class="form-control" id="inputCity" <?php echo $disabled;?> placeholder="<?php echo $spousePhoneNo;?>">
    </div>
  </div><hr>
  <?php echo guarantor($guarantorInfo);?><hr>
  <?php echo assets($assets);?><hr>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check to update record
      </label>
    </div>
  </div>
  <button type="submit" name="done" class="btn btn-outline-dark">Done</button>
  <button type="submit" name="clear" class="btn btn-outline-dark">Clear(After payment)</button>
  <button type="submit" name="unclear" class="btn btn-outline-dark">Re-Clear(Payment not made)</button>
  </form>
</div><br>
</body>
</html>
