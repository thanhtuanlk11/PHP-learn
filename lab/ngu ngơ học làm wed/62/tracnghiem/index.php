<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Trắc nghiệm tính cách</title>
    <link type="text/css" rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    require_once 'function_question.php'; //$arrQuestions
    require_once 'function_option.php'; //$arrOptions

    $newArr = array();
    foreach ($arrQuestions as $key => $value) {
        $newArr[$key]['question'] = $value['question'];
        $newArr[$key]['sentences'] = $arrOptions[$key];
    }
    ?>
    <div class="content">
        <h1>Trắc nghiệm tính cách</h1>
        <form action="result.php" method="POST" name="mainForm">
            <?php
            $i = 1;
            foreach ($newArr as $key => $value) {
                echo '<div class="question">';
                echo '<p><span>Câu hỏi ' . $i . ': </span>' . $value['question'] . '</p>';
                echo '<ul>';
                foreach ($value['sentences'] as $keyC => $valueC) {
                    echo '<li><label><input type="radio" name="' . $key . '" value="' . $valueC["point"] . '"> ' . $valueC["option"] . '</label></li>';
                }
                echo '</ul>';
                $i++;
                echo '</div>';
            }
            ?>
            <input type="submit" value="Kiểm tra" name="submit">
        </form>

    </div>
</body>

</html>