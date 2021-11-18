<?php
$timePost = '26/11/2016 16:06:05';
$timeReply = '28/11/2016 18:08:06';
// đổi thời gian từ chuỗi -> mảng
$arrPost = date_parse_from_format('d/m/Y H:i:s', $timePost);
$arrReply = date_parse_from_format('d/m/Y H:i:s', $timeReply);
// đổi thời gian từ mảng -> timestamp
$tsPost = mktime($arrPost['hour'], $arrPost['minute'], $arrPost['second'], $arrPost['month'], $arrPost['day'], $arrPost['year']);
$tsReply = mktime($arrReply['hour'], $arrReply['minute'], $arrReply['second'], $arrReply['month'], $arrReply['day'], $arrReply['year']);
$interval = $tsReply - $tsPost;

$result = '';
switch ($interval) {
    case $interval < 60:
        $result = ($interval == 1) ? $interval . ' second ago' : $interval . ' seconds ago';
        break;
    case ($interval >= 60 && $interval < 3600):
        $minute = round($interval / 60);
        $result = ($minute == 1) ? $minute . ' minute ago' : $minute . ' minutes ago';
        break;
    case ($interval >= 3600 && $interval < 86400):
        $hour = round($interval / 3600);
        $result = ($hour == 1) ? $hour . ' hour ago' : $hour . ' hours ago';
        break;
    case (round($interval / 86400) == 1):
        $result = 'Yesterday at ' . date('H:i:s', $tsReply);
        break;
    default:
        $result = date('d/m/Y \a\t H:i:s', $tsReply);
        break;
}
echo $result;
?>
