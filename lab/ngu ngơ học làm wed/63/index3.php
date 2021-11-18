<?php
function truncateString($str, $maxChars = 50, $holder = '...')
{
    $result = $str;
    if (strlen($str) > $maxChars) {
        $result = substr($str, 0, $maxChars) . $holder;
    }
    return $result;
}
?>