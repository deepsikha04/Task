<!--Given array is [8,7,2,5,3,1] and target sum is 10, find the pair of elements that add up to the target sum.-->


<?php
$input = array(8, 7, 2, 5, 3, 1); //Converting the input into array
$target = 10; //Target sum
$matched = array(); //Array to store the matched pairs

for ($i = 0; $i < count($input); $i++) {
    for ($j = $i + 1; $j < count($input); $j++) {
        if ($input[$i] + $input[$j] == $target) {
            $matched[] = "({$input[$i]},{$input[$j]})"; //Matched pair are stored in $matched
        }
    }
}

if (!empty($matched)) {
    echo "The matching pairs are: " . implode(" and ", $matched); //Displays  the matching pairs
} else {
    echo "No matching pairs found.";
}
?>
