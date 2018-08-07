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
  <div class="booth">
    <video id="video" width="400" height="300" src=""></video><br>
    <a href="#" id="capture" class="captureButton">Take photo</a><br>
    <canvas id="canvas" width="400" height="300"><img scr="#" id="photo"></canvas>
  </div>
  <script src="photo.js"></script>
</body>
</html>
