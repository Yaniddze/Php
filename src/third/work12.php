<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Практика 5 Задача 12 Зиневич Ян</title>
  <link rel="stylesheet" href="../../style.css">
</head>
<body>
  <?php
    echo "<p><a href='../../index.html'>К содержанию</a></p>";

    function search($array, $item) {
      foreach ($array as $arrayItem) {
        if ($arrayItem === $item) return 'true';
      }

      return 'false';
    }    

    echo '<div>search([1, 7, 8], 8) -> '.search([1, 7, 8], 8).'</div>';
    echo '<div>search([1, 7, 8], 9) -> '.search([1, 7, 8], 9).'</div>';
    echo '<div>search([‘alex’, ‘andrey’, ‘carla’], ‘victor’) -> '.search(['alex', 'andrey', 'carla'], 'victor').'</div>';
    echo '<div>search([‘alex’, ‘andrey’, ‘carla’], ‘carla’) -> '.search(['alex', 'andrey', 'carla'], 'carla').'</div>';
?>
Мой код
  <div class="script">
    <pre>
    <?php
        echo htmlspecialchars(<<< 'EOF'
        function search($array, $item) {
          foreach ($array as $arrayItem) {
            if ($arrayItem === $item) return 'true';
          }
    
          return 'false';
        }    
    
        echo '<div>search([1, 7, 8], 8) -> '.search([1, 7, 8], 8).'</div>';
        echo '<div>search([1, 7, 8], 9) -> '.search([1, 7, 8], 9).'</div>';
        echo '<div>search([‘alex’, ‘andrey’, ‘carla’], ‘victor’) -> '.search(['alex', 'andrey', 'carla'], 'victor').'</div>';
        echo '<div>search([‘alex’, ‘andrey’, ‘carla’], ‘carla’) -> '.search(['alex', 'andrey', 'carla'], 'carla').'</div>';
EOF
);
    ?>
    </pre>
    
  </code>
  
</body>
</html>