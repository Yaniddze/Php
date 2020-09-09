<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Практика 1 Задача 13 Зиневич Ян</title>
  <link rel="stylesheet" href="../../style.css">
</head>
<body>
  <?php
    echo "<p><a href='../../index.html'>К содержанию</a></p>";
    
    const N = 30;
    const A = 10;
    const B = 12;
    const C = 8;

    const BPercent = (B/N) * 100;
    const APercent = (A/N) * 100;
    const CPercent = (C/N) * 100;

    echo 'Учеников: '.N.'<br>';
    echo 'Пятерок: '.number_format(APercent,2).'% ('.A.')<br>';
    echo 'Четверок: '.number_format(BPercent,2).'% ('.B.')<br>';
    echo 'Троек: '.number_format(CPercent,2).'% ('.C.')<br>';
?>

Мой код
  <div class="script">
    <pre>
    <?php
        echo htmlspecialchars(<<< 'EOF'
        const N = 30;
        const A = 10;
        const B = 12;
        const C = 8;
    
        const BPercent = (B/N) * 100;
        const APercent = (A/N) * 100;
        const CPercent = (C/N) * 100;
    
        echo 'Учеников: '.N.'<br>';
        echo 'Пятерок: '.number_format(APercent,2).'% ('.A.')<br>';
        echo 'Четверок: '.number_format(BPercent,2).'% ('.B.')<br>';
        echo 'Троек: '.number_format(CPercent,2).'% ('.C.')<br>';
EOF
);
    ?>
    </pre>
    
  </code>
  
</body>
</html>