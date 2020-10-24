<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Практика 5 Задача 1 Зиневич Ян</title>
  <link rel="stylesheet" href="../../style.css">
</head>
<body>
  <?php
    echo "<p><a href='../../index.html'>К содержанию</a></p>";
    
    $ar = array();

    for ($i = 0; $i < 10; $i++) {
        $ar[] = rand(-100,100);
    }

    $first = 0;

    for ($i = 0; $i < 10; $i++) {
        if ($ar[$i] % 5 == 0) {
            $first += $ar[$i];
        }
    }

    echo '1) '.$first.'<br>';

    $sec = 'Not found';

    echo '<br>2)<br>';

    for ($i = 0; $i < 10; $i++) {
        if ($ar[$i] % 2 == 0) {

            echo $ar[$i].' - четный <br>';

            if ($sec > $ar[$i]) {
                $sec = $ar[$i];
            }
        }
    }

    echo 'Минимальный среди четных - '.$sec.'<br>';

    $min1 = 'Not Found';
    $min2 = 'Not Fount';

    for ($i = 0; $i < 10; $i++) {
        if ($ar[$i] % 2 == 0) {

            if ($min1 < $ar[$i]) {
                $min1 = $ar[$i];
            }
        } else {
            if ($min2 < $ar[$i]) {
                $min2 = $ar[$i];
            }
        }
    }

    echo '3) миниальный четный '.($min1 > $min2 ? 'больше' : 'меньше').' минимального нечетного <br>';

    $arPlus = array();

    for ($i = 0; $i < 10; $i++) {
        if ($ar[$i] > 0) {
            $arPlus[$i] = $ar[$i];
        } else {
            $arPlus[$i] = $ar[$i] * -1;
        }
    }

    echo '<pre>4)'.print_r($arPlus, true).'</pre> <br>';

    function sArr($p1, $p2, $ar) {
        $sr = 0;

        for($i = $p1; $i < $p2; $i++) {
            $sr += $ar[$i];
        }

        $sr /= $p2 - $p1;

        return $sr;
    }

    echo '5) '.sArr(0,3, $arPlus).'<br>';

    $proiz = 1;
    $counter = 5;

    for ($i = 0; $i < 10; $i++) {
        if ($counter == 0) {
            break;
        }

        if ($ar[$i] > 0) {
            $proiz *= $ar[$i];
            $counter++;
        }
    }

    echo '6) '.$proiz.'<br>';

    $sr = sArr(0, 10, $ar);
    $cc = 0;

    echo '7) среднее - '.$sr.'<br>';

    for ($i = 0; $i < 10; $i++) {
        if ($ar[$i] > $sr) {
            $cc++;
            echo $ar[$i].'<br>';
        }
    }

    echo 'Всего - '.$cc.'<br>';

    $ccc = 0;
    $max = -1000;

    for ($i = 0; $i < 10; $i++) {
        if ($ar[$i] > $max) {
            $max = $ar[$i];
        }
    }

    for ($i = 0; $i < 10; $i++) {
        if ($ar[$i] == $max) {
            $ccc++;
        }
    }

    $ccc--;

    echo '8) макс - '.$max.' кол-во - '.$ccc.'<br>';

    echo '<pre>'.print_r($ar, true).'</pre>';
?>

Мой код
  <div class="script">
    <pre>
    <?php
        echo htmlspecialchars(<<< 'EOF'
        $ar = array();

    for ($i = 0; $i < 10; $i++) {
        $ar[] = rand(-100,100);
    }

    $first = 0;

    for ($i = 0; $i < 10; $i++) {
        if ($ar[$i] % 5 == 0) {
            $first += $ar[$i];
        }
    }

    echo '1) '.$first.'<br>';

    $sec = 'Not found';

    echo '<br>2)<br>';

    for ($i = 0; $i < 10; $i++) {
        if ($ar[$i] % 2 == 0) {

            echo $ar[$i].' - четный <br>';

            if ($sec > $ar[$i]) {
                $sec = $ar[$i];
            }
        }
    }

    echo 'Минимальный среди четных - '.$sec.'<br>';

    $min1 = 'Not Found';
    $min2 = 'Not Fount';

    for ($i = 0; $i < 10; $i++) {
        if ($ar[$i] % 2 == 0) {

            if ($min1 < $ar[$i]) {
                $min1 = $ar[$i];
            }
        } else {
            if ($min2 < $ar[$i]) {
                $min2 = $ar[$i];
            }
        }
    }

    echo '3) миниальный четный '.($min1 > $min2 ? 'больше' : 'меньше').' минимального нечетного <br>';

    $arPlus = array();

    for ($i = 0; $i < 10; $i++) {
        if ($ar[$i] > 0) {
            $arPlus[$i] = $ar[$i];
        } else {
            $arPlus[$i] = $ar[$i] * -1;
        }
    }

    echo '<pre>4)'.print_r($arPlus, true).'</pre> <br>';

    function sArr($p1, $p2, $ar) {
        $sr = 0;

        for($i = $p1; $i < $p2; $i++) {
            $sr += $ar[$i];
        }

        $sr /= $p2 - $p1;

        return $sr;
    }

    echo '5) '.sArr(0,3, $arPlus).'<br>';

    $proiz = 1;
    $counter = 5;

    for ($i = 0; $i < 10; $i++) {
        if ($counter == 0) {
            break;
        }

        if ($ar[$i] > 0) {
            $proiz *= $ar[$i];
            $counter++;
        }
    }

    echo '6) '.$proiz.'<br>';

    $sr = sArr(0, 10, $ar);
    $cc = 0;

    echo '7) среднее - '.$sr.'<br>';

    for ($i = 0; $i < 10; $i++) {
        if ($ar[$i] > $sr) {
            $cc++;
            echo $ar[$i].'<br>';
        }
    }

    echo 'Всего - '.$cc.'<br>';

    $ccc = 0;
    $max = -1000;

    for ($i = 0; $i < 10; $i++) {
        if ($ar[$i] > $max) {
            $max = $ar[$i];
        }
    }

    for ($i = 0; $i < 10; $i++) {
        if ($ar[$i] == $max) {
            $ccc++;
        }
    }

    $ccc--;

    echo '8) макс - '.$max.' кол-во - '.$ccc.'<br>';

    echo '<pre>'.print_r($ar, true).'</pre>';
EOF
);
    ?>
    </pre>
    
  </code>
  
</body>
</html>