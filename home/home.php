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
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../index1.php">New record</a>
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
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
    </header><br>
    <div class="container">
    <div class="row">
      <div class="col-lg-2">
        <div class="btn-group-vertical" role="group" aria-label="...">
          <button type="button" class="btn btn-outline-dark">Current loans</button>
          <button type="button" class="btn btn-outline-dark">Cleared loans</button>
          <button type="button" class="btn btn-outline-dark">Overdue loans</button>
          <button type="button" class="btn btn-outline-dark">Defaulted loans</button>
        </div>
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
