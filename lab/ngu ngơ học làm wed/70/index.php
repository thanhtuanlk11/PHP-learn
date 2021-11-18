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
            $("#date-start").datepicker({
                dateFormat: "dd/mm/yy"
            });
            $("#date-end").datepicker({
                dateFormat: "dd/mm/yy"
            });
        });
    </script>
</head>

<body>
    <?php
    $dateStart = (isset($_POST['date-start'])) ? $_POST['date-start'] : '';
    $dateEnd = (isset($_POST['date-end'])) ? $_POST['date-end'] : '';
    ?>
    <form action="#" method="post" id="mainForm" name="mainForm">
        <p>Start: <input readonly="readonly" type="text" name="date-start" id="date-start" value="<?php echo $dateStart; ?>"></p>
        <p>End: <input readonly="readonly" type="text" name="date-end" id="date-end" value="<?php echo $dateEnd; ?>"></p>
        <input type="submit" value="Submit">
    </form>
    <?php
    function compareDates($dateStart, $dateEnd)
    {
        $arrDateStart = date_parse_from_format('d/m/Y',  $dateStart);
        $tsStart = mktime(0, 0, 0, $arrDateStart['month'], $arrDateStart['day'], $arrDateStart['year']);

        $arrDateEnd = date_parse_from_format('d/m/Y',  $dateEnd);
        $tsEnd = mktime(0, 0, 0, $arrDateEnd['month'], $arrDateEnd['day'], $arrDateEnd['year']);

        $result = 0;
        if ($tsEnd > $tsStart) {
            $result = 1;
        } else if ($tsEnd < $tsStart) {
            $result = -1;
        }

        return $result;
    }

    if ($dateStart != null && $dateEnd != null) {
        if (compareDates($dateStart, $dateEnd) == 0) {
            echo 'Start = End';
        } else if (compareDates($dateStart, $dateEnd) == 1) {
            echo 'Start < End';
        } else {
            echo 'Start > End';
        }
    }
    ?>
</body>
</html>
