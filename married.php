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
    <div class="form-row">
      <div class="form-group col-lg">
        <p>Click <a href="#gr2Info" data-toggle="collapse">here</a> to enter guarantor two information(optional).</p>
      </div>
      <div class="form-group col-lg">
        <button type="submit" class="btn btn-outline-dark float-right" name="submit">Next >></button>
      </div>
    </div>
    <div id="gr2Info" class="collapse">
      <label class="badge badge-success">Second guarantor information</label>
      <div class="form-row">
        <div class="form-group col-lg">
          <label for="gr2FirstName">First Name:</label>
          <input type="text" name="gr2FirstName" value="" id="gr2FirstName" class="form-control">
        </div>
        <div class="form-group col-lg">
          <label for="gr2SecName">Second Name:</label>
          <input type="text" name="gr2SecName" value="" id="gr2SecName" class="form-control">
        </div>
        <div class="form-group col-lg">
          <label for="gr2ThirdName">Third Name:</label>
          <input type="text" name="gr2ThirdName" value="" id="gr2ThirdName" class="form-control">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-lg">
          <label for="gr2IdNo">ID number:</label>
          <input type="text" name="gr2IdNo" value="" id="gr2IdNo" class="form-control">
        </div>
        <div class="form-group col-lg">
          <label for="gr2PhoneNo">Phone number:</label>
          <input type="text" name="gr2PhoneNo" value="" id="gr2PhoneNo" class="form-control">
        </div>
      </div>
    </div>
  </form>
</body>
</html>
