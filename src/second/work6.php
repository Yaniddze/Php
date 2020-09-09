<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Практика 2 Задача 6 Зиневич Ян</title>
  <link rel="stylesheet" href="../../style.css">
</head>
<body>
  <?php
    echo "<p><a href='../../index.html'>К содержанию</a></p>";

    // 1 Вариант
    function calc($x){
        return 10 * pow($x, 3) - 12 * pow($x, 2) + 7 * $x;
    }

    $x = rand(10, 20);

    echo 'X = '.$x.'; y = '.calc($x).';<br>';
?>

Мой код
  <div class="script">
    <pre>
    <?php
        echo htmlspecialchars(<<< 'EOF'
        // 1 Вариант
    function calc($x){
        return 10 * pow($x, 3) - 12 * pow($x, 2) + 7 * $x;
    }

    $x = rand(10, 20);

    echo 'X = '.$x.'; y = '.calc($x).';<br>';
EOF
);
    ?>
    </pre>
    
  </code>
  
</body>
</html>