<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
        }

        .content {
            margin: 20px auto;
            width: 600px;
            border: 2px solid #ddd;
            padding: 10px;
        }

        .content h1 {
            text-align: center;
            color: #F00;
            margin-bottom: 10px;
        }

        .content div.row {
            margin-bottom: 10px;
        }

        .content div.row span {
            width: 100px;
            display: inline-block;
        }

        .content div.row select {
            width: 100px;
        }

        .content div.result span {
            margin: 10px 0px;
            display: inline-block;
        }

        .content div.row input[type=submit] {
            padding: 2px 10px;
        }
    </style>
</head>

<body>
    <?php
    $arrDays = range(1, 31);
    $arrMonths = range(1, 12);
    $arrYears = range(1970, 2020);
    function createSelectBox($arrData, $name, $keySelected)
    {
        $strDays = '';
        if (!empty($arrData)) {
            $strDays .= '<select name="' . $name . '">';
            foreach ($arrData as $key => $value) {
                if ($value == $keySelected) {
                    $strDays .= '<option value="' . $value . '" selected=true>' . $value . '</option>';
                } else {
                    $strDays .= '<option value="' . $value . '">' . $value . '</option>';
                }
            }
            $strDays .= '</select>';
        }
        return $strDays;
    }

    $day = (isset($_POST['days-select'])) ? $_POST['days-select'] : 0;
    $month = (isset($_POST['months-select'])) ? $_POST['months-select'] : 0;
    $year = (isset($_POST['years-select'])) ? $_POST['years-select'] : 0;

    $strDays = createSelectBox($arrDays, 'days-select', $day);
    $strMonths = createSelectBox($arrMonths, 'months-select', $month);
    $strYears = createSelectBox($arrYears, 'years-select', $year);
    ?>
    <div class="content">
        <h1>Kiểm tra ngày tháng</h1>
        <form action="#" method="post" id="mainForm" name="mainForm">
            <div class="row"> <span>Ngày</span><?php echo $strDays; ?></div>
            <div class="row"> <span>Tháng</span><?php echo $strMonths; ?></div>
            <div class="row"> <span>Năm</span><?php echo $strYears; ?></div>
            <div class="row"> <input type="submit" value="Check date"></div>
            <div class="result"> <span>Người dùng đã nhập: </span>
                <?php
                echo ' ' . $day . '/' . $month . '/' . $year . '<br>';
                if (checkdate($month, $day, $year)) {
                    echo '<b>Ngày hợp lệ</b>';
                } else {
                    echo '<b>Ngày không hợp lệ</b>';
                }
                ?>
            </div>
        </form>
    </div>
</body>

</html>