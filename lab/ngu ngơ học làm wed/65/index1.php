<?php
  $str = '<script>alert("Đã bị nhiễm mã độc!!!!");</script>';
  echo $str;
  echo strip_tags('<script>alert("Đã bị nhiễm mã độc!!!!");</script>')
 ?>