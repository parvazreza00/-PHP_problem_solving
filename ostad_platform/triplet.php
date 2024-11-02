<?php
function findTriplet($arr, $n, $P) {
    sort($arr);

    for ($i = 0; $i < $n - 2; $i++) {
        $left = $i + 1;
        $right = $n - 1;

        while ($left < $right) {
            $currentSum = $arr[$i] + $arr[$left] + $arr[$right];

            if ($currentSum == $P) {
                echo $arr[$i] . " " . $arr[$left] . " " . $arr[$right] . "\n";
                return true;
            } elseif ($currentSum < $P) {
                $left++;
            } else {
                $right--;
            }
        }
    }

    echo "No triplet found\n";
    return false;
}


fscanf(STDIN, "%d", $N);

$arr = array_map('intval', explode(' ', trim(fgets(STDIN))));

fscanf(STDIN, "%d", $P);

findTriplet($arr, $N, $P);

// if (count($arr) != $N) {
//     echo "Array size doesn't match the input size\n";
// } else {
//     findTriplet($arr, $N, $P);
// }
?>
