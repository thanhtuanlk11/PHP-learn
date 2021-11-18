<?php
  $year = 2016;
   if(checkdate(2, 29, $year)) {
    echo 'Là năm nhuận';
   }else {
    echo 'Không là năm nhuận';
   }
  echo $result;
?>



<?php
  $year = 2016;
  $month = 2;

  $timestamp = mktime(0, 0, 0, $month, 1, $year);
  $totalDays = date('t', $timestamp);
  
  echo $totalDays;
?>