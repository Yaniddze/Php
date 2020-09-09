<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Практика 2 Задача 9 Зиневич Ян</title>
  <link rel="stylesheet" href="../../style.css">
</head>
<body>
  <?php
    echo "<p><a href='../../index.html'>К содержанию</a></p>";

    $x = rand(5, 15);
    $y = rand(5, 15);

    $k = rand(5, 15);
    $n = rand(5, 15);

    echo 'Числа x = '.$x.'; y = '.$y.'; k = '.$k.'; n = '.$n.';<br>';

    if ($x <= $k || $y <= $n) {
        echo 'не ';
    }

    echo 'войдёт.<br>';
?>

Мой код
  <div class="script">
    <pre>
    <?php
        echo htmlspecialchars(<<< 'EOF'
        
        $x = rand(5, 15);
        $y = rand(5, 15);
    
        $k = rand(5, 15);
        $n = rand(5, 15);
    
        echo 'Числа x = '.$x.'; y = '.$y.'; k = '.$k.'; n = '.$n.';<br>';
    
        if ($x <= $k || $y <= $n) {
            echo 'не ';
        }
    
        echo 'войдёт.<br>';
EOF
);
    ?>
    </pre>
    
  </code>
  
</body>
</html>