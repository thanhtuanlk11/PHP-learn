<!-- mảng -->
<?php
$things = array(
    'mon' => 'Monday',
    'tue' => 'Tuesday',
    'wed' => 'Wednesday',
    0          => ' table',
    1          => 'book'
);

$newArray = array_values($things);
echo '<pre>';
print_r($newArray);
echo '</pre>';
?>
<!-- bỏ phần tử cuối ra khỏi mảng -->
<?php
$things = array(
    'mon' => 'Monday',
    'tue' => 'Tuesday',
    'wed' => 'Wednesday',
    0          => ' table',
    1          => 'book'
);
$lastItem = array_pop($things);
echo $lastItem . '<br>';
echo '<pre>';
print_r($things);
echo '</pre>';
?>