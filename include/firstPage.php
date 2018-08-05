<?php
$firstName = $secName = $thirdName = $subCounty = $division = $estate = $idNo = $email = $phoneNo = $maritalStatus = "";
$firstNameErr = $secNameErr = $estateErr = $thirdNameErr = $subCountyErr = $divisionErr = $idNoErr = $emailError = $phoneNoErr = $maritalStatusErr = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (!empty($_POST['firstName'])) {
    $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
  } else {
    function firstName($firstNameErr) {
      $firstNameErr .= '
        <div class="alert alert-danger">Your first name is required.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>  </button>
        </div>
      ';
      return $firstNameErr;
    }
  }

  if (!empty($_POST['secName'])) {
    $secName = mysqli_real_escape_string($conn, $_POST['secName']);
  } else {
    function secName($secNameErr) {
      $secNameErr .= '
      <div class="alert alert-danger">Your second name is required.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>  </button>
      </div>
      ';
      return $secNameErr;
    }
  }

  if (!empty($_POST['thirdName'])) {
    $thirdName = mysqli_real_escape_string($conn, $_POST['thirdName']);
  } else {
    function thirdName($thirdNameErr) {
      $thirdNameErr = '
      <div class="alert alert-danger">Your third name is required.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>  </button>
      </div>
      ';
      return $thirdNameErr;
    }
  }

  if (!empty($_POST['subCounty'])) {
    $subCounty = mysqli_real_escape_string($conn, $_POST['subCounty']);
  } else {
    function subCounty($subCountyErr) {
      $subCountyErr .= '
      <div class="alert alert-danger">Enter name of Sub-County
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>  </button>
      </div>
      ';
      return $subCountyErr;
    }
  }

  if (!empty($_POST['division'])) {
    $division = mysqli_real_escape_string($conn, $_POST['division']);
  } else {
    function division($divisionErr) {
      $divisionErr .= '
      <div class="alert alert-danger">Enter name of the division
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>  </button>
      </div>
      ';
      return $divisionErr;
    }
  }

  if (!empty($_POST['estate'])) {
    $estate = mysqli_real_escape_string($conn, $_POST['estate']);
  } else {
    function estate($estateErr) {
      $estateErr .= '
      <div class="alert alert-danger">Enter name of your estate
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>  </button>
      </div>
      ';
      return $estateErr;
    }
  }

  if (!empty($_POST['idNo'])) {
    $idNo = mysqli_real_escape_string($conn, $_POST['idNo']);
    $idNoLen = mb_strlen($_POST['idNo']);
    if ($idNoLen != 8) {
      #echo $idNoLen;
      $idNoErr .= '
      <div class="alert alert-danger">The ID Number is invalid<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>  </button>
      </div>
      ';
    } else {
      #echo "problem id".mysqli_error($conn);
    }
  } else {
    function idNo($idNoErr) {
      $idNoErr .= '
      <div class="alert alert-danger">Please enter your ID number.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>  </button>
      </div>
      ';
      return $idNoErr;
    }
  }

  if (!empty($_POST['email'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
  } else {
    function emailError($emailError) {
      $emailError .= '
      <div class="alert alert-danger">Please enter your ID number.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>  </button>
      </div>
      ';
      return $emailError;
    }
  }

  if (!empty($_POST['phoneNo'])) {
    $phoneNo = mysqli_real_escape_string($conn, $_POST['phoneNo']);
    if (mb_strlen($phoneNo) != 9) {
      $phoneNoErr .= '
      <div class="alert alert-danger">Invalid phone number.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>  </button>
      </div>
      ';
    }
  } else {
    function phoneNo($phoneNoErr) {
      $phoneNoErr .= '
      <div class="alert alert-danger">Please enter your phone number.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>  </button>
      </div>
      ';
      return $phoneNoErr;
    }
  }

  if (!empty($_POST['maritalStatus'])) {
    $maritalStatus = mysqli_real_escape_string($conn, $_POST['maritalStatus']);
    if ($maritalStatus == "married" && isset($_POST['maritalStatus'])) {

    }
  } else {
    function maritalStatus($maritalStatusErr) {
      $maritalStatusErr .= '
      <div class="col-lg">
      <div class="alert alert-danger">Marital status is required.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>  </button>
      </div>
      </div><div class="col-lg"></div><div class="col-lg"></div>
      ';
      return $maritalStatusErr;
    }
  }
}
