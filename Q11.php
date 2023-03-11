<?php
function checkWord($str, $word) {
  if (strpos($str, $word) !== false) {
    return "The string contains $word";
  } else {
    return "The string does not contain $word";
  }
}
$str = 'The quick brown fox jumps over the lazy dog';
$word = 'fox';

echo checkWord($str, $word); // outputs "The string contains fox"
?>