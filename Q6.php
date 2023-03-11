<?php
function merge_sorted_arrays($arr1, $arr2) {
  $merged = array_merge($arr1, $arr2); 
  sort($merged); 
  return $merged; 
}

$arr1 = [3, 5, 7];
$arr2 = [1, 3, 4];
$merged_arr = merge_sorted_arrays($arr1, $arr2);
print_r($merged_arr);
?>
