<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Практика 5 Задача 7 Зиневич Ян</title>
  <link rel="stylesheet" href="../../style.css">
</head>
<body>
  <?php
    echo "<p><a href='../../index.html'>К содержанию</a></p>";
    
    $gr = array();

    for ($i=1; $i <= 7; $i++) { 
      $gr['Человек '.$i] = array(
        'Телефон '.$i,
        'Город '.$i,
        'Аватар '.$i,
      );
    }

    echo '<table border="1px solid black">';
    echo '<tr><th>Человек</th><th>Телефон</th><th>Город</th><th>Аватар</th></tr>';

    for ($i=0; $i < count(array_keys($gr)); $i++) { 
      $key = array_keys($gr)[$i];
      $value = $gr[$key];

      echo '<tr><td>'.$key.'</td><td>'.$value[0].'</td><td>'.$value[1].'</td><td>'.$value[2].'</td></tr>';
    }

    echo '</table>';
?>
Мой код
  <div class="script">
    <pre>
    <?php
        echo htmlspecialchars(<<< 'EOF'
        $gr = array();

        for ($i=1; $i <= 7; $i++) { 
          $gr['Человек '.$i] = array(
            'Телефон '.$i,
            'Город '.$i,
            'Аватар '.$i,
          );
        }
    
        echo '<table border="1px solid black">';
        echo '<tr><th>Человек</th><th>Телефон</th><th>Город</th><th>Аватар</th></tr>';
    
        for ($i=0; $i < count(array_keys($gr)); $i++) { 
          $key = array_keys($gr)[$i];
          $value = $gr[$key];
    
          echo '<tr><td>'.$key.'</td><td>'.$value[0].'</td><td>'.$value[1].'</td><td>'.$value[2].'</td></tr>';
        }
    
        echo '</table>';
?>
EOF
);
    ?>
    </pre>
    
  </code>
  
</body>
</html>