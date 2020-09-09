<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Практика 1 Задача 7 Зиневич Ян</title>
  <link rel="stylesheet" href="../../style.css">
</head>
<body>
  <?php
    echo "<p><a href='../../index.html'>К содержанию</a></p>";
    
    const S = 1500;
    const A = 5;
    const ATime = 1.5;
    const B = 60;
    const result = (S - (A * ATime)) / B;

    echo 'За ';
    echo number_format(result + ATime, 2);
    echo ' часов. <br>';
?>

Мой код
  <div class="script">
    <pre>
    <?php
        echo htmlspecialchars(<<< 'EOF'
        const S = 1500;
        const A = 5;
        const ATime = 1.5;
        const B = 60;
        const result = (S - (A * ATime)) / B;
    
        echo 'За ';
        echo number_format(result + ATime, 2);
        echo ' часов. <br>';
EOF
);
    ?>
    </pre>
    
  </code>
  
</body>
</html>