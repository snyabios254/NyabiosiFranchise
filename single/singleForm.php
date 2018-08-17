<?php $numRowsErr = ''; echo $numRowsErr;?>
<label class="badge badge-success">First guarantor information</label>
<div class="form-row">
  <div class="form-group col-lg">
    <label for="grFirstName">First Name:</label>
    <input type="text" name="grFirstName" id="grFirstName" class="form-control" value="<?php echo $grFirstName;?>"><br><?php echo $grFirstNameErr;?>
  </div>
  <div class="form-group col-lg">
    <label for="grSecName">Second Name:</label>
    <input type="text" name="grSecName" id="grSecName" class="form-control" value="<?php echo $grSecName;?>"><br><?php echo $grSecNameErr;?>
  </div>
  <div class="form-group col-lg">
    <label for="grThirdName">Third Name:</label>
    <input type="text" name="grThirdName" id="grThirdName" class="form-control" value="<?php echo $grThirdName;?>"><br><?php echo $grThirdNameErr;?>
  </div>
</div>
<div class="form-row">
  <div class="form-group col-lg">
    <label for="grIdNo">ID number:</label>
    <input type="text" name="grIdNo" id="grIdNo" class="form-control" value="<?php echo $grIdNo;?>"><br><?php echo $grIdNoErr;?>
  </div>
  <div class="form-group col-lg">
    <label for="grPhoneNo">Phone number:</label>
    <div class="input-group input-group-default mb-3"><div class="input-group-prepend"><span class="input-group-text">07</span></div><input type="text" name="grPhoneNo" id="grPhoneNo" class="form-control" value="<?php echo $grPhoneNo;?>"><br><?php echo $grPhoneNoErr;?></div>
  </div>
</div>
<p>Click <a href="#gr2Collapse" data-toggle="collapse">here</a> to enter guarantor two information(optional).</p>
<div class="collapse" id="gr2Collapse">
  <label class="badge badge-success">Second guarantor information(optional)</label>
  <div class="form-row">
    <div class="form-group col-lg">
      <label for="gr2FirstName">First Name:</label>
      <input type="text" name="gr2FirstName" id="gr2FirstName" class="form-control" value="<?php echo $gr2FirstName;?>"><br><?php echo $gr2FirstNameErr;?>
    </div>
    <div class="form-group col-lg">
      <label for="gr2SecName">Second Name:</label>
      <input type="text" name="gr2SecName" id="gr2SecName" class="form-control" value="<?php echo $gr2SecName;?>"><br><?php echo $gr2SecNameErr;?>
    </div>
    <div class="form-group col-lg">
      <label for="gr2ThirdName">Third Name:</label>
      <input type="text" name="gr2ThirdName" id="gr2ThirdName" class="form-control" value="<?php echo $gr2ThirdName;?>"><br><?php echo $gr2ThirdNameErr;?>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-lg">
      <label for="gr2IdNo">ID number:</label>
      <input type="text" name="gr2IdNo" id="gr2IdNo" class="form-control" value="<?php echo $gr2IdNo;?>"><br><?php echo $gr2IdNoErr;?>
    </div>
    <div class="form-group col-lg">
      <label for="gr2PhoneNo">Phone number:</label>
      <div class="input-group input-group-default mb-3"><div class="input-group-prepend"><span class="input-group-text">07</span></div><input type="text" name="gr2PhoneNo" id="gr2PhoneNo" class="form-control" value="<?php echo $gr2PhoneNo;?>"></div><?php echo $gr2PhoneNoErr;?>
    </div>
  </div>
</div>
<button type="submit" class="btn btn-outline-dark float-right" name="submit">Next >></button>
