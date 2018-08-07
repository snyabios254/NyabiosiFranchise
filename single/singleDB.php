<?php
$grFirstName = $grSecName = $grThirdName = $grIdNo = $grPhoneNo = $gr2FirstName = $gr2SecName = $gr2ThirdName = $gr2IdNo = $gr2PhoneNo = '';
$grFirstNameErr = $grSecNameErr = $grThirdNameErr = $grIdNoErr = $grPhoneNoErr = $gr2FirstNameErr = $gr2SecNameErr = $gr2ThirdNameErr = $gr2IdNoErr = $gr2PhoneNoErr = '';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  if (!empty($_POST['grFirstName'])) {
    $grFirstName = mysqli_real_escape_string($conn, $_POST['grFirstName']);
  } else {
    $grFirstNameErr .= '
    <div class="alert alert-danger">Guarantor first name is required.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>  </button>
    </div>
    ';
  }

  if (!empty($_POST['grSecName'])) {
    $grSecName = mysqli_real_escape_string($conn, $_POST['grSecName']);
  } else {
    $grSecNameErr .= '
    <div class="alert alert-danger">Guarantor second name is required.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>  </button>
    </div>
    ';
  }

  if (!empty($_POST['grThirdName'])) {
    $grThirdName = mysqli_real_escape_string($conn, $_POST['grThirdName']);
  } else {
    $grThirdNameErr .= '
    <div class="alert alert-danger">Guarantor third name is required.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>  </button>
    </div>
    ';
  }

  if (!empty($_POST['grIdNo'])) {
    $grIdNo = mysqli_real_escape_string($conn, $_POST['grIdNo']);
  } else {
    $grIdNoErr .= '
    <div class="alert alert-danger">Guarantor ID number is required.    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>  </button>
    </div>
    ';
  }

  if (!empty($_POST['grPhoneNo'])) {
    $grPhoneNo = mysqli_real_escape_string($conn, $_POST['grPhoneNo']);
  } else {
    $grPhoneNoErr .= '
    <div class="alert alert-danger">Guarantor phone number is required.    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>  </button>
    </div>
    ';
  }

  if (!empty($_POST['gr2FirstName'])) {
    $gr2FirstName = mysqli_real_escape_string($conn, $_POST['gr2FirstName']);
  } else {
    $gr2FirstNameErr .= '
    <div class="alert alert-danger">Guarantor two first name is required.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>  </button>
    </div>
    ';
  }

  if (!empty($_POST['gr2SecName'])) {
    $gr2SecName = mysqli_real_escape_string($conn, $_POST['gr2SecName']);
  } else {
    $gr2SecNameErr .= '
    <div class="alert alert-danger">Guarantor two second name is required.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>  </button>
    </div>
    ';
  }

  if (!empty($_POST['gr2ThirdName'])) {
    $gr2ThirdName = mysqli_real_escape_string($conn, $_POST['gr2ThirdName']);
  } else {
    $gr2ThirdNameErr .= '
    <div class="alert alert-danger">Guarantor two third name is required.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>  </button>
    </div>
    ';
  }

  if (!empty($_POST['gr2IdNo'])) {
    $gr2IdNo = mysqli_real_escape_string($conn, $_POST['gr2IdNo']);
  } else {
    $gr2IdNoErr .= '
    <div class="alert alert-danger">Guarantor two ID number is required.    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>  </button>
    </div>
    ';
  }

  if (!empty($_POST['gr2PhoneNo'])) {
    $gr2PhoneNo = mysqli_real_escape_string($conn, $_POST['gr2PhoneNo']);
  } else {
    $gr2PhoneNoErr .= '
    <div class="alert alert-danger">Guarantor two phone number is required.    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>  </button>
    </div>
    ';
  }
}
