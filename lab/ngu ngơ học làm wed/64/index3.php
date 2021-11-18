<?php
$str = '   nGuyeN     VAn tEo     ';

function formatString($str, $type = null)
{
    // chuyển về dạng chữ thường
    $str = strtolower($str);
    // bỏ khoảng trắng trái-phải
    $str = trim($str);
    // bỏ khoảng trắng thừa ở giữa
    // chuyển chuỗi thành mảng
    $array = explode(' ', $str);
    // bỏ các phần tử khoảng trắng trong mảng
    foreach ($array as $key => $value) {
        if (trim($value) == null) {
            unset($array[$key]);
            continue;
        }
        if ($type == 'danh-tu') $array[$key] = ucfirst($value);
    }
    // chuyển mảng thành chuỗi
    $result = implode(' ', $array);
    // chuyển kí tự đầu tiên của chuỗi thành chữ hoa
    $result = ucfirst($result);
    return $result;
}

echo $result = formatString($str, 'danh-tu');
?>