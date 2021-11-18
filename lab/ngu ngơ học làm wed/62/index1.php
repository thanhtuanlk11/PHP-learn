<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <li>
        <label>
            <input type="radio" name="01" value="2"> Vào buổi sáng
        </label>
    </li>
    <?php
    $data = file('options.txt') or die('Cannot read file');
    array_shift($data);
    $arrOptions = array();
    foreach ($data as $key => $value) {
                $tmpArr = explode('|', $value);
                $questionID     = $tmpArr[0];
                $optionID                    = $tmpArr[1];
                $answer                       = $tmpArr[2];
                $point                          = $tmpArr[3];

                $arrOptions[$questionID][$optionID]['option'] = $answer;           
                $arrOptions[$questionID][$optionID]['point'] = $point;     
    }
   
     echo '<pre>';
     print_r($arrOptions);
     echo '</pre>';           
    ?>
</body>

</html>