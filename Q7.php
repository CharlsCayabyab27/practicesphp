<?php
function longestString($arr) {
    $maxLength = 0;
    foreach ($arr as $str) {
      $length = strlen($str);
      if ($length > $maxLength) {
        $maxLength = $length;
      }
    }
    return $maxLength;
  }
  $arr = array('hello', 'world', 'this', 'is', 'a', 'test');
  echo longestString($arr); 
  ?>
    