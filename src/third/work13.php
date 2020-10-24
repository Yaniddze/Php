<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Практика 5 Задача 13 Зиневич Ян</title>
  <link rel="stylesheet" href="../../style.css">
</head>
<body>
  <?php
    echo "<p><a href='../../index.html'>К содержанию</a></p>";

    function getAdults($array) {
      $result = array();
      
      for ($i=0; $i < count($array); $i++) { 
        $key = array_keys($array)[$i];
        $item = $array[$key];

        if ($item > 18) {
          $result[$key] = $item;
        }
      }

      return $result;
    }


    print_r(getAdults(array(
      "Ivan" => 19,
      "Vika" => 15,
    )));

    echo '<br>';
?>
Мой код
  <div class="script">
    <pre>
    <?php
        echo htmlspecialchars(<<< 'EOF'
        function getAdults($array) {
          $result = array();
          
          for ($i=0; $i < count($array); $i++) { 
            $key = array_keys($array)[$i];
            $item = $array[$key];
    
            if ($item > 18) {
              $result[$key] = $item;
            }
          }
    
          return $result;
        }
    
    
        print_r(getAdults(array(
          "Ivan" => 19,
          "Vika" => 15,
        )));
EOF
);
    ?>
    </pre>
    
  </code>
  
</body>
</html>