<?php
$year = 1998;
while ($year < 2031) {
  if ($year5 == $year) {$selected = 'selected';} else {$selected = '';}
  echo '<option '.$selected.' value="'.$year.'">'.$year.'</option>';
  $year++;
}
