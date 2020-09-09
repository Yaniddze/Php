<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Практика 2 Задача 10 Зиневич Ян</title>
  <link rel="stylesheet" href="../../style.css">
</head>
<body>
  <?php
    echo "<p><a href='../../index.html'>К содержанию</a></p>";

    $g = rand(50, 150);

    $xn = 50;
    $xk = 75;

    $yn = 76;
    $yk = 125;

    $zn = 126;
    $zk = 150;

    echo 'Вес спортсмена: '.$g.'<br>';

    if ($g >= $xn && $g <= $xk) {
        echo 'Малая весовая группа. <br>';
    }

    if ($g >= $yn && $g <= $yk) {
        echo 'Средняя весовая группа. <br>';
    }

    if ($g >= $zn && $g <= $zk) {
        echo 'Тяжелая весовая группа. <br>';
    }
?>

Мой код
  <div class="script">
    <pre>
    <?php
        echo htmlspecialchars(<<< 'EOF'
        
        $g = rand(50, 150);

    $xn = 50;
    $xk = 75;

    $yn = 76;
    $yk = 125;

    $zn = 126;
    $zk = 150;

    echo 'Вес спортсмена: '.$g.'<br>';

    if ($g >= $xn && $g <= $xk) {
        echo 'Малая весовая группа. <br>';
    }

    if ($g >= $yn && $g <= $yk) {
        echo 'Средняя весовая группа. <br>';
    }

    if ($g >= $zn && $g <= $zk) {
        echo 'Тяжелая весовая группа. <br>';
    }
EOF
);
    ?>
    </pre>
    
  </code>
  
</body>
</html>