<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Практика 5 Задача 14 Зиневич Ян</title>
  <link rel="stylesheet" href="../../style.css">
  <style>
    table {
      width: 100%;
    }
  </style>
</head>
<body>
  <?php
    echo "<p><a href='../../index.html'>К содержанию</a></p>";

    $ar = array(
      'in_array ' => array(
        'проверка наличия элемента в массиве',
        <<< 'EOD'
        
          $os = array("Mac", "NT", "Irix", "Linux");
          if (in_array("Irix", $os)) {
              echo "Got Irix";
          }
          if (in_array("mac", $os)) {
              echo "Got mac";
          }
        
EOD
),
      'array_unshift' => array(
        'добавление элемента в массив в начало',
        <<< 'EOD'
        
          $queue = array("orange", "banana");
          array_unshift($queue, "apple", "raspberry");
          print_r($queue);
        
EOD
),
      'array_push' => array(
        'добавление элемента в массив в конец',
        <<< 'EOD'
        
          $stack = array("orange", "banana");
          array_push($stack, "apple", "raspberry");
          print_r($stack);
        
EOD
),
      'array_splice' => array(
        'Удаляет часть массива и заменяет её чем-нибудь ещё',
        <<< 'EOD'
        
          $input = array("red", "green", "blue", "yellow");
          array_splice($input, 2);
          var_dump($input);

          $input = array("red", "green", "blue", "yellow");
          array_splice($input, 1, -1);
          var_dump($input);

          $input = array("red", "green", "blue", "yellow");
          array_splice($input, 1, count($input), "orange");
          var_dump($input);

          $input = array("red", "green", "blue", "yellow");
          array_splice($input, -1, 1, array("black", "maroon"));
          var_dump($input);
       
EOD
),
      'array_unique' => array(
        'получение уникальных значений',
        <<< 'EOD'
        
          $array = [];
          $array = array_map( 'unserialize', array_unique( 
            array_map( 'serialize', $array )
          ));
       
EOD
),
      'array_keys' => array(
        'получение ключей ассоциативного массива',
        <<< 'EOD'
        
          $keys = array_keys(array(
            "Ivan" => 19,
            "Vika" => 15,
          ))
        
EOD
),
      'shuffle' => array(
        'получение ключей ассоциативного массива',
        <<< 'EOD'
        
          $numbers = range(1, 20);
          srand((float)microtime() * 1000000);
          shuffle($numbers);
          while (list(, $number) = each($numbers)) {
              echo "$number ";
          }
        
EOD
),
      'array_reverse' => array(
        'переворачивание массива',
        <<< 'EOD'
        
          $input  = array("php", 4.0, array("green", "red"));
          $reversed = array_reverse($input);
          $preserved = array_reverse($input, true);

          print_r($input);
          print_r($reversed);
          print_r($preserved);
        
EOD
),
      'sort' => array(
        'сортировка массива',
        <<< 'EOD'
        
          $fruits = array("lemon", "orange", "banana", "apple");
          sort($fruits);
          reset($fruits);
          while (list($key, $val) = each($fruits)) {
              echo "fruits[" . $key . "] = " . $val . "\n";
          }
       
EOD
),
      'array_slice' => array(
        'возвращает последовательность элементов массива array, определённую параметрами offset и length',
        <<< 'EOD'
        
          $input = array("a", "b", "c", "d", "e");

          $output = array_slice($input, 2);      // returns "c", "d", and "e"
          $output = array_slice($input, -2, 1);  // returns "d"
          $output = array_slice($input, 0, 3);   // returns "a", "b", and "c"

          // note the differences in the array keys
          print_r(array_slice($input, 2, -1));
          print_r(array_slice($input, 2, -1, true));
        
EOD
),
      'split' => array(
        'разделение строки на элементы массива',
        <<< 'EOD'
        
          $date = "04/30/1973";
          list($month, $day, $year) = split('[/.-]', $date);
          echo "Месяц: $month; День: $day; Год: $year<br />\n";
        
EOD
),
      'implode' => array(
        'вывод элементов массива в строку',
        <<< 'EOD'
          $array = array('имя', 'почта', 'телефон');
          $comma_separated = implode(",", $array);

          echo $comma_separated; // имя,почта,телефон

          // Пустая строка при использовании пустого массива:
          var_dump(implode('hello', array())); // string(0) ""
        
EOD
),
    );

    echo '<table border="1px solid black">';
    echo '<tr><th>Функция</th><th>Назначение</th><th>Пример</th></tr>';

    for ($i=0; $i < count($ar); $i++) {
      $key = array_keys($ar)[$i];
      $value = $ar[$key]; 
      echo '<tr><td>'.$key.'</td><td>'.$value[0].'</td><td>';
      echo $value[1];
      echo '</td></tr>';
    }    

    echo '</table>';
?>
Мой код
  <div class="script">
    <pre>
    <?php
        echo htmlspecialchars(<<< 'EOL'
        $ar = array(
          'in_array ' => array(
            'проверка наличия элемента в массиве',
            <<< 'EOD'
            
              $os = array("Mac", "NT", "Irix", "Linux");
              if (in_array("Irix", $os)) {
                  echo "Got Irix";
              }
              if (in_array("mac", $os)) {
                  echo "Got mac";
              }
            
    EOD
    ),
          'array_unshift' => array(
            'добавление элемента в массив в начало',
            <<< 'EOD'
            
              $queue = array("orange", "banana");
              array_unshift($queue, "apple", "raspberry");
              print_r($queue);
            
    EOD
    ),
          'array_push' => array(
            'добавление элемента в массив в конец',
            <<< 'EOD'
            
              $stack = array("orange", "banana");
              array_push($stack, "apple", "raspberry");
              print_r($stack);
            
    EOD
    ),
          'array_splice' => array(
            'Удаляет часть массива и заменяет её чем-нибудь ещё',
            <<< 'EOD'
            
              $input = array("red", "green", "blue", "yellow");
              array_splice($input, 2);
              var_dump($input);
    
              $input = array("red", "green", "blue", "yellow");
              array_splice($input, 1, -1);
              var_dump($input);
    
              $input = array("red", "green", "blue", "yellow");
              array_splice($input, 1, count($input), "orange");
              var_dump($input);
    
              $input = array("red", "green", "blue", "yellow");
              array_splice($input, -1, 1, array("black", "maroon"));
              var_dump($input);
           
    EOD
    ),
          'array_unique' => array(
            'получение уникальных значений',
            <<< 'EOD'
            
              $array = [];
              $array = array_map( 'unserialize', array_unique( 
                array_map( 'serialize', $array )
              ));
           
    EOD
    ),
          'array_keys' => array(
            'получение ключей ассоциативного массива',
            <<< 'EOD'
            
              $keys = array_keys(array(
                "Ivan" => 19,
                "Vika" => 15,
              ))
            
    EOD
    ),
          'shuffle' => array(
            'получение ключей ассоциативного массива',
            <<< 'EOD'
            
              $numbers = range(1, 20);
              srand((float)microtime() * 1000000);
              shuffle($numbers);
              while (list(, $number) = each($numbers)) {
                  echo "$number ";
              }
            
    EOD
    ),
          'array_reverse' => array(
            'переворачивание массива',
            <<< 'EOD'
            
              $input  = array("php", 4.0, array("green", "red"));
              $reversed = array_reverse($input);
              $preserved = array_reverse($input, true);
    
              print_r($input);
              print_r($reversed);
              print_r($preserved);
            
    EOD
    ),
          'sort' => array(
            'сортировка массива',
            <<< 'EOD'
            
              $fruits = array("lemon", "orange", "banana", "apple");
              sort($fruits);
              reset($fruits);
              while (list($key, $val) = each($fruits)) {
                  echo "fruits[" . $key . "] = " . $val . "\n";
              }
           
    EOD
    ),
          'array_slice' => array(
            'возвращает последовательность элементов массива array, определённую параметрами offset и length',
            <<< 'EOD'
            
              $input = array("a", "b", "c", "d", "e");
    
              $output = array_slice($input, 2);      // returns "c", "d", and "e"
              $output = array_slice($input, -2, 1);  // returns "d"
              $output = array_slice($input, 0, 3);   // returns "a", "b", and "c"
    
              // note the differences in the array keys
              print_r(array_slice($input, 2, -1));
              print_r(array_slice($input, 2, -1, true));
            
    EOD
    ),
          'split' => array(
            'разделение строки на элементы массива',
            <<< 'EOD'
            
              $date = "04/30/1973";
              list($month, $day, $year) = split('[/.-]', $date);
              echo "Месяц: $month; День: $day; Год: $year<br />\n";
            
    EOD
    ),
          'implode' => array(
            'вывод элементов массива в строку',
            <<< 'EOD'
              $array = array('имя', 'почта', 'телефон');
              $comma_separated = implode(",", $array);
    
              echo $comma_separated; // имя,почта,телефон
    
              // Пустая строка при использовании пустого массива:
              var_dump(implode('hello', array())); // string(0) ""
            
    EOD
    ),
        );
    
        echo '<table border="1px solid black">';
        echo '<tr><th>Функция</th><th>Назначение</th><th>Пример</th></tr>';
    
        for ($i=0; $i < count($ar); $i++) {
          $key = array_keys($ar)[$i];
          $value = $ar[$key]; 
          echo '<tr><td>'.$key.'</td><td>'.$value[0].'</td><td>';
          echo $value[1];
          echo '</td></tr>';
        }    
    
        echo '</table>';
EOL
);
?>
    </pre>
    
  </code>
  
</body>
</html>