<?php
function toUpperCase($str) {
    $upperStr = strtoupper($str); // convert string to uppercase
    return $upperStr;
  }
  $str = 'the quick brown fox';

  echo toUpperCase($str); // outputs "THE QUICK BROWN FOX"
?>    