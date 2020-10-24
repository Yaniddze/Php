<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Практика 5 Задача 9 Зиневич Ян</title>
  <link rel="stylesheet" href="../../style.css">
</head>
<body>
  <?php
    echo "<p><a href='../../index.html'>К содержанию</a></p>";
    
    $gr = array(
      "Постирать одежду" => true,
      "Помыть посуду" => false,
      "Поиграть" => false,
    );

    echo '<div>';

    for ($i=0; $i < count(array_keys($gr)); $i++) { 
      $key = array_keys($gr)[$i];
      $value = $gr[$key];
      
      echo '<div>';

      echo '<label>'.$key.'<input type="checkbox" '.($value ? 'checked' : '').' disabled /></label>';
      
      echo '</div>';
    }

    echo '</div>';
?>
Мой код
  <div class="script">
    <pre>
    <?php
        echo htmlspecialchars(<<< 'EOF'
        $gr = array(
          "Постирать одежду" => true,
          "Помыть посуду" => false,
          "Поиграть" => false,
        );
    
        echo '<div>';
    
        for ($i=0; $i < count(array_keys($gr)); $i++) { 
          $key = array_keys($gr)[$i];
          $value = $gr[$key];
          
          echo '<div>';
    
          echo '<label>'.$key.'<input type="checkbox" '.($value ? 'checked' : '').' disabled /></label>';
          
          echo '</div>';
        }
    
        echo '</div>';
EOF
);
    ?>
    </pre>
    
  </code>
  
</body>
</html>