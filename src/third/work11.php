<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Практика 5 Задача 11 Зиневич Ян</title>
  <link rel="stylesheet" href="../../style.css">
</head>
<body>
  <?php
    echo "<p><a href='../../index.html'>К содержанию</a></p>";

    function toogleDevice($name, $state) {
      $ar = array(
        'door' => array(
          'open',
          'close'
        ),
        'light' => array(
          'on',
          'off',
        )
      );

      for ($i=0; $i < count($ar); $i++) { 
        $key = array_keys($ar)[$i];
        $item = $ar[$key];

        if ($key === $name) {
          if ($item[0] === $state) {
            return $item[1];
          }

          return $item[0];
        }
      }

      return 'Not found';
    }

    echo '<div>toggleDevice(‘door’, ‘close’) -> '.toogleDevice('door', 'close').'</div>';
    echo '<div>toggleDevice(‘light’, ‘off’) -> '.toogleDevice('light', 'off').'</div>';
?>
Мой код
  <div class="script">
    <pre>
    <?php
        echo htmlspecialchars(<<< 'EOF'
        function toogleDevice($name, $state) {
          $ar = array(
            'door' => array(
              'open',
              'close'
            ),
            'light' => array(
              'on',
              'off',
            )
          );
    
          for ($i=0; $i < count($ar); $i++) { 
            $key = array_keys($ar)[$i];
            $item = $ar[$key];
    
            if ($key === $name) {
              if ($item[0] === $state) {
                return $item[1];
              }
    
              return $item[0];
            }
          }
    
          return 'Not found';
        }
    
        echo '<div>toggleDevice(‘door’, ‘close’) -> '.toogleDevice('door', 'close').'</div>';
        echo '<div>toggleDevice(‘light’, ‘off’) -> '.toogleDevice('light', 'off').'</div>';
EOF
);
    ?>
    </pre>
    
  </code>
  
</body>
</html>