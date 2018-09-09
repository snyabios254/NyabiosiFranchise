<?php
$firstName = $secName = $thirdName = $subCounty = $division = $estate = $idNo = $email = $phoneNo = $maritalStatus = $employer = $occupation = "";
$firstNameErr = $secNameErr = $estateErr = $thirdNameErr = $subCountyErr = $divisionErr = $idNoErr = $emailError = $phoneNoErr = $maritalStatusErr = $employerErr = $occupationErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (!empty($_POST['firstName'])) {
    $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
  } else {
    $firstNameErr .= '
    <div class="alert alert-danger">Your first name is required.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>  </button>
    </div>
    ';
  }

  if (!empty($_POST['secName'])) {
    $secName = mysqli_real_escape_string($conn, $_POST['secName']);
  } else {
      $secNameErr .= '
      <div class="alert alert-danger">Your second name is required.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>  </button>
      </div>
      ';
  }

  if (!empty($_POST['thirdName'])) {
    $thirdName = mysqli_real_escape_string($conn, $_POST['thirdName']);
  } else {
      $thirdNameErr = '
      <div class="alert alert-danger">Your third name is required.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>  </button>
      </div>
      ';
  }

  if (!empty($_POST['subCounty'])) {
    $subCounty = mysqli_real_escape_string($conn, $_POST['subCounty']);
  } else {
      $subCountyErr .= '
      <div class="alert alert-danger">Enter name of Sub-County
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>  </button>
      </div>
      ';
  }

  if (!empty($_POST['division'])) {
    $division = mysqli_real_escape_string($conn, $_POST['division']);
  } else {
      $divisionErr .= '
      <div class="alert alert-danger">Enter name of the division
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>  </button>
      </div>
      ';
  }

  if (!empty($_POST['estate'])) {
    $estate = mysqli_real_escape_string($conn, $_POST['estate']);
  } else {
      $estateErr .= '
      <div class="alert alert-danger">Enter name of your estate
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>  </button>
      </div>
      ';
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
      $idNoErr .= '
      <div class="alert alert-danger">Please enter your ID number.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>  </button>
      </div>
      ';
  }

  if (!empty($_POST['email'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
  } else {
      $emailError .= '
      <div class="alert alert-danger">Please enter your ID number.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>  </button>
      </div>
      ';
  }

  if (!empty($_POST['phoneNo'])) {
    $phoneNo = mysqli_real_escape_string($conn, $_POST['phoneNo']);
    if (mb_strlen($phoneNo) != 8) {
      $phoneNoErr .= '
      <div class="alert alert-danger">Invalid phone number.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>  </button>
      </div>
      ';
    }
  } else {
      $phoneNoErr .= '
      <div class="alert alert-danger">Please enter your phone number.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>  </button>
      </div>
      ';
  }

  if (!empty($_POST['employer'])) {
    $employer = mysqli_real_escape_string($conn, $_POST['employer']);
  } else {
    $employerErr .= '
    <div class="alert alert-danger">Please enter your current employer.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
    ';
  }

  if (!empty($_POST['occupation'])) {
    $occupation = mysqli_real_escape_string($conn, $_POST['occupation']);
  } else {
    $occupationErr .= '
    <div class="alert alert-danger">Please enter your current occupation.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
    ';
  }

  if (!empty($_POST['maritalStatus'])) {
    $maritalStatus = mysqli_real_escape_string($conn, $_POST['maritalStatus']);
    if ($maritalStatus == "married" && isset($_POST['maritalStatus'])) {

    }
  } else {
      $maritalStatusErr .= '
      <div class="col-lg">
      <div class="alert alert-danger">Marital status is required.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>  </button>
      </div>
      </div><div class="col-lg"></div><div class="col-lg"></div>
      ';
  }

  $emailSql = mysqli_query($conn, "SELECT * FROM borrowerInfo WHERE email = '$email'");
  $idSql = mysqli_query($conn, "SELECT * FROM borrowerInfo WHERE idNo = '$idNo'");
  $emailNumRows = mysqli_num_rows($emailSql);
  $idNumRows = mysqli_num_rows($idSql);
  $emailNumRowsErr = $idNumrowsErr = '';

  if ($emailNumRows > 0) {
    $emailNumRowsErr .= '
    <div class="alert alert-danger">The email already exists. Try another one.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>  </button>
    </div>
    ';
  }

  if ($idNumRows > 0) {
    $idNumrowsErr .= '
    <div class="alert alert-danger">The ID number already exists.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>  </button>
    </div>
    ';
  } else {
    #echo "problem id".mysqli_error($conn);
  }
}
