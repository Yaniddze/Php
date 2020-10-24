<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Практика 5 Задача 8 Зиневич Ян</title>
  <link rel="stylesheet" href="../../style.css">
</head>
<body>
  <?php
    echo "<p><a href='../../index.html'>К содержанию</a></p>";
    
    $gr = array(
      "Россия" => array(
        "Москва",
        17.1,
        144.5,
        "https://upload.wikimedia.org/wikipedia/commons/f/f3/Flag_of_Russia.svg"
      ),
      "Словения" => array(
        "Любляна",
        0.5,
        2.0,
        "https://upload.wikimedia.org/wikipedia/commons/f/f0/Flag_of_Slovenia.svg"
      ),
      "Эстония" => array(
        "Таллин",
        0.2,
        0.4,
        "https://www.nationalflags.shop/WebRoot/vilkasfi01/Shops/2014080403/53E6/2F54/0BE1/37EB/6A8B/0A28/100B/046A/Flag_of_Estonia.png"
      )
    );

    for ($i=0; $i < count(array_keys($gr)); $i++) { 
      $key = array_keys($gr)[$i];
      $value = $gr[$key];

      echo '<div>';

      echo '<h2>'.$key.'</h2>';
      echo '<img width="300px" height="200px" src="'.$value[3].'"/>';
      echo '<div>Столица - '.$value[0].'</div>';
      echo '<div>S = '.$value[1].' миллиона km</div>';
      echo '<div>Население = '.$value[2].' миллиона</div>';

      echo '</div>';
    }

    $country = '';
    $max = -100;

    for ($i=0; $i < count(array_keys($gr)); $i++) { 
      $key = array_keys($gr)[$i];
      $value = $gr[$key];

      if ($value[2] > $max) {
        $max = $value[2];
        $country = $key;
      }
    }

    echo '<h2>'.$country.' самая населенная</h2>'

?>
Мой код
  <div class="script">
    <pre>
    <?php
        echo htmlspecialchars(<<< 'EOF'
        $gr = array(
          "Россия" => array(
            "Москва",
            17.1,
            144.5,
            "https://upload.wikimedia.org/wikipedia/commons/f/f3/Flag_of_Russia.svg"
          ),
          "Словения" => array(
            "Любляна",
            0.5,
            2.0,
            "https://upload.wikimedia.org/wikipedia/commons/f/f0/Flag_of_Slovenia.svg"
          ),
          "Эстония" => array(
            "Таллин",
            0.2,
            0.4,
            "https://www.nationalflags.shop/WebRoot/vilkasfi01/Shops/2014080403/53E6/2F54/0BE1/37EB/6A8B/0A28/100B/046A/Flag_of_Estonia.png"
          )
        );
    
        for ($i=0; $i < count(array_keys($gr)); $i++) { 
          $key = array_keys($gr)[$i];
          $value = $gr[$key];
    
          echo '<div>';
    
          echo '<h2>'.$key.'</h2>';
          echo '<img width="300px" height="200px" src="'.$value[3].'"/>';
          echo '<div>Столица - '.$value[0].'</div>';
          echo '<div>S = '.$value[1].' миллиона km</div>';
          echo '<div>Население = '.$value[2].' миллиона</div>';
    
          echo '</div>';
        }
    
        $country = '';
        $max = -100;
    
        for ($i=0; $i < count(array_keys($gr)); $i++) { 
          $key = array_keys($gr)[$i];
          $value = $gr[$key];
    
          if ($value[2] > $max) {
            $max = $value[2];
            $country = $key;
          }
        }
    
        echo '<h2>'.$country.' самая населенная</h2>'
EOF
);
    ?>
    </pre>
    
  </code>
  
</body>
</html>