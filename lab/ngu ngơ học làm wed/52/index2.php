<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagination</title>
    <style>
        .content {
    margin: 10px auto;
    width: 800px;
    text-align: center;
    border: 1px solid red;
    padding: 20px;
  }
  .pages a {
    display: inline-block;
    width: 40px;
    background: green;
    color: white;
    text-decoration: none;
  }
    
</style>
</head>
<body>
    <div class="content">
        <div class="pages">
            <a href = "pagination.php?page=1">1</a>
            <a href = "pagination.php?page=2">2</a>
            <a href = "pagination.php?page=3">3</a>
            <a href = "pagination.php?page=4">4</a>
            <a href = "pagination.php?page=5">5</a>
            <a href = "pagination.php?page=6">6</a>
            <a href = "pagination.php?page=7">7</a>
        </div>
        <?php
        $page =(isset($_GET['page'])==true)?$_GET['page']:0;
        ?>
        <p>bạn đang ở trang thứ<?php echo $page;?></p>
    </div>
</body>
</html>