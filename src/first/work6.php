<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Практика 1 Задача 6 Зиневич Ян</title>
  <link rel="stylesheet" href="../../style.css">
</head>
<body>
  <?php
    echo "<p><a href='../../index.html'>К содержанию</a></p>";
    
    const S = 1500;
    const A = 1200;

    const Kolya = S - A;

    const result = Kolya / A;

    echo 'В ';
    echo number_format(result, 2);
    echo ' раз. <br>';
?>

Мой код
  <div class="script">
    <pre>
    <?php
        echo htmlspecialchars(<<< 'EOF'
        const S = 1500;
    const A = 1200;

    const Kolya = S - A;

    const result = Kolya / A;

    echo 'В ';
    echo number_format(result, 2);
    echo ' раз. <br>';
EOF
);
    ?>
    </pre>
    
  </code>
  
</body>
</html>