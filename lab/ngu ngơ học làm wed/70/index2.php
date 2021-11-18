<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thời gian</title>
    <link rel="stylesheet" href="jquery-ui-1.12.1.custom/jquery-ui.css">
    <script src="jquery-ui-1.12.1.custom/external/jquery/jquery.js"></script>
    <script src="jquery-ui-1.12.1.custom/jquery-ui.js"></script>
    <script>
        $(function() {
            $("#date").datepicker({
                dateFormat: "dd/mm/yy"
            });
        });
    </script>
</head>

<body>
    <?php
    function createSelectbox($name, $attributes, $array, $keySelect)
    {
        $xhtml = '';

        if (!empty($array)) {
            $xhtml .= '<select name="' . $name . '" id="' . $name . '" style="' . $attributes . '">';
            foreach ($array as $key => $value) {
                if ($key == $keySelect) {
                    $xhtml .= '<option value="' . $key . '"selected = "selected">' . $value . '</option>';
                } else {
                    $xhtml .= '<option value="' . $key . '">' . $value . '</option>';
                }
            }
            $xhtml .= '</select>';
        }
        return $xhtml;
    }
    function addTime($date, $format, $type, $value)
    {
        $arrDate = date_parse_from_format($format, $date);
        switch ($type) {
            case 'Day':
                $ts = mktime(0, 0, 0, $arrDate['month'], $arrDate['day'] + $value, $arrDate['year']);
                break;
            case 'Month':
                $ts = mktime(0, 0, 0, $arrDate['month'] + $value, $arrDate['day'], $arrDate['year']);
                break;
            case 'Year':
                $ts = mktime(0, 0, 0, $arrDate['month'], $arrDate['day'], $arrDate['year'] + $value);
                break;
        }
        $result = date($format, $ts);
        return $result;
    }
    $arrTypes = array('---select type---', 'Day', 'Month', 'Year');

    $date     = (isset($_POST['date'])) ? $_POST['date'] : '';
    $type     = (isset($_POST['select-type'])) ? $_POST['select-type'] : '';
    $value    = (isset($_POST['value'])) ? $_POST['value'] : '';

    $strTypes = createSelectbox('select-type', 'width: 150px', $arrTypes, $type);
    $result = addTime($date, 'd/m/Y', $arrTypes[$type], $value);

    ?>
    <form action="#" method="post" id="mainForm" name="mainForm">
        <p>Date: <input readonly="readonly" type="text" name="date" id="date" value="<?php echo $date; ?>"></p>
        <p>Type: <?php echo $strTypes; ?></p>
        <p>Value: <input type="text" name="value" id="value" value="<?php echo $value; ?>"></p>
        <p><?php echo $result; ?></p>
        <input type="submit" value="Submit">
    </form>
</body>

</html>