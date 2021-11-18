<?php
$url = 'http://210.245.126.171/Music/NhacTre/TinhYeu_LyMaiTrang/wma32/06_BienTham_TinhYeu_LyMaiTrang.wma';

function getInfo03($str)
{
    $index = strripos($str, '/');
    $result = substr($str, $index + 1);
    return $result;
}

$info = getInfo03($url);

$result = array();
$arrayInfo = explode('_', $info);
// ID
$result['id'] = $arrayInfo[0];
// Type
$arrayType = explode('.', $arrayInfo[3]);
$result['type'] = $arrayType[1];

// Name, Album, Singer
$arrayInfo[3] = $arrayType[0];

function format($str)
{
    $result = $str[0];
    for ($i = 1; $i < strlen($str); $i++) {
        if (ctype_upper($str[$i])) {
            $result .= ' ' . $str[$i];
        } else {
            $result .= $str[$i];
        }
    }
    return $result;
}

$result['singer'] = format($arrayInfo[3]);
$result['name'] = format($arrayInfo[1]);
$result['album'] = format($arrayInfo[2]);
?>