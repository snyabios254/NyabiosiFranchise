<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST['clear'])) {
    #echo 'button clicked';
    if (mysqli_num_rows($tableDates) > 0) {
      while ($row = mysqli_fetch_assoc($tableDates)) {
        if (mysqli_query($conn, "UPDATE tableDates SET status = 'positive' WHERE formNo = '$formNo'")) {
          echo "updated";
        }
      }
    }
  } else {
    #echo "some problem clickiing";
  }
  if (isset($_POST['unclear'])) {
    if (mysqli_num_rows($tableDates)> 0) {
      while ($row = mysqli_fetch_assoc($tableDates)) {
        if (mysqli_query($conn, "UPDATE tableDates SET status = 'negative' WHERE formNo = '$formNo'")) {
          echo "recleared";
        }
      }
    }
  }
}
