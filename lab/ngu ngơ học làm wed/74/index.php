<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
<?php
  $data = file_get_contents('https://vnexpress.net/tin-tuc/giao-duc') or die('Không đọc được dữ liệu');
  $pattern = '/<section class="sidebar_1">(.*)<\/section>/ismU';
  preg_match($pattern, $data, $matches);
  $pattern = '/<article class="list_news">(.*)<\/article>/ismU';
  preg_match_all($pattern, $matches[1], $matches);
 
  $result = array();
  foreach($matches as $key => $value ) {
    if($key < 3) {
      $pattern = '/href="(.*)".*">(.*)<\/a>.*<a.*src="(.*)".*class="description">(.*)<\/h4>/ismU'; 
      preg_match($pattern, $value, $matches);
      $result[$key]['link'] = $matches[1];
      $result[$key]['title'] = trim($matches[2]);
      $result[$key]['image'] = $matches[3];
      $result[$key]['description'] = trim($matches[4]);
    } else {
      $pattern = '/href="(.*)".*">(.*)<\/a>.*<a.*src="(.*)".*data-original="(.*)".*class="description">(.*)<\/h4>/ismU';
      preg_match($pattern, $value, $matches);
      $result[$key]['link'] = $matches[1];
      $result[$key]['title'] = trim($matches[2]);
      $result[$key]['image'] = $matches[4];
      $result[$key]['description'] = trim($matches[5]);
    }
    
  }
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