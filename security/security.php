<!DOCTYPE html>
<html>
<head>
<title>CredoLink Frachise</title>
<?php include("../include/bootstrapLinks.html");
  include("../include/conn.php");
  include("securityDB.php");
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
          <td><select class="custom-select <?php echo  $year1Err;?>" name="year1" value="<?echo $year1;?>"><?php include("select.html");?></select></td>
          <td><input class="form-control <?php echo $serialNo1Err;?>" type="text" name="serialNo1" value="<?php echo $serialNo1?>"></td>
          <td><div class="input-group input-group-default mb-3"><div class="input-group-prepend"><span class="input-group-text">Ksh.</span></div><input class="form-control <?php echo $buyPrice1Err;?>" name="buyPrice1" type="number" aria-label="With textarea" value="<?php echo $buyPrice1;?>"></div></td>
          <td><div class="input-group input-group-default mb-3"><div class="input-group-prepend"><span class="input-group-text">Ksh.</span></div><input class="form-control <?php echo $sellPrice1Err;?>" type="number" name="sellPrice1" value="<?php echo $sellPrice1;?>" aria-label="With textarea"></div></td>
        </tr>
        <tr>
          <th scope="row">2. </th>
          <td><input class="form-control"></td>
          <td><input class="form-control"></td>
          <td><input class="form-control"></td>
          <td><div class="input-group input-group-default mb-3"><div class="input-group-prepend"><span class="input-group-text">Ksh.</span></div><input class="form-control" aria-label="With textarea"></div></td>
          <td><div class="input-group input-group-default mb-3"><div class="input-group-prepend"><span class="input-group-text">Ksh.</span></div><input class="form-control" aria-label="With textarea"></div></td>
        </tr>
        <tr>
          <th scope="row">3. </th>
          <td><input class="form-control"></td>
          <td><input class="form-control"></td>
          <td><input class="form-control"></td>
          <td><div class="input-group input-group-default mb-3"><div class="input-group-prepend"><span class="input-group-text">Ksh.</span></div><input class="form-control" aria-label="With textarea"></div></td>
          <td><div class="input-group input-group-default mb-3"><div class="input-group-prepend"><span class="input-group-text">Ksh.</span></div><input class="form-control" aria-label="With textarea"></div></td>
        </tr>
        <tr>
          <th scope="row">4. </th>
          <td><input class="form-control"></td>
          <td><input class="form-control"></td>
          <td><input class="form-control"></td>
          <td><div class="input-group input-group-default mb-3"><div class="input-group-prepend"><span class="input-group-text">Ksh.</span></div><input class="form-control" aria-label="With textarea"></div></td>
          <td><div class="input-group input-group-default mb-3"><div class="input-group-prepend"><span class="input-group-text">Ksh.</span></div><input class="form-control" aria-label="With textarea"></div></td>
        </tr>
        <tr>
          <th scope="row">5. </th>
          <td><input class="form-control"></td>
          <td><input class="form-control"></td>
          <td><input class="form-control"></td>
          <td><div class="input-group input-group-default mb-3"><div class="input-group-prepend"><span class="input-group-text">Ksh.</span></div><input class="form-control" aria-label="With textarea"></div></td>
          <td><div class="input-group input-group-default mb-3"><div class="input-group-prepend"><span class="input-group-text">Ksh.</span></div><input class="form-control" aria-label="With textarea"></div></td>
        </tr>
      </tbody>
    </table>
    <div class="form-row">
      <div class="form-group col-lg">
        <label for="loanAmount">Loan amount:</label>
        <div class="input-group input-group-default mb-3"><div class="input-group-prepend"><span class="input-group-text">Ksh.</span></div><input class="form-control" name="formAmount" aria-label="With textarea"></div>
      </div>
      <div class="form-group col-lg">
        <div class="custom-control custom-checkbox float-right">
          <input type="checkbox" name="rateCheck" value="rateCheck" class="custom-control-input" id="rateCheck">
          <label class="custom-control-label" for="rateCheck">Interest rate is 40%.</label>
        </div><br>
        <button class="btn btn-outline-dark float-right" type="submit" name="submit">Finish</button>
      </div>
    </div>
  </form>
</body>
</html>
