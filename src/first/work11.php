<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Практика 1 Задача 11 Зиневич Ян</title>
  <link rel="stylesheet" href="../../style.css">
</head>
<body>
  <?php
    echo "<p><a href='../../index.html'>К содержанию</a></p>";
    
    const A = 18;
    const B = 10;

    const C = 1200;

    const result = (B/A) * C;

    echo 'Из '.C.' выплавят '.number_format(result, 2);
?>

Мой код
  <div class="script">
    <pre>
    <?php
        echo htmlspecialchars(<<< 'EOF'
        const A = 18;
        const B = 10;
    
        const C = 1200;
    
        const result = (B/A) * C;
    
        echo 'Из '.C.' выплавят '.number_format(result, 2);
EOF
);
    ?>
    </pre>
    
  </code>
  
</body>
</html>