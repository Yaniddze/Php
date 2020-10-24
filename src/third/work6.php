<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Практика 5 Задача 6 Зиневич Ян</title>
  <link rel="stylesheet" href="../../style.css">
</head>
<body>
  <?php
    echo "<p><a href='../../index.html'>К содержанию</a></p>";
    
    $gr = 
        array(
            "Группа 1" => array(
                "Иван",
                "asd",
                "dsa",
                "123",
                "dsa",
                "dfghghgjhg",
            ),
            "Группа 2" => array(
                "Иван",
                "123",
                "dsa",
                "dfghghgjhg",
            ),
        );

    echo '<pre>'.print_r($gr, true).'</pre>';

    echo '<div> В группе 1 '.count($gr["Группа 1"]).' человек</div>';
    echo '<div> В группе 2 '.count($gr["Группа 2"]).' человек</div>';
?>
Мой код
  <div class="script">
    <pre>
    <?php
        echo htmlspecialchars(<<< 'EOF'
        $gr = 
        array(
            "Группа 1" => array(
                "Иван",
                "asd",
                "dsa",
                "123",
                "dsa",
                "dfghghgjhg",
            ),
            "Группа 2" => array(
                "Иван",
                "123",
                "dsa",
                "dfghghgjhg",
            ),
        );

    echo '<pre>'.print_r($gr, true).'</pre>';

    echo '<div> В группе 1 '.count($gr["Группа 1"]).' человек</div>';
    echo '<div> В группе 2 '.count($gr["Группа 2"]).' человек</div>';
?>
EOF
);
    ?>
    </pre>
    
  </code>
  
</body>
</html>