<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .content {
      width: 300px;
      margin: 0px auto;
      border: 1px solid #444;
      text-align: center;
      padding: 10px;
    }
    .content h1 {
      color: red;
    }
    .content div.image {
      margin: 20px 0px;
    }
    .content div.image img{
      margin: 20px 0px;
    }
    .content div.image a {
      display: inline-block;
      background: #994F82;
      color: #FFFDD3;
      padding: 3px 10px;
      text-decoration: none;
    }
    .content div.image a:hover {
      color: #9BCC61;
    }  
  </style>
</head>
<body>
<div class="content">
    <h1>Xem ảnh</h1>
    <div class="image">
      <?php
        $i = 1;
        do {
          echo '<img src="images/' . $i . '.jpg">';
          $flagShow = 0;
          if(isset($_GET['show'])) {
            $flagShow = $_GET['show'];
            $i++;
          }
        }while($i <= 10 && $flagShow);
      ?>
      <a href="?show=1">Xem toàn bộ</a>
      <a href="?show=0">Xem một hình</a>
    </div>
  </div>
</body>
</html>