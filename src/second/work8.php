<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Практика 2 Задача 8 Зиневич Ян</title>
  <link rel="stylesheet" href="../../style.css">
</head>
<body>
  <?php
    echo "<p><a href='../../index.html'>К содержанию</a></p>";

    $a = rand(0, 20);
    $b = rand(0, 20);
    $c = rand(0, 20);

    echo 'Числа: '.$a.'; '.$b.' ;'.$c.';<br>';
    echo 'Наименьшее '.min($a, $b, $c).'<br>';
?>

Мой код
  <div class="script">
    <pre>
    <?php
        echo htmlspecialchars(<<< 'EOF'
        
    $a = rand(0, 20);
    $b = rand(0, 20);
    $c = rand(0, 20);

    echo 'Числа: '.$a.'; '.$b.' ;'.$c.';<br>';
    echo 'Наименьшее '.min($a, $b, $c).'<br>';
EOF
);
    ?>
    </pre>
    
  </code>
  
</body>
</html>