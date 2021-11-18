<?php
// kiểm tra dữ liệu khác rỗng
function checkEmpty($value)
{
    $flag = false;
    if (!isset($value) || trim($value) == '') {
        $flag = true;
    }
    return $flag;
}
// kiểm tra chiều dài dữ liệu
function checkLength($value, $min, $max)
{
    $flag = false;
    $length = strlen($value);
    if ($length < $min || $length > $max) {
        $flag = true;
    }
    return $flag;
}
// tạo tên tập tin ngẫu nhiên
function randomString($length = 5)
{
    // tạo ra một mảng gồm các kí tự AZaz09
    $arrChar = array_merge(range('A', 'Z'), range('a', 'z'), range('0', '9'));
    // chuyển mảng thành chuỗi
    $chars = implode($arrChar);
    // đảo chuỗi ngẫu nhiên
    $chars = str_shuffle($chars);
    $result = substr($chars, 0, 5);
    return $result;
}
?>

[style.css]

* {
margin: 0px;
padding: 0px;
box-sizing: border-box;
}
.wrapper {
width: 800px;
height: 400px;
margin: 10px auto;
}
.heading {
font-style: 18px;
font-weight: bold;
color: red;
text-align: center;
margin: 10px 0;
}
#form {
width: 100%;
height: 300px;
border: 2px solid blue;
padding: 10px;
}
.title {
font-style: 16px;
font-weight: bold;
color: blue;
}
.error {
font-style: italic;
color: red;
}
input[type="submit"],
input[type="button"] {
padding: 5px;
width: 60px;
font-weight: bold;
margin: 10px;

}