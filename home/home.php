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
  <?php include("borrower.php");?>
  <div class="bg-light rounded border border-info">
    <header>
      <img class="img-fluid center" style="" src="../images/credolinkLogo.jpg">
    </header>
    <div class="container">
    <div class="row">
      <div class="col-lg-2">
        <button>Know</button>
      </div>
      <div class="col-lg-10 row">
        <?php echo $allBorrowers;?>
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
