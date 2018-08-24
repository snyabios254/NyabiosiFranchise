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

function loanReturn($tableLoans) {
  $num = $tableLoans['loanAmount'];
  $amountReturn = 140/100 * $num;
  return $amountReturn;
}

function dataAdd($tableAssets) {
  $date = $tableAssets['date'];
  $finalDate = strtotime($date.' +30 days');
  $final = date("d-m-Y H:i:s", $finalDate);
  return $final;
}

function timeForm($tableAssets) {
  $date = $tableAssets['date'];
  $finalDate = strtotime($date.' +0 days');
  $final = date("d-m-Y H:i:s", $finalDate);
  return $final;
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
      <p>I '.strtoupper($tableBorrower['firstName']).' '.strtoupper($tableBorrower['secName']).' '.strtoupper($tableBorrower['thirdName']).' the borrower in event of default agree to immediately pay all  costs by Credolink Enterprice Ltd in enforcing this agreement. I agree to abide to all the rules, policies and regulations of Credolink Enterprice Ltd. I agree to pay my total loan of <b>Ksh. '.loanReturn($tableLoans).' </b>in words <b>'.convert_number_to_words(loanReturn($tableLoans)).' only</b>.</p>
      <p>Further I the borrower and my spouse where applicable have have hereby agreed and authorized Credolink Enterprise Ltd to sell the goods or property given as security by public auction through auctioneers who shall recover their costs and pay the outstanding amount and interest to the company.</p>
      <p>Date given to the borrower <b>'.timeForm($tableAssets).'</b><p>
      <p>The last date of return with 40% interest <b>'.dataAdd($tableAssets).'</b><p>
      <p><b>
      NB: IF EXCEEDING THE RETURN LIMIT I WILL BE PAYING 25% EACH DAY.
      <ul>
        <li>The borrowed amount must be deposited before 4.00 pm. If not it will attract an interest rate of 25% each day plus the total sum.</li>
        <li>All amounts that belong to Credolin Enterprise Ltd must be deposited to our account 5040224805(Imarisha account Keringet/Kericho or Family Bank Account 083000019596).</li>
        <li>Paying in slip to be handed to our secretary in our office.</li>
      </ul>
      </b></p>
    </fieldset>
  </div>
  <div style="page-break-before: always;">
    <p><b>THIS IS FOR OFFICIAL USE ONLY<br>SUPERVISOR COMMITTEE ONLY</b></p>
    <p>On behalf of Credolink Enterprise Ltd, we hereby affirm that the borrower has shown to us the assets and also provided title documents and we have physical inspected the assets listed above and ascertained their approximate value and marketablility and that they belong to the borrwer and that the spouse/guardian has given consent to this loan.</p>
    <p>We have also in our possession of the documents which we will return to the borrower after the loan is cleared.</p>
    Signed by:-<br><br><span style="padding-right: 33px;">1<sup>st</sup> Director...................</span><span style="padding-right: 33px;">2<sup>nd</sup> Director...................</span><span>3<sup>rd</sup> Director...................<span>
    <p>
      <span><b>Management committee</b><span>
      <p>Loan amount '.$tableLoans['loanAmount'].'<br>Duration(months) 1 (one)<br>Interest rate 40%<br>Date of 1<sup>st</sup> borrowing<br>Date of last return ..................................</p>
      <p><b>DIRECTORS
        <ol>
          <li>HENRY NYABIOSI NYABIOSI (TELL: 0729676802) ........................................</li>
          <li>MACHARIA MATENA (TELL: 0723839792) .................................</li>
          <li>EVANS NYANETI (TEL: 0728082609) .......................................</li>
        </ol>
      </b></p>
      <p><b>KERINGET OFFICE
        <ol>DAISY CHELANGAT ID 32078402 (0702686034) ........................</ol>
        <ol>CHRISTOPHER RONO ID 146333384 (0729365452) ......................</ol>
      </b></p>
      <P><b>COMMITTEE MEMBERS
        <ul>
          <li>MONICA OMURWA: .........................</li>
          <li>CHARLES NDEGE: .........................</li>
          <li>VIRGINIA WAMAITHA: ............................</li>
          <li>KEN ANDREW ONYANGA: ............................</li>
        </ul>
      </b></P>
    </p>
    <p><b>Half of the loan form application amount will be deducted from your loan application form if you fill this form without security.</b>
      <ul>
        <li>Loan application form is Ksh. 500</li>
        <li>The amount should be paid before your form is processed.</li>
      </ul>
    </p>
  </div>
  <div style="page-break-before: always;">
    <p style="text-align: center;"><b>REPUBLIC OF KENYA<br>IN THE MATTER OF THE OATHS AND STATUTORY DECLARATIONS ACT<br>(CHAPTER 15 LAWS OF KENYA)<br><br><span style="text-decoration: underline;">AFFIDAVIT</span></b></p>
    <p>I <span style="text-decoration: underline;"><b>'.strtoupper($tableBorrower['firstName']).' '.strtoupper($tableBorrower['secName']).' '.strtoupper($tableBorrower['thirdName']).'</b><b></span> of National Identification Number <b>'.$tableBorrower['idNo'].'</b>, Tel: <b>'.$tableBorrower['phoneNo'].'</b> in the republic of Kenya and make oath and state as follows:-</p>
    <ol>
      <li>Credolink Enterprise Ltd has agreed to lend money in accordance with the team of the loan agreement, assets, schedule and group guarantee all signed by me. I undertake to repay the entire amount of money plus all applicable fees, services charges, penalties and cost of recovery.</li>
      <li>In event of default of loan, I surrender security assets for sale by the way of private sale or public auction as listed in the asset schedul duly signed by me.</li>
      <li>I admint that, if I miss any payment due under this loan agreement the management committee of Credolink Enterprise Ltd or its agents may without further notice to me, immediately enter upon the land or promise where my assets are located and take  possession and sell security assets by private sale or public auction.</li>
      <li>I have authorized, consented that incase of motor vehicle or motor cycle the management committee is at liberty to have the motor vehicle or motor cycle impounded at the police station awaiting further advice or court order to have the asset sold or as per the loan agreement herein signed.</li>
      <li>The company is at liberty to sue me through their advocates to recover any loss or outstanding amount owed by me.</li>
      <li>I have consented to the auction stated in paragraph four(4) and five(5) of the affidavit.</li>
      <li>My spouse/guardian has consented to the actions stated in paragraph four(4) and five(5) of this affidavit.</li>
      <li>That whatever is deponed herein above is true to the best of our knowledge, information and belief.</li>
    </ol>
    <p><b>SWORN BY THE SAID<br><span style=""><b>'.strtoupper($tableBorrower['firstName']).' '.strtoupper($tableBorrower['secName']).' '.strtoupper($tableBorrower['thirdName']).'</b><b><br><br></span> THIS ............................. DAY OF ........................<br><br><span style="padding-right: 35%;">BEFORE ME</span><span>DEPONENTS ........................</span></b></p>
    <p><b>COMMISSIONER FOR OATHS</b></p>
    <p><span style="text-decoration: underline;"><b>DRAWN BY</b></span><br><br>T.O NYANGAU KEMUNTO & CO. ADVOCATE<br>COFFEE PLAZE 7<sup>th</sup> FLOOR ROOM 4<br>P.O BOX 13153-001000<br>NAIROBI<br>TELL: 0722900019</p>
  </div>
';

$document->loadHtml($html);
$document->setPaper('A4', 'potrait');
$document->render();
$document->stream("'.$formNo.'", array("Attachment"=>0));
