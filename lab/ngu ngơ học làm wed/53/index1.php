<?php
    $number = 10;
    if($number %2 ==0){
        echo 'Số chẵn';
    }else {
        echo 'Số lẽ';
    }
?>
<br>
<?php
    $number = 11;
    if ($number >= 0 && $number % 2 == 0) {
      $result = 'Số dương chẵn';
    } else if ($number >= 0 && $number % 2 != 0) {
      $result = 'Số dương lẻ';
    } else if ($number < 0 && $number % 2 == 0) {
      $result = 'Số âm chẵn';
    } else {
      $result = 'Số âm lẻ';
    }
    echo $result;
?>

<br>

<?php
    $number = -1;
    $result1 =($number>=0)?'số dương':'số âm';
    $result2 = ($number % 2 ==0)? 'Chẵn':'Lẻ';
    echo $result1 .' '. $result2;
?>