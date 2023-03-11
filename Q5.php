<?php
function find_min_max($arr) {
    $min = $arr[0];
    $max = $arr[0];
    $count = count($arr);

    for ($i = 1; $i < $count; $i++) {
        if ($arr[$i] < $min) {
            $min = $arr[$i];
        }
        if ($arr[$i] > $max) {
            $max = $arr[$i];
        }
    }
    return array("min" => $min, "max" => $max);
}

$my_array = array(5, 10, 8, 3, 2);
$min_max = find_min_max($my_array);

echo "The minimum number is: " . $min_max["min"] . "<br>";
echo "The maximum number is: " . $min_max["max"];
?>



