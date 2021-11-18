<?php
$data = scandir('.');
$result = '<ul>';
foreach ($data as $key => $value) {
    if ($value != '.' && $value != '..') {
        if (is_dir($value)) {
            $result .= '<li>' . 'D: ' . $value . '<ul>';
            $childData = scandir('./' . $value);
            foreach ($childData as $key1 => $value1) {
                if ($value1 != '.' && $value1 != '..') {
                    if (is_dir("./$value/$value1")) {
                        $result .= '<li>' . 'D: ' . $value1 . '</li>';
                    } else {
                        $result .= '<li>' . 'F: ' . $value1 . '</li>';
                    }
                }
            }
            $result .= '</ul></li>';
        } else {
            $result .= '<li>' . 'F: ' . $value . '</li>';
        }
    }
}
$result .= '</ul>';
echo $result;
?>