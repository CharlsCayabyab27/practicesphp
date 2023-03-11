<?php
function countWords($str) {
    // use preg_split to split the string by any whitespace character
    $words = preg_split('/\s+/', $str);
    return count($words);
  }
  $str = 'This is a test string.';
  echo countWords($str); // outputs 5
?>    