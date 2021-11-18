<?php
$students = array();
$students['SV01'] = array('name' => 'Teo', 'sex' => 1, 'score' => array(3, 5, 7));
$students['SV02'] = array('name' => 'Ti', 'sex' => 0, 'score' => array(5, 5, 7));

echo '<pre>';
print_r($students);
echo '</pre>';
?>


echo $students['SV02']['name'];
echo $students['SV02']['score'][1];