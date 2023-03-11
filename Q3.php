<?php
function hasLetterA($str){
    return strpos($str,'a') !== false;
}
$str1 = 'hallo';
$str2 = 'This string does contain an "a".';

if (hasLetterA($str1)) {
  echo 'The string contains the letter "a".';
} else {
  echo 'The string does not contain the letter "a".';
}

if (hasLetterA($str2)) {
  echo 'The string contains the letter "a".';
} else {
  echo 'The string does not contain the letter "a".';
}
 
?>
