<?php
function isPalindrome($str) {
  // remove all non-alphanumeric characters and convert to lowercase
  $str = preg_replace('/[^a-zA-Z0-9]/', '', strtolower($str));
  // compare the original string to its reverse
  return $str === strrev($str);
}
$str1 = 'racecar';
$str2 = 'Hello World';

echo isPalindrome($str1); // outputs true
echo isPalindrome($str2); // outputs false
?>
