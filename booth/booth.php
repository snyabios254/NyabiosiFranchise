<!DOCTYPE html>
<html>
<head>
  <title>Take a photo</title>
  <?php
  include("../include/bootstrapLinks.html");
  include("../include/conn.php");
  ?>
  <style></style>
</head>
<body class="jumbotron container">
  <?php include("../include/header.html");?>
  <div class="form-row">
    <div class="form-group col-lg border border-info rounded">
      <video id="video" width="500" height="300" src=""></video><br>
      <a href="#" id="capture" class="btn btn-info btn-block">Take photo</a>
    </div>
    <div class="form-group col-lg border border-info rounded">
      <canvas id="canvas" width="500" height="300">
      <img scr="#" class="figure-img img-fluid rounded" id="photo"></canvas>
      <button class="btn btn-info btn-block" href="#">Next >></button>
    </div>
  </div>
  <script src="photo.js"></script>
</body>
</html>
