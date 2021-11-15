<?php
function createBox()
{
    $value = '<div style="width: 200px; height: 300px; border: 1px solid #0DD;">';
    $value .= '<h1>Hàm trong PHP</h1>';
    $value .= '</div>';

    return $value; //trả về giá trị
}
$result = createBox();
echo $result;

function checkNumber()
{
    $value = 14;
    if ($value % 2 == 0) {
        return true;
    } else {
        return false;
    }
}
$result = checkNumber();
if ($result == true) {
    echo 'Số chẵn';
} else {
    echo 'Số lẻ';
}
?>