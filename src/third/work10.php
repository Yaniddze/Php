<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Практика 5 Задача 10 Зиневич Ян</title>
  <link rel="stylesheet" href="../../style.css">
</head>
<body>
  <?php
    echo "<p><a href='../../index.html'>К содержанию</a></p>";
    
    function quotient($num1, $num2) {
      if ($num2 == 0) {
        return 'Делитель не может быть нулём';
      }

      return $num1 / $num2;
    }

    echo '<div>quotient(50, 2) -> '.quotient(50, 2).'</div>';
    echo '<div>quotient(0, 2) -> '.quotient(0, 2).'</div>';
    echo '<div>quotient(2, 0) -> '.quotient(2, 0).'</div>';
?>
Мой код
  <div class="script">
    <pre>
    <?php
        echo htmlspecialchars(<<< 'EOF'
        function quotient($num1, $num2) {
          if ($num2 == 0) {
            return 'Делитель не может быть нулём';
          }
    
          return $num1 / $num2;
        }
    
        echo '<div>quotient(50, 2) -> '.quotient(50, 2).'</div>';
        echo '<div>quotient(0, 2) -> '.quotient(0, 2).'</div>';
        echo '<div>quotient(2, 0) -> '.quotient(2, 0).'</div>';
EOF
);
    ?>
    </pre>
    
  </code>
  
</body>
</html>