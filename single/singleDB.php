<?php
$spFirstName = $spSecName = $spThirdName = $spIdNo = $spPhoneNo = '';
$spFirstNameErr = $spSecNameErr = $spThirdNameErr = $spIdNoErr = $spPhoneNoErr = $grIdNoErr2 = $gr2IdNoErr2 = $grPhoneNoErr2 = $gr2PhoneNoErr2 = '';

$grFirstName = $grSecName = $grThirdName = $grIdNo = $grPhoneNo = $gr2FirstName = $gr2SecName = $gr2ThirdName = $gr2IdNo = $gr2PhoneNo = '';
$grFirstNameErr = $grSecNameErr = $grThirdNameErr = $grIdNoErr = $grPhoneNoErr = $gr2FirstNameErr = $gr2SecNameErr = $gr2ThirdNameErr = $gr2IdNoErr = $gr2PhoneNoErr = '';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  if (!empty($_POST['spFirstName'])) {
    $spFirstName = mysqli_real_escape_string($conn, $_POST['spFirstName']);
  } else {
    $spFirstNameErr .= '
    <div class="alert alert-danger">Spouse first name is required.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
    ';
  }

  if (!empty($_POST['spSecName'])) {
    $spSecName = mysqli_real_escape_string($conn, $_POST['spSecName']);
  } else {
    $spSecNameErr .= '
    <div class="alert alert-danger">Spouse second name is required.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
    ';
  }

  if (!empty($_POST['spThirdName'])) {
    $spThirdName = mysqli_real_escape_string($conn, $_POST['spThirdName']);
  } else {
    $spThirdNameErr .= '
    <div class="alert alert-danger">Spouse third name is required.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
    ';
  }

  if (!empty($_POST['spIdNo'])) {
    $spIdNo = mysqli_real_escape_string($conn, $_POST['spIdNo']);
    if (mb_strlen($spIdNo) != 8) {
      $spIdNoErr2 .= '
      <div class="alert alert-danger">Invalid ID number entered.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      ';
    }
  } else {
    $spIdNoErr .= '
    <div class="alert alert-danger">Spouse ID number is required.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
    ';
  }

  if (!empty($_POST['spPhoneNo'])) {
    $spPhoneNo = mysqli_real_escape_string($conn, $_POST['spPhoneNo']);
    if (mb_strlen($spIdNo) != 8) {
      $spPhoneNoErr2 .= '
      <div class="alert alert-danger">Invalid phone number entered.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      ';
    }
  } else {
    $spPhoneNoErr .= '
    <div class="alert alert-danger">Spouse phone number is required.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
    ';
  }

  ###################################

  if (!empty($_POST['grFirstName'])) {
    $grFirstName = mysqli_real_escape_string($conn, $_POST['grFirstName']);
  } else {
    $grFirstNameErr .= '
    <div class="alert alert-danger">Guarantor first name is required.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
    ';
  }

  if (!empty($_POST['grSecName'])) {
    $grSecName = mysqli_real_escape_string($conn, $_POST['grSecName']);
  } else {
    $grSecNameErr .= '
    <div class="alert alert-danger">Guarantor second name is required.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
    ';
  }

  if (!empty($_POST['grThirdName'])) {
    $grThirdName = mysqli_real_escape_string($conn, $_POST['grThirdName']);
  } else {
    $grThirdNameErr .= '
    <div class="alert alert-danger">Guarantor third name is required.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
    ';
  }

  if (!empty($_POST['grIdNo'])) {
    $grIdNo = mysqli_real_escape_string($conn, $_POST['grIdNo']);
    if (mb_strlen($grIdNo) != 8) {
      $grIdNoErr2 .= '
      <div class="alert alert-danger">Invalid ID number.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden=true>&times;</span></button>
      </div>
      ';
    }
  } else {
    $grIdNoErr .= '
    <div class="alert alert-danger">Guarantor ID number is required.    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
    ';
  }

  if (!empty($_POST['grPhoneNo'])) {
    $grPhoneNo = mysqli_real_escape_string($conn, $_POST['grPhoneNo']);
    if (mb_strlen($grPhoneNo) != 8) {
      $grPhoneNoErr2 .=  '
      <div class="alert alert-danger">Invalid phone number.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden=true>&times;</span></button>
      </div>
      ';
    }
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
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
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
    if (mb_strlen($gr2IdNo) != 8) {
      $gr2IdNoErr2 .= '
      <div class="alert alert-danger">Invalid ID number.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden=true>&times;</span></button>
      </div>
      ';
    }
  } else {
    $gr2IdNoErr .= '
    <div class="alert alert-danger">Guarantor two ID number is required.    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>  </button>
    </div>
    ';
  }

  if (!empty($_POST['gr2PhoneNo'])) {
    $gr2PhoneNo = mysqli_real_escape_string($conn, $_POST['gr2PhoneNo']);
    if (mb_strlen($gr2PhoneNo) != 8) {
      $gr2PhoneNoErr2 .=  '
      <div class="alert alert-danger">Invalid phone number.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden=true>&times;</span></button>
      </div>
      ';
    }
  } else {
    $gr2PhoneNoErr .= '
    <div class="alert alert-danger">Guarantor two phone number is required.    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>  </button>
    </div>
    ';
  }
}
