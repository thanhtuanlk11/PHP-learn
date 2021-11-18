<?php
$fraction = '18/9';
$arrFraction = explode('/', $fraction);
$ts = $arrFraction[0];
$ms = $arrFraction[1];

function UCLN($n1, $n2)
{
    for ($i = 1; $i <= $n1; $i++) {
        if ($n1 % $i == 0) {
            $uclnN1[] = $i;
        }
    }
    for ($i = 1; $i <= $n2; $i++) {
        if ($n2 % $i == 0) {
            $uclnN2[] = $i;
        }
    }
    $temp = array_intersect($uclnN1, $uclnN2);
    $result = max($temp);
    return $result;
}
$ucln = UCLN($ts, $ms);
$ts = $ts / $ucln;
$ms = $ms / $ucln;
echo $ts . '/' . $ms;
?>