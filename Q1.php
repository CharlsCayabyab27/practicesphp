<?php
function isDivisibleBy3And5($num){
    if ($num % 3 == 0 && $num % 5 == 0 ){
        return true;

    }else{
        return false;
    }
}

$num = 15;
if (isDivisibleBy3And5($num)) {
  echo "$num is divisible by both 3 and 5.";
} else {
  echo "$num is not divisible by both 3 and 5.";
}
?>