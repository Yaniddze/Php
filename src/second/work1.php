<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Практика 2 Задача 1 Зиневич Ян</title>
  <link rel="stylesheet" href="../../style.css">
</head>
<body>
  <?php
    echo "<p><a href='../../index.html'>К содержанию</a></p>";
    
    $a = rand(12, 25);
    $b = rand(4, 11);

    echo $a.' + '.$b.' = '.($a + $b).'<br>';
    echo $a.' - '.$b.' = '.($a - $b).'<br>';
    echo $a.' * '.$b.' = '.($a * $b).'<br>';
    echo $a.' / '.$b.' = '.number_format($a / $b, 2).'<br>';
    echo $a.'^'.$b.' = '.($a ** $b).'<br>';
    echo $a.' % '.$b.' = '.($a % $b).'<br>';
?>

Мой код
  <div class="script">
    <pre>
    <?php
        echo htmlspecialchars(<<< 'EOF'
        $a = rand(12, 25);
        $b = rand(4, 11);
    
        echo $a.' + '.$b.' = '.($a + $b).'<br>';
        echo $a.' - '.$b.' = '.($a - $b).'<br>';
        echo $a.' * '.$b.' = '.($a * $b).'<br>';
        echo $a.' / '.$b.' = '.number_format($a / $b, 2).'<br>';
        echo $a.'^'.$b.' = '.($a ** $b).'<br>';
        echo $a.' % '.$b.' = '.($a % $b).'<br>';
EOF
);
    ?>
    </pre>
    
  </code>
  
</body>
</html>