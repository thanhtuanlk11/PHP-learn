<?php
$things['mon'] = 'Monday';
$things['tue'] = 'Tuesday';
$things['wed'] = 'Wednesday';
$things[]            = 'table';
$things[]            = 'book';

if (!empty($things)) {
    foreach ($things as $key => $value) {
        echo $value . ' ';
    }
}
?>