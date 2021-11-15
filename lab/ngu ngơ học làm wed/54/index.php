<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .content {
            width: 600px;
            height: 350px;
            margin: 20px auto;
            border: 1px solid green;
        }

        h1 {
            text-align: center;
            padding: 10px 0;
            color: red;
        }

        label {
            display: inline-block;
            width: 100px;
            text-align: right;
        }

        label,
        input {
            padding: 5px;
            margin: 10px 0;
            font-size: 16px;
            font-weight: bold;
        }

        .result {
            width: 400px;
            height: 100px;
            margin: 0 auto;
        }

        .image {
            margin-left: 20px;
            margin-top: 20px;
            border-radius: 100%;
            width: 50px;
            height: 50px;
            overflow: hidden;
            display: inline-block;
            float: left;
        }

        .text {
            padding-top: 40px;
            margin-left: 80px;
            width: 300px;
            height: 100%;
            font-size: 20px;
            font-weight: bold;
            color: red;
            font-style: italic;
            display: block;
            height: 100px;
            box-sizing: border-box;
        }
    </style>
</head>

<body>
    <?php
    $day = '';
    $month = '';
    $image = '';
    $name = '';
    $time = '';
    $flagShow = true;
    $result = '';
    // nếu submit không là nút Xóa
    if (isset($_POST['typeSubmit']) && $_POST['typeSubmit'] != 'Xóa') {
        // nếu các ô nhập có dữ liệu
        if (isset($_POST['day']) && isset($_POST['month'])) {
            $day = $_POST['day'];
            $month = $_POST['month'];
            // hai ô ngày tháng là hai số
            if (is_numeric($day) && is_numeric($month)) {
                $flagShow = true;
                switch ($month) {
                    case '1':
                        if ($day < 1 || $day > 31) {
                            $flagShow = false;
                            break;
                        }
                        if ($day <= 19) {
                            $image = 'capricorn';
                            $name = 'Ma kết';
                            $time = '23/12 - 19/01';
                        }
                        if ($day >= 20) {
                            $image = 'aquarius';
                            $name = 'Bảo bình';
                            $time = '20/01 - 19/02';
                        }
                        break;
                    case '2':
                        if ($day < 1 || $day > 29) {
                            $flagShow = false;
                            break;
                        }
                        if ($day <= 19) {
                            $image = 'aquarius';
                            $name = 'Bảo bình';
                            $time = '20/01 - 19/02';
                        }
                        if ($day >= 20) {
                            $image = 'pisces';
                            $name = 'Song ngư';
                            $time = '20/02 - 21/03';
                        }
                        break;
                        // viết tiếp cho các trường hợp còn lại
                    default:
                        $flagShow = false;
                        break;
                }
            } else {
                $flagShow = false;
            }
        }
        if ($flagShow) {
            $result = '<div class="result">
              <div class="image">
                <img src="images/' . $image . '.jpg" alt="' . $image . '">
              </div>
              <div class="text">
                <span>' . $name . ' (' . ucfirst($image) . ' : ' . $time . ')</span>
              </div>
            </div>';
        } else {
            $result = '<div class="text">Dữ liệu không hợp lệ </div>';
        }
    }
    ?>
    <div class="content">
        <h1>Lấy chòm sao</h1>
        <form action="#" method="post">
            <label>Ngày sinh</label>
            <input type="text" name="day" value="<?php echo $day; ?>"><br>
            <label>Tháng sinh</label>
            <input type="text" name="month" value="<?php echo $month; ?>"><br>
            <label></label>
            <input type="submit" name="typeSubmit" value="Lấy chòm sao">
            <input type="submit" name="typeSubmit" value="Xóa">
        </form>
        <?php echo $result; ?>
    </div>

</body>

</html>