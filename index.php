<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>первая задача</p>
    <?php
        $a = 5;
        $b = 7;
        $sum = $a + $b;
        $product = $a * $b;

        echo "<p>Сумма: $sum</p>";
        echo "<p>Произведение: $product</p>";
    ?>

    <p>вторая задача</p>
    <?php
        $a = 4;
        $b = 6;
        $result = $a**2 + $b**2;
        echo "<p>Сумма квадратов: $result</p>";
    ?>

    <p>третья задача</p>
    <?php
        $a = 3;
        $b = 5;
        $c = 8;
        $average = ($a + $b + $c) / 3;
        echo "<p>Среднее арифметическое: $average</p>";
    ?>

    <p>четвертая задача</p>
    <?php
        $x = 2;
        $y = 6;
        $z = 9;
        $result = ($x + 1)*4 - 2 * ($z - 2 * $x**2 + $y**2);
        echo "<p>Результат: $result</p>";
    ?>

    <p>пятая задача</p>
    <?php
        $a = 4;
        $b = 8;
        $c = -3;

        $results = [
            'a+b/c' => ($a + $b) / $c,
            'a+c/b' => ($a + $c) / $b,
            'b+c/a' => ($b + $c) / $a
        ];
        foreach ($results as $key => $value) {
          echo "<p>$key = $value</p>";
        }
    ?>

    <p>шестая задача</p>
    <?php
        $a = 17;
        $b = 54;
        $result = $a * 0.4 + $b * 0.84;
        echo "<p>Результат: $result</p>";
    ?>
<p>седбмая задача</p>
    <?php
        $num = 347; // пример
        $sum = intdiv($num,100) + intdiv($num%100,10) + $num%10;
        echo "<p>Сумма цифр: $sum</p>";
    
    ?>
</body>
</html>