<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Пример встраивания PHP в HTML</title>
</head>
<body>
<!--    Задние 1  Переменные в PHP  -->
<h1>Пример встраивания PHP в HTML</h1>
<!--2 + 2 = <?php echo 4; ?>--->
<?php
    /*$a = 3;
    $b = 5;

    $c = $a;
    $a = $b;
    $b = $c;

    $a = 3;
    $b = 5;
    $a = $a + $b;
    $b = $a - $b;
    $a = $a - $b;


    /*
        !1
        !0
        !true
        2 && 3
        5 && 0
        3 || 0
        5 / 1
        1 / 5
        5 + '5string'
        '5' == 5
        '05' == 5
        '05' == '5'
    */
    /*
    echo var_dump(!1);
    echo var_dump(!0);
    echo var_dump(!true);
    echo var_dump(2 && 3);
    echo var_dump(5 && 0);
    echo var_dump(3 || 0);
    echo var_dump(5 / 1);
    echo var_dump(1 / 5);
    echo var_dump(5 + '5string');
    echo var_dump('5' == 5);
    echo var_dump('05' == 5);
    echo var_dump('05' == '5');
    */

    /*
     *

    Попробуйте следующие условия:

        if ('string') {echo 'Условие выполнилось';}
        if (0) {echo 'Условие выполнилось';}
        if (null) {echo 'Условие выполнилось';}
        if (5) {echo 'Условие выполнилось';}

    Объясните результат.

    /*
    if ('string') {
        echo 'Условие выполнилось<br>';
    }
    if (0) {
        echo 'Условие выполнилось<br>';
    }
    if (null) {
        echo 'Условие выполнилось<br>';
    }
    if (5) {
        echo 'Условие выполнилось<br>';
    }

    $number = 7;

    $result = ($number % 2 == 0) ? 'Чётное' : 'Нечётное';
    echo "Число $number является $result.";
    */

    /*
    function findMin($a, $b, $c)
    {
        return min($a, $b, $c);
    }

    $minValue = findMin(3.5, 2.1, 4.8);
    echo "Минимальное значение: $minValue<br>";


    function multiplyByTwo(&$a, &$b)
    {
        $a *= 2;
        $b *= 2;
    }

    $x = 5;
    $y = 10;
    multiplyByTwo($x, $y);
    echo "x = $x, y = $y<br>";


    function factorial($n)
    {
        if ($n <= 1) {
            return 1;
        }
        return $n * factorial($n - 1);
    }
    $result = factorial(5);
    echo "Факториал 5: $result<br>";


    function printNumbers($n)
    {
        if ($n < 0) {
            return;
        }
        printNumbers($n - 1);
        echo "$n\n";
    }

    printNumbers(5);
    */


    /*$title = 'Заголовок страницы';
    $header = 'HEADER';
    $sidebar = 'SIDEBAR';
    $content = '<h1>Заголовок статьи</h1><p>Текст какой-то статьи</p>';
    $footer = 'FOOTER';

    require __DIR__ . '/header.php';
    require __DIR__ . '/sidebar.php';
    require __DIR__ . '/content.php';
    require __DIR__ . '/footer.php';

    $var = include 'file.php';
    echo $var;*/


    ?>
</body>
</html>