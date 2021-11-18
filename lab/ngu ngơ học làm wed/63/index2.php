<?php
$str = '   nguyen    van   teo    ';
// bỏ khoảng trắng ở hai đầu -> 'nguyen van teo'
$str = trim($str);
// chuyển chuỗi thành mảng
$array = explode(' ', $str);
// bỏ các phần tử khoảng trắng trong mảng
foreach ($array as $key => $value) {
    if (trim($value) == null) {
        unset($array[$key]);
    }
}
// chuyển mảng thành chuỗi
$str = implode(' ', $array);
echo $str;
?>