<?php
function find_second_largest($arr){
    // Initialize variables
    $largest = $arr[0];
    $second_largest = null;

    // Find largest and second largest number in array
    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] > $largest) {
            $second_largest = $largest;
            $largest = $arr[$i];

        } elseif ($arr[$i] > $second_largest && $arr[$i] != $largest) {
               $second_largest = $arr[$i];
        }
    }

    return $second_largest;
}

$my_array = array(5, 10, 7, 3, 2);
$second_largest = find_second_largest($my_array);
echo "The second largest number is: " . $second_largest;
?>
