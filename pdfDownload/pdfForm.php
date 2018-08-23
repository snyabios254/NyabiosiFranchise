<?php
session_start();
$formNo = 6;
require_once("../dompdf/autoload.inc.php");
include("../include/conn.php");
#include("../include/bootstrapLinks.html");

$tableBorrower = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM borrowerInfo WHERE formNo = '$formNo'"));
$tableAssets = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM assets WHERE formNo = '$formNo'"));
$tableSpouse = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM spouseInfo WHERE formNo = '$formNo'"));
$tableLoans = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM loans WHERE formNo = '$formNo'"));
$tableGuarantors = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM guarantorInfo WHERE formNo = '$formNo'"));
// $tableSecurity = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM security WHERE formNo = '$formNo'"));

$sql = "SELECT * FROM guarantorInfo WHERE formNo = 5";
$result = mysqli_query($conn, $sql);
$data = '';

if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $data .= '
      <div><p>
        <span style=""><b>Name:</b> '.$row['firstName'].' '.$row['secName'].' '.$row['thirdName'].'</span>(ID No:'.$row['idNo'].')<br>
        <span style="padding-right: 39%"><b>Sign:</b>.........................</span> <b>Date</b>..........................
      </p></div>
    ';
  }
}

function loanReturn () {
  
}

include("wordsNum.php");

use Dompdf\Dompdf;
$firstName = $tableBorrower['firstName'];
$document = new Dompdf();

$html = '
<img src="credolinkLogo.png">
  <div style="">
    <div style="float: left;">
      <h1 style="line-height: 40%;">CREDOLINK FRANCHISE</h1>
      <h5 style="font-style: italic; font-align: center">Convinient, Efficient and Reliable.</h5>
    </div>
    <div style="float: right;">
      P.O. BOX 850-20202 MOLO,<br>
      Email: credolinkfranchise@gmail.com<br>
      Phone: 0729676802/0728082609
    </div>
  </div><br><br><br><br>
  <fieldset>
    <Legend><b>'.ucfirst($tableBorrower['secName']).' thirty days loan form.<b></legend>
    <div  style="float: left;">
      <p><b>Form number/Reciept number:</b> '.$formNo.'</p>
      <p><b>Full names:</b> '.strtoupper($tableBorrower['firstName']).' '.strtoupper($tableBorrower['secName']).' '.strtoupper($tableBorrower['thirdName']).'</p>
      <p><b>Phone number:</b> 07'.$tableBorrower['phoneNo'].'</p>
      <p><b>Loan amount: </b>'.$tableLoans['loanAmount'].' <span style="font-style: italic;">with 40% interest rate</span></p>
      <p><b>Sub-County: </b>'.strtoupper($tableBorrower['subCounty']).'</p>
      <p><b>Division: </b>'.strtoupper($tableBorrower['division']).'</p>
      <p><b>Spouse name:</b> '.strtoupper($tableSpouse['firstName']).' '.strtoupper($tableSpouse['secName']).' '.strtoupper($tableSpouse['thirdName']).'</p>
      <p><b>Spouse phone number: </b>'.$tableSpouse['phoneNo'].'</p>
    </div>
    <div style="float: right;">
      <p><b>Date and time:</b> '.$tableAssets['date'].'</p>
      <p><b>Id number:  </b>'.$tableBorrower['idNo'].'</p>
      <p><b>Email address: </b>'.strtolower($tableBorrower['email']).'</p>
      <p><b>Sign:</b> .........................................................</p>
      <p><b>Estate: </b>'.strtoupper($tableBorrower['estate']).'</p>
      <p><b>Marital status: </b>'.strtoupper($tableBorrower['maritalStatus']).'</p>
      <p><b>Spouse ID number: </b>'.$tableSpouse['idNo'].'</p>
      <p><b>Spouse sign:</b> .........................................................</p>
    </div>
    <p>Storage fee of security item(s) is Ksh. 500/= per day.<br>Failure to pay the amount loaned plus interest within 30 days and 5 days grace period after and Credolink Frachise comes after you, you risk a Ksh. 5000/= fine.<br>
    I <span style="text-decoration: underline;"><b>'.strtoupper($tableBorrower['firstName']).' '.strtoupper($tableBorrower['secName']).' '.strtoupper($tableBorrower['thirdName']).'</b></span> ID number <span style="text-decoration: underline;"><b>'.$tableBorrower['idNo'].'</b></span> irrevocably assigns all rights to title and interest in the assets listed below to Credolink Frachise. Credolink Franchise put into consideration to retain the security enlisted to the advocates of Credolink Frachise for security purpose which may include Log books, title deeds etc. Other requirements to acquire a loan also include: ID, passport, KRA pin. The loan will be paid through the bank account of Credolink Frachise. Failure to pay loan given will attract interest of upto 25% within the first day of default.</p>
    <p>Sign........................</p>
    <p><span style="text-decoration: underline;"><b>Spouse/Guardian consent</b></span><br>
    I '.strtoupper($tableSpouse['firstName']).' '.strtoupper($tableSpouse['secName']).' '.strtoupper($tableSpouse['thirdName']).' spouse to '.strtoupper($tableBorrower['firstName']).' '.strtoupper($tableBorrower['secName']).' '.strtoupper($tableBorrower['thirdName']).' certify that I have given consent to the borrower to offer the above assets as security for the loan whose conditions have been fully explained to me and I have no objection for tha same to be sold to satify the loan incase the borrower defaults.<br><b>Spouse/Guardian</b><br/><span style="padding-right: 3rem;">ID number: '.$tableSpouse['idNo'].'</span> <span><b>Sign:</b>........................................</span>
    </p>
  </fieldset>
  <div style="page-break-before: always;">
    <fieldset>
      <legend><span><b>Guarantors</b></span><br></legend>
      <ol>
        <li>The guarantor in this agreement shall be defined as joint borrowers.</li>
        <li>I commint to fully pay the defaulted loan if the borrower defaults.</li>
      </ol>
      <p>'.$data.'</p>
      <p><span style="text-decoration: underline;"><b>BORROWER DECLARATION</b><span></p>
      <p>I '.strtoupper($tableBorrower['firstName']).' '.strtoupper($tableBorrower['secName']).' '.strtoupper($tableBorrower['thirdName']).' the borrower in event of default agree to immediately pay all  costs by Credolink Enterprice Ltd in enforcing this agreement. I agree to abide to all the rules, policies and regulations of Credolink Enterprice Ltd. I agree to pay my total loan of Ksh. ..........(put amount here auto calculate) in words'.convert_number_to_words().'</p>
    </fieldset>
  </div>
';

$document->loadHtml($html);
$document->setPaper('A4', 'potrait');
$document->render();
$document->stream("'.$formNo.'", array("Attachment"=>0));
