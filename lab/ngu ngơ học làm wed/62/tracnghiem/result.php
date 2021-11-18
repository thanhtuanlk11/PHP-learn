<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Trắc nghiệm tính cách</title>
    <link type="text/css" rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    // Đọc tập tin questions.txt
    $data = file('questions.txt') or die('Cannot read file');

    $point = 0;
    array_shift($data);

    foreach ($data as $key => $value) {
        $tmpArr = explode('|', $value);
        $id       = $tmpArr[0];
        $point = $point + $_POST[$id];
    }
    // Đọc tập tin result.txt
    $data = file('result.txt') or die('Cannot read file');
    array_shift($data);
    foreach ($data as $key => $value) {
        $tmpArr = explode('|', $value);
        $min    = $tmpArr[0];
        $max   = $tmpArr[1];
        $content           = $tmpArr[2];
        if ($point >= $min && $point <= $max) {
            $result = $content;
            break;
        }
    }

    // echo '<pre>';
    // print_r($_POST);
    // echo '</pre>';
    ?>
    <div class="content">
        <h1>Kết quả trắc nghiệm tính cách</h1>
        <p><b>Tổng số điểm của bạn là: </b><?php echo $point; ?></p>
        <p style='margin-top: 10px; text-align: justify;'><b>Kết quả trắc nghiệm của bạn: </b><?php echo $result; ?></p>
    </div>

</body>

</html>