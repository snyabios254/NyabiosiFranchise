<!DOCTYPE html>
<html>
<head>
  <title>Cleared loans</title>
  <?php
  include("../include/conn.php");
  include("../include/bootstrapLinks.html");
  ?>
</head>
<body class="bg-secondary container bg-color-white">
  <div class="bg-light rounded border border-info">
    <?php
    include("../home/homeHeader.html");
    include("currentLoansSql.php");
    echo $clearedLoans;
    ?>
  </div>
</body>
</html>
