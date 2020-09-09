<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Практика 1 Задача 10 Зиневич Ян</title>
  <link rel="stylesheet" href="../../style.css">
</head>
<body>
  <?php
    echo "<p><a href='../../index.html'>К содержанию</a></p>";
    
    const A = 100;

    const result = A * 0.65;

    echo 'На '.number_format(result, 2).' молекул <br>';
?>

Мой код
  <div class="script">
    <pre>
    <?php
        echo htmlspecialchars(<<< 'EOF'
    const A = 100;

    const result = A * 0.65;

    echo 'На '.number_format(result, 2).' молекул <br>';
EOF
);
    ?>
    </pre>
    
  </code>
  
</body>
</html>