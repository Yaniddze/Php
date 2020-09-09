<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Практика 1 Задача 12 Зиневич Ян</title>
  <link rel="stylesheet" href="../../style.css">
</head>
<body>
  <?php
    echo "<p><a href='../../index.html'>К содержанию</a></p>";
    
    const A = 1.5;
    const B = 0.5;

    const C = 30;

    const result = (C/A) * B;

    echo 'Нужно '.number_format(result, 2).'г <br>';
?>

Мой код
  <div class="script">
    <pre>
    <?php
        echo htmlspecialchars(<<< 'EOF'
    const A = 1.5;
    const B = 0.5;

    const C = 30;

    const result = (C/A) * B;

    echo 'Нужно '.number_format(result, 2).'г <br>';
EOF
);
    ?>
    </pre>
    
  </code>
  
</body>
</html>