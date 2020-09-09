<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Практика 2 Задача 7 Зиневич Ян</title>
  <link rel="stylesheet" href="../../style.css">
</head>
<body>
  <?php
    echo "<p><a href='../../index.html'>К содержанию</a></p>";

    for ($i=0; $i < 10; $i++) { 
        $rand = rand(5, 20);
        echo 'Возраст '.$rand;
        if($rand < 7 || $rand > 16) {
            echo ' не';
        }
        echo ' школьный.<br>';
    }
?>

Мой код
  <div class="script">
    <pre>
    <?php
        echo htmlspecialchars(<<< 'EOF'
        for ($i=0; $i < 10; $i++) { 
            $rand = rand(5, 20);
            echo 'Возраст '.$rand;
            if($rand < 7 || $rand > 16) {
                echo ' не';
            }
            echo ' школьный.<br>';
        }
EOF
);
    ?>
    </pre>
    
  </code>
  
</body>
</html>