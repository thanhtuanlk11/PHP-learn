<?php
$n1 = 2;
$n2 = 3;
function testFunction($n1, &$n2)
{
    $n1 = $n1 * 2;
    $n2 = $n2 * 2;
}
testFunction($n1, $n2);
echo '$n1 = ' . $n1 . '<br>';
echo '$n2 = ' . $n2;
?>