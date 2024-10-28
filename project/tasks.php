<?php
/*$string1 = 'heart';
$string2 = 'earth';

function areAnagrams($str1, $str2) {
    if (strlen($str1) !== strlen($str2)) {
        return false;
    }
    $arr1 = str_split($str1);
    $arr2 = str_split($str2);
    sort($arr1);
    sort($arr2);
    return $arr1 === $arr2;
}

if (areAnagrams($string1, $string2)) {
    echo 'yes';
} else {
    echo 'no';
} */
/*
$input = '3 2 5 2 1 3';
$numbers = explode(' ', $input);
$counts = [];
foreach ($numbers as $number) {
    if (isset($counts[$number])) {
        $counts[$number]++;
    } else {
        $counts[$number] = 1;
    }
}
$result = [];
foreach ($counts as $number => $count) {
    if ($count >= 2) {
        $result[] = $number;
    }
}
echo implode(' ', $result);
*/

function maxSubArraySum($arr) {
    $max_so_far = $arr[0];
    $max_ending_here = $arr[0];

    for ($i = 1; $i < count($arr); $i++) {
        $max_ending_here = max($arr[$i], $max_ending_here + $arr[$i]);
        $max_so_far = max($max_so_far, $max_ending_here);
    }

    return $max_so_far;
}
$input = "-2 1 -3 4 -1 2 1 -5 4";
$arr = array_map('intval', explode(' ', $input));
$max_sum = maxSubArraySum($arr);
echo "Максимальная сумма подряд идущих элементов: " . $max_sum;

?>