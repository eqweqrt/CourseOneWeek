<?php
/*$array = [
    'level1' => [
        'level2' => [
            'level3' => [
                'element1' => 'value1',
                'element2' => 'value2'
            ]
        ]
    ]
];

$array['level1']['level2']['level3']['element3'] = 'value3';
$array['level1']['level2']['level3']['element4'] = 'value4';

echo print_r($array);
*/

/*
$carsSpeeds = [
    95,
    140,
    78
];

$sumOfSpeeds = 0;
$countOfCars = 0;

foreach ($carsSpeeds as $speed) {
    $sumOfSpeeds += $speed;
    $countOfCars++;
}

$averageSpeed = $sumOfSpeeds / $countOfCars;

echo 'Средняя скорость движения по трассе: ' . $averageSpeed;
*/
/*
$evenNumbers = [];
$number = 345;

while ($number <= 357) {
    if ($number % 2 == 0) {
        $evenNumbers[] = $number;
    }
    $number++;
}

foreach ($evenNumbers as $number) {
    echo $number . "<br>";
}
*/
/*
$input = 'hello world';
$words = explode(' ', $input);

$reversedWords = [];
for ($i = count($words) - 1; $i >= 0; $i--) {
    $reversedWords[] = $words[$i];
}

$output = implode(' ', $reversedWords);
echo $output;
*/
/*
$input = 'hello world';
$output = strtoupper($input);
echo $output;
*/

/*
function containsValue($array, $value)
{
    foreach ($array as $item) {
        if ($item === $value) {
            return true;
        }
    }
    return false;
}
$array = [1, 2, 3, 4, 5];
$value = 3;
echo containsValue($array, $value) ? 'true<br>' : 'false<br>';

function countOccurrences($array, $value)
{
    $count = 0;
    foreach ($array as $item) {
        if ($item === $value) {
            $count++;
        }
    }
    return $count;
}
$array = [1, 2, 1, 3];
$value = 1;
echo countOccurrences($array, $value) . '<br>';

function fibonacci($n)
{
    $sequence = [];
    if ($n >= 1) {
        $sequence[] = 0;
    }
    if ($n >= 2) {
        $sequence[] = 1;
    }
    for ($i = 2; $i < $n; $i++) {
        $sequence[] = $sequence[$i - 1] + $sequence[$i - 2];
    }
    return implode(' ', $sequence);
}
$n = 10;
echo fibonacci($n);
*/
/*
$array = [1, 3, 2];
sort($array);
$result = implode(':', $array);
echo $result . '<br>';


$array = [1, 2, 3, 4, 5];
$subArray = array_slice($array, 1, 3);
echo print_r($subArray) . '<br>';

$input = '0 2 3 1 2';
$numbers = explode(' ', $input);
$uniqueNumbers = array_unique($numbers);
$output = implode(' ', $uniqueNumbers);
echo $output;
*/


?>