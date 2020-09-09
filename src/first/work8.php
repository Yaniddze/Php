<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Практика 1 Задача 8 Зиневич Ян</title>
  <link rel="stylesheet" href="../../style.css">
</head>
<body>
  <?php
    echo "<p><a href='../../index.html'>К содержанию</a></p>";
    
    const N = 10;
    const Pseno = (220 / 4) * N;
    const Milk = (1000 / 4) * N;
    const Sugar = (30 / 4) * N;

    echo N.' порций: <br>';
    echo 'Молоко: '.number_format(Milk, 2).' мл <br>';
    echo 'Пшено: '.number_format(Pseno, 2).' г <br>';
    echo 'Сахар: '.number_format(Sugar, 2).' г <br>';
?>

Мой код
  <div class="script">
    <pre>
    <?php
        echo htmlspecialchars(<<< 'EOF'
    const N = 10;
    const Pseno = (220 / 4) * N;
    const Milk = (1000 / 4) * N;
    const Sugar = (30 / 4) * N;

    echo N.' порций: <br>';
    echo 'Молоко: '.number_format(Milk, 2).' мл <br>';
    echo 'Пшено: '.number_format(Pseno, 2).' г <br>';
    echo 'Сахар: '.number_format(Sugar, 2).' г <br>';
EOF
);
    ?>
    </pre>
    
  </code>
  
</body>
</html>