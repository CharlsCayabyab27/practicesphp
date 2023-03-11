<?php
function countVowels($str) {
  $count = 0;
  $vowels = array('a', 'e', 'i', 'o', 'u');
  $str = strtolower($str); // convert string to lowercase for easier matching

  for ($i = 0; $i < strlen($str); $i++) {
    if (in_array($str[$i], $vowels)) {
      $count++;
    }
  }
  return $count;
}
$str = 'Hello World';
echo countVowels($str); // outputs 3
?>