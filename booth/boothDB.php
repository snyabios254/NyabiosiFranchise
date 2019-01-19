<?php
if (isset($_POST['hiddenImage'])) {
  $img = $_POST['hiddenImage'];
} else {echo 'not set';}
$img = str_replace('data:image/png;base64,', '', $img);
$img = str_replace(' ', '+', $img);
$data = base64_decode($img);
$file = $_SERVER['DOCUMENT_ROOT']."/NyabiosiFranchise/booth/imgBr/".rand(1, 10).".png";
$success = file_put_contents($file, $data);
#header("location: ".$_POST['return_url']);
echo $file;
