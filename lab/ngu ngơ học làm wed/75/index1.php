<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <?php
    $data = file_get_contents('http://dantri.com.vn/giao-duc-khuyen-hoc.htm') or die('Không đọc được dữ liệu');
    $pattern = '/class="mt3 clearfix eplcheck">.*src="(.*)".*class="fon6".*>(.*)<.*fon5 wid324 fl">.*(.*)</ismU';
    preg_match_all($pattern, $data, $matches);

    $result = array();
    foreach ($matches[1] as $key => $value) {
        $result[$key]['image'] = $matches[1][$key];
        $result[$key]['title'] = $matches[2][$key];
        $result[$key]['description'] = $matches[3][$key];
    }
    // lấy mẩu tin đầu tiên
    $pattern = '/class="mt3 clearfix".*src="(.*)".*"fon44".*>(.*)<.*"fon5 wid255 fl">(.*)</ismU';
    preg_match($pattern, $data, $matches);
    $top['image'] = $matches[1];
    $top['title'] = $matches[2];
    $top['description'] = $matches[3];
    // gắn $top vào đầu chuỗi $result
    array_unshift($result, $top);
    ?>
    <div class="container">
        <?php
        foreach ($result as $key => $value) {
        ?>
            <div class="news">
                <img src="<?php echo $value['image']; ?>" alt="">
                <h3><a href="<?php echo $value['link']; ?>"><?php echo $value['title']; ?></a></h3>
                <p><?php echo $value['description']; ?></p>
            </div>
        <?php
        }
        ?>
    </div>
</body>

</html>