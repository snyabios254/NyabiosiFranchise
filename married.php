<!DOCTYPE html>
<html>
<head>
<title>CredoLink Frachise</title>
<?php
include("include/bootstrapLinks.html");
include("include/conn.php");
include("include/header.html");
?>
</head>
<body class="jumbotron container">
  <form method="POST">
    <label class="badge badge-success">Spouse information</label>
    <div class="form-row">
      <div class="form-group col-lg">
        <label for="spFirstName">First Name:</label>
        <input type="text" name="spFirstName" value="" id="spFirstName" class="form-control">
      </div>
      <div class="form-group col-lg">
        <label for="spSecName">Second Name:</label>
        <input type="text" name="spSecName" value="" id="spSecName" class="form-control">
      </div>
      <div class="form-group col-lg">
        <label for="spThirdName">Third Name:</label>
        <input type="text" name="spThirdName" value="" id="spThirdName" class="form-control">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-lg">
        <label for="spIdNo">ID number:</label>
        <input type="text" name="spIdNo" value="" id="spIdNo" class="form-control">
      </div>
      <div class="form-group col-lg">
        <label for="spPhoneNo">Phone number:</label>
        <input type="text" name="spPhoneNo" value="" id="spPhoneNo" class="form-control">
      </div>
    </div>
    <label class="badge badge-success">First guarantor information</label>
    <div class="form-row">
      <div class="form-group col-lg">
        <label for="grFirstName">First Name:</label>
        <input type="text" name="grFirstName" value="" id="grFirstName" class="form-control">
      </div>
      <div class="form-group col-lg">
        <label for="grSecName">Second Name:</label>
        <input type="text" name="grSecName" value="" id="grSecName" class="form-control">
      </div>
      <div class="form-group col-lg">
        <label for="grThirdName">Third Name:</label>
        <input type="text" name="grThirdName" value="" id="grThirdName" class="form-control">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-lg">
        <label for="grIdNo">ID number:</label>
        <input type="text" name="grIdNo" value="" id="grIdNo" class="form-control">
      </div>
      <div class="form-group col-lg">
        <label for="grPhoneNo">Phone number:</label>
        <input type="text" name="grPhoneNo" value="" id="grPhoneNo" class="form-control">
      </div>
    </div>
    <p>Click <a href="#">here</a> to enter guarantor two information(optional).</p>
    <button type="submit" class="btn btn-outline-dark float-right" name="submit">Next >></button>
  </form>
</body>
</html>
