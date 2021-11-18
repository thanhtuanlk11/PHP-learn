<?php
$str = 'http://www.google.com:80/hinh-anh.php?id=123&page=6#item2';
$data = parse_url($str);

echo '<pre>';
print_r($data);
echo '</pre>';
?>