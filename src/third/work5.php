<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Практика 5 Задача 5 Зиневич Ян</title>
  <link rel="stylesheet" href="../../style.css">
</head>
<body>
  <?php
    echo "<p><a href='../../index.html'>К содержанию</a></p>";
    
    $items = array(
        array(
            "Title" => "Contact", 
            "Count" => 56,
            "Price" => 1100
        ),
        array(
            "Title" => "Contact1", 
            "Count" => 56,
            "Price" => 1200
        ),
        array(
            "Title" => "Contact2", 
            "Count" => 563,
            "Price" => 122
        ),
        array(
            "Title" => "Contact3", 
            "Count" => 56,
            "Price" => 155
        ),
    );

    echo '<table border="1px solid black"><tr><th>Наименование</th><th>Кол-во</th><th>Цена</th><th>Стоимость</th></tr>';

    foreach ($items as $item) {
        echo '<tr><td>'.$item["Title"].'</td><td>'.$item["Count"].'</td><td>'.$item["Price"].'</td><td>'.($item["Price"] * $item["Count"]).'</td></tr>';
    };

    echo '</table>';

    $price = 0;
    foreach ($items as $item) {
        $price += $item["Price"] * $item["Count"];
    };

    echo '<br> Всего: '.$price.'<br>';
?>
Мой код
  <div class="script">
    <pre>
    <?php
        echo htmlspecialchars(<<< 'EOF'
        $items = array(
            array(
                "Title" => "Contact", 
                "Count" => 56,
                "Price" => 1100
            ),
            array(
                "Title" => "Contact1", 
                "Count" => 56,
                "Price" => 1200
            ),
            array(
                "Title" => "Contact2", 
                "Count" => 563,
                "Price" => 122
            ),
            array(
                "Title" => "Contact3", 
                "Count" => 56,
                "Price" => 155
            ),
        );
    
        echo '<table border="1px solid black"><tr><th>Наименование</th><th>Кол-во</th><th>Цена</th><th>Стоимость</th></tr>';
    
        foreach ($items as $item) {
            echo '<tr><td>'.$item["Title"].'</td><td>'.$item["Count"].'</td><td>'.$item["Price"].'</td><td>'.($item["Price"] * $item["Count"]).'</td></tr>';
        };
    
        echo '</table>';
    
        $price = 0;
        foreach ($items as $item) {
            $price += $item["Price"] * $item["Count"];
        };
    
        echo '<br> Всего: '.$price.'<br>';
EOF
);
    ?>
    </pre>
    
  </code>
  
</body>
</html>