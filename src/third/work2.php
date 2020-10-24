<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Практика 5 Задача 2 Зиневич Ян</title>
  <link rel="stylesheet" href="../../style.css">
<style>
    .cll {
        border: 1px solid red;
        background: green;
        width: 300px;
        padding: 10px;
    }

    .cll div {
        color: blue;
    }

    .cll div:last-child {
        color: red;
    }
</style>
</head>
<body>
  <?php
    echo "<p><a href='../../index.html'>К содержанию</a></p>";
    
    $ar = array();

    $ar[0] = 'Понедельник';
    $ar[1] = 'Вторник';
    $ar[2] = 'Среда';
    $ar[3] = 'Четверг';
    $ar[4] = 'Пятница';
    $ar[5] = 'Суббота';
    $ar[6] = 'Воскресенье';

    echo '<div class="cll">';

    for ($i = 0; $i < 7; $i++) {
        echo '<div>'.$ar[$i].'</div>';
    }

    echo '</div>';

    echo '<pre>'.print_r($ar, true).'</pre>';
?>

Мой код
  <div class="script">
    <pre>
    <?php
        echo htmlspecialchars(<<< 'EOF'
        $ar = array();

    $ar[0] = 'Понедельник';
    $ar[1] = 'Вторник';
    $ar[2] = 'Среда';
    $ar[3] = 'Четверг';
    $ar[4] = 'Пятница';
    $ar[5] = 'Суббота';
    $ar[6] = 'Воскресенье';

    echo '<div class="cll">';

    for ($i = 0; $i < 7; $i++) {
        echo '<div>'.$ar[$i].'</div>';
    }

    echo '</div>';

    echo '<pre>'.print_r($ar, true).'</pre>';
EOF
);
    ?>
    </pre>
    
  </code>
  
</body>
</html>