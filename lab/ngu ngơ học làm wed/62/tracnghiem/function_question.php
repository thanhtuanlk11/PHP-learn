<?php
$data = file('questions.txt') or die('Cannot read file');
array_shift($data);
$arrQuestions = array();
foreach ($data as $key => $value) {
    $tmp_array     = explode('|', $value);
    $id                   = $tmp_array[0];
    $question         = $tmp_array[1];
    $arrQuestions[$id] = array('question' => $question);
}
?>