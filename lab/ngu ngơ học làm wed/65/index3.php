<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <?php
    /*
  * 100 một trăm
  * 101 một trăm linh một
  * 111 một trăm mười một
  * 121 một trăm hai mươi mốt
  * 105 một trăm linh năm
  * 115 một trăm mười lăm
  * 145 một trăm bốn mươi lăm
  */
    $dictNumbers = array(
        0 => 'không',
        1 => 'một',
        2 => 'hai',
        3 => 'ba',
        4 => 'bốn',
        5 => 'năm',
        6 => 'sáu',
        7 => 'bảy',
        8 => 'tám',
        9 => 'chín'
    );
    $dictUnits = array(
        0 => 'tỷ',
        1 => 'triệu',
        2 => 'nghìn',
        3 => 'đồng'
    );
    $number = 20000000;
    function readNumber3Digit($number, $dictionaryNumber, $readFull = true)
    {
        $number = strval($number);
        $number = str_pad($number, 3, 0, STR_PAD_LEFT);
        // lấy chữ số ở hàng đơn vị, chục, trăm
        $digit_0 = substr($number, 2, 1);
        $digit_00 = substr($number, 1, 1);
        $digit_000 = substr($number, 0, 1);
        // đọc số hàng trăm
        $str_000 = $dictionaryNumber[$digit_000] . ' trăm ';
        // đọc số hàng chục
        // 0: linh; 1: mười; 2-9: 2 -9 mươi
        $str_00 = $dictionaryNumber[$digit_00] . ' mươi ';
        if ($digit_00 == 0) {
            $str_00 = ' linh ';
        }
        if ($digit_00 == 1) {
            $str_00 = ' mười ';
        }
        // đọc số hàng đơn vị
        // 1: mốt - khi $digit_00 > 1
        // 5: lăm - khi $digit_00 > 0
        $str_0 = $dictionaryNumber[$digit_0];
        if ($digit_00 > 1 && $digit_0 == 1) {
            $str_0 = ' mốt ';
        }
        if ($digit_00 >= 1 && $digit_0 == 5) {
            $str_0 = ' lăm ';
        }
        if ($digit_00 > 1 && $digit_0 == 0) {
            $str_0 = '';
        }
        if ($digit_00 == 0 && $digit_0 == 0) {
            $str_0 = '';
            $str_00 = '';
        }
        if ($readFull == false) {
            if ($digit_000 == 0) {
                $str_000 = '';
            }
            if ($digit_000 == 0 && $digit_00 == 0) {
                $str_00 = '';
            }
        }
        $result = $str_000 . $str_00 . $str_0;
        return $result;
    }
    // end readNumber3Digit
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
    // end formatString
    function readNumber12Digits($number, $dictUnits, $dictNumbers)
    {
        $number = strval($number);
        $number = str_pad($number, 12, 0, STR_PAD_LEFT);
        $arrNumber = str_split($number, 3);
        foreach ($arrNumber as $key => $value) {
            if ($value != '000') {
                $index = $key;
                break;
            }
        }
        foreach ($arrNumber as $key => $value) {
            if ($key >= $index) {
                $readFull = true;
                if ($key == $index) $readFull = false;
                $result[$key] = readNumber3Digit($value, $dictNumbers, $readFull) . ' ' . $dictUnits[$key];
            }
        }

        $result = implode(' ', $result);
        $result = formatString($result);

        $result = str_replace('không đồng', 'đồng', $result);
        $result = str_replace('không trăm đồng', 'đồng', $result);
        $result = str_replace('không nghìn đồng', 'đồng', $result);
        $result = str_replace('không trăm nghìn đồng', 'đồng', $result);
        $result = str_replace('không triệu đồng', 'đồng', $result);
        $result = str_replace('không trăm triệu đồng', 'đồng', $result);
        $result = str_replace('không tỷ triệu đồng', 'đồng', $result);
        return $result;
    }

    $result = readNumber12Digits($number, $dictUnits, $dictNumbers);
    echo $result;
    ?>
</body>

</html>