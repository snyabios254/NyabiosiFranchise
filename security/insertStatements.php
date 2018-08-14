<?php
$assets1NumRows = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM assets WHERE serialNo = '$serialNo1'"));

$assets1Sql = "INSERT INTO assets (formNo, asset, purchaseYear, serialNo, buyPrice, sellPrice) VALUES ('$formNo', '$assets1', '$year1', '$serialNo1', '$buyPrice1', '$sellPrice1')";

$assets2NumRows = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM assets WHERE serialNo = '$serialNo2'"));

$assets2Sql = "INSERT INTO assets (formNo, asset, purchaseYear, serialNo, buyPrice, sellPrice) VALUES ('$formNo', '$assets2', '$year2', '$serialNo2', '$buyPrice2', '$sellPrice2')";

$assets3NumRows = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM assets WHERE serialNo = '$serialNo3'"));

$assets3Sql = "INSERT INTO assets (formNo, asset, purchaseYear, serialNo, buyPrice, sellPrice) VALUES ('$formNo', '$assets3', '$year3', '$serialNo3', '$buyPrice3', '$sellPrice3')";

$assets4NumRows = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM assets WHERE serialNo = '$serialNo4'"));

$assets4Sql = "INSERT INTO assets (formNo, asset, purchaseYear, serialNo, buyPrice, sellPrice) VALUES ('$formNo', '$assets4', '$year4', '$serialNo4', '$buyPrice4', '$sellPrice4')";

$assets5NumRows = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM assets WHERE serialNo = '$serialNo5'"));

$assets5Sql = "INSERT INTO assets (formNo, asset, purchaseYear, serialNo, buyPrice, sellPrice) VALUES ('$formNo', '$assets5', '$year5', '$serialNo5', '$buyPrice5', '$sellPrice5')";
