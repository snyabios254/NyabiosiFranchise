<!DOCTYPE html>
<html>
<head>
  <title>Credolink Frachise</title>
  <?php
  include("../include/conn.php");
  include("../include/bootstrapLinks.html");
  ?>
</head>
<body class="bg-secondary container bg-color-white">
  <?php
  include("../loanForms/currentLoansSql.php");
  include("../home/borrower.php");
  ?>
  <div class="bg-light rounded border border-info">
    <?php include("../home/homeHeader.html");?><br>
    <!-- <script type="text/javascript" src="javas/scroll.js">
    </script> -->
    <div class="container">
    <div class="row">
      <div class="col-lg-2">
        <div class="btn-group-vertical btn-block" role="group" aria-label="...">
          <a href="../loanForms/currentLoans.php" type="button" class="btn btn-block btn-outline-dark">Current loans</a>
          <a href="../loanForms/clearedLoans.php" type="button" class="btn btn-block btn-outline-dark">Cleared loans</a>
          <a href="../loanForms/overdueLoans.php" type="button" class="btn btn-block btn-outline-dark">Overdue loans</a>
          <a href="../loanForms/defaultedLoans.php" type="button" class="btn btn-block btn-outline-dark">Defaulted loans</a>
        </div>
      </div>
      <div class="col-lg-10 row">
        <?php

        if (!isset($_POST['submit']) || empty($search)) {
          echo $searchErr1;
          echo $allBorrowers;
        } else {
          echo $searchRes;
        }
        ?>
      </div>
    </div></div><hr>
    <footer style="padding: 0.5rem;">
      <div class="row">
        <div class="col-lg">P.o. box 850-20202 Molo,</div><br>
        <div class="col-lg">Email: credolinkfranchise@gmail.com</div><br>
        <div class="col-lg">Phone: 0729676802/0728082609</div></p>
      </div>
      <!-- <p style="text-align: right;">@Credolink Franchise</p> -->
    </footer>
  </div>
</body>
</html>
