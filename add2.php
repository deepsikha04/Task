<!--Given array is [5,2,6,8,1,9] and target sum is 12, check if the pair matches the sum and if not print No pairs found-->


<?php
$nums = array(5, 2, 6, 8, 1, 9); // Converting the input i.e given nums  into an array
$target = 12;  // Target sum
$matched = array(); //Array to store the matched pairs

for ($i = 0; $i < count($nums); $i++) {
    for ($j = $i + 1; $j < count($nums); $j++) {
        if ($nums[$i] + $nums[$j] == $target) {
            $matched[] = "({$nums[$i]},{$nums[$j]})";
        }
    }
}

if (count($matched) > 0) {
    echo "The matching pairs are: " . implode(" and ", $matched);
} else {
    echo "Pair not found.";
}
?>
