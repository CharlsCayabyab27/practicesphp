<?php
function capitalizeWords($str) {
    $words = explode(' ', $str); // split string into array of words
    $capitalizedWords = array_map('ucfirst', $words); // capitalize each word
    $capitalizedStr = implode(' ', $capitalizedWords); // join words back into string
    return $capitalizedStr;
  }
  $str = 'the quick brown fox';

  echo capitalizeWords($str); // outputs "The Quick Brown Fox"
?>    