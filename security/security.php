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
  include("securityDB.php");
  include("securityConn.php");
?>
</head>
<body class="jumbotron container-fluid">
  <?php include("../include/header.html");?>
  <form method="POST">
    <table class="table border border-dark rounded">
      <thead class="thead-dark">
        <tr>
          <th scope="col">NO.</th>
          <th scope="col">Assets</th>
          <th scope="col">Year bought</th>
          <th scope="col">Serial number</th>
          <th scope="col">Buy price</th>
          <th scope="col">Approximate sell price</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1. </th>
          <td><input class="form-control <?php echo $assets1Err;?>" type="text" name="assets1" value="<?php echo $assets1;?>"></td>
          <td><select class="custom-select <?php echo  $year1Err;?>" name="year1" value="<?echo $year1;?>"><?php include("select/select1.php");?></select></td>
          <td><input class="form-control <?php echo $serialNo1Err;?>" type="text" name="serialNo1" value="<?php echo $serialNo1?>"></td>
          <td><div class="input-group input-group-default mb-3"><div class="input-group-prepend"><span class="input-group-text">Ksh.</span></div><input class="form-control <?php echo $buyPrice1Err;?>" name="buyPrice1" type="number" aria-label="With textarea" value="<?php echo $buyPrice1;?>"></div></td>
          <td><div class="input-group input-group-default mb-3"><div class="input-group-prepend"><span class="input-group-text">Ksh.</span></div><input class="form-control <?php echo $sellPrice1Err;?>" type="number" name="sellPrice1" value="<?php echo $sellPrice1;?>" aria-label="With textarea"></div></td>
        </tr>
        <tr>
          <th scope="row">2. </th>
          <td><input class="form-control <?php echo $assets2Err;?>" type="text" name="assets2" value="<?php echo $assets2;?>"></td>
          <td><select class="form-control custom-select <?php echo $year2Err;?>" type="number" name="year2" value="<?php echo $year2?>"><?php include("select/select2.php");?></select></td>
          <td><input class="form-control <?php echo $serialNo2Err;?>" type="text" name="serialNo2" value="<?php echo $serialNo2;?>"></td>
          <td><div class="input-group input-group-default mb-3"><div class="input-group-prepend"><span class="input-group-text">Ksh.</span></div><input class="form-control <?php echo $buyPrice2Err;?>" type="number" name="buyPrice2" value="<?php echo $buyPrice2?>" aria-label="With textarea"></div></td>
          <td><div class="input-group input-group-default mb-3"><div class="input-group-prepend"><span class="input-group-text">Ksh.</span></div><input name="sellPrice2" value="<?php echo $sellPrice2;?>" class="form-control <?php echo $sellPrice2Err;?>" aria-label="With textarea"></div></td>
        </tr>
        <tr>
          <th scope="row">3. </th>
          <td><input class="form-control <?php echo $assets3Err;?>" type="text" name="assets3" value="<?php echo $assets3;?>"></td>
          <td><select class="form-control custom-select <?php echo $year3Err;?>" type="number" name="year3" value="<?php echo $year3;?>"><?php include("select/select3.php");?></select></td>
          <td><input class="form-control <?php echo $serialNo3Err;?>" type="text" name="serialNo3" value="<?php echo $serialNo3;?>"></td>
          <td><div class="input-group input-group-default mb-3"><div class="input-group-prepend"><span class="input-group-text">Ksh.</span></div><input class="form-control <?php echo $buyPrice3Err;?>" aria-label="With textarea" type="number" name="buyPrice3" value="<?php echo $buyPrice3;?>"></div></td>
          <td><div class="input-group input-group-default mb-3"><div class="input-group-prepend"><span class="input-group-text">Ksh.</span></div><input class="form-control <?php echo $sellPrice3Err;?>" aria-label="With textarea" type="number" name="sellPrice3" value="<?php echo $sellPrice3;?>"></div></td>
        </tr>
        <tr>
          <th scope="row">4. </th>
          <td><input class="form-control <?php echo $assets4Err;?>" type="text" name="assets4" value="<?php echo $assets4;?>"></td>
          <td><select class="form-control custom-select <?php echo $year4Err;?>" type="number" name="year4" value="<?php echo $year4;?>"><?php include("select/select4.php");?></select></td>
          <td><input class="form-control <?php echo $serialNo4Err;?>" type="text" name="serialNo4" value="<?php echo $serialNo4;?>"></td>
          <td><div class="input-group input-group-default mb-3"><div class="input-group-prepend"><span class="input-group-text">Ksh.</span></div><input class="form-control <?php echo $buyPrice4Err;?>" type="number" name="buyPrice4" value="<?php echo $buyPrice4;?>" aria-label="With textarea"></div></td>
          <td><div class="input-group input-group-default mb-3"><div class="input-group-prepend"><span class="input-group-text">Ksh.</span></div><input class="form-control <?php echo $sellPrice4Err;?>" aria-label="With textarea" type="number" name="sellPrice4" value="<?php echo $sellPrice4;?>"></div></td>
        </tr>
        <tr>
          <th scope="row">5. </th>
          <td><input class="form-control <?php echo $assets5Err;?>" name="assets5" value="<?php echo $assets5;?>" type="text"></td>
          <td><select class="form-control custom-select <?php echo $year5Err;?>" name="year5" value="<?php echo $year5;?>" type="number"><?php include("select/select5.php");?></select></td>
          <td><input class="form-control <?php echo $serialNo5Err;?>" name="serialNo5" type="text" value="<?php echo $serialNo5;?>"></td>
          <td><div class="input-group input-group-default mb-3"><div class="input-group-prepend"><span class="input-group-text">Ksh.</span></div><input class="form-control <?php echo $buyPrice5Err;?>" aria-label="With textarea" name="buyPrice5" type="number" value="<?php echo $buyPrice5;?>"></div></td>
          <td><div class="input-group input-group-default mb-3"><div class="input-group-prepend"><span class="input-group-text">Ksh.</span></div><input class="form-control <?php echo $sellPrice5Err;?>" name="sellPrice5" type="number" value="<?php echo $sellPrice5;?>" aria-label="With textarea"></div></td>
        </tr>
      </tbody>
    </table>
    <?php echo $rateCheckErr2;?>
    <div class="form-row">
      <div class="form-group col-lg">
        <label for="loanAmount">Loan amount:</label>
        <div class="input-group input-group-default mb-3"><div class="input-group-prepend"><span class="input-group-text">Ksh.</span></div><input class="form-control <?php echo $loanAmountErr;?>" type="number" name="loanAmount" aria-label="With textarea" value="<?php echo $loanAmount;?>"></div>
      </div>
      <div class="form-group col-lg">
        <button class="btn btn-outline-dark float-right" type="submit" name="finish">Finish</button>
      </div>
    </div>
  </form>
</body>
</html>
