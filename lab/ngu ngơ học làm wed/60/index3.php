$array1 = array(1, 2, 3, 4, 5, 6);
$array2 = array('a','b','c');

$newArray = array_splice($array1, 1, 2, $array2);

echo '
<pre>';
                        print_r($array1);
                        echo '</pre>';