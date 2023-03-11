<?php
function removeSpaces($str) {
    $noSpacesStr = str_replace(' ', '', $str); // remove all spaces
    return $noSpacesStr;
  }
  $str = 'The quick brown fox';

  echo removeSpaces($str); // outputs "Thequickbrownfox"
?>    