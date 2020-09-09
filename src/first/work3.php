<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Практика 1 Задача 3 Зиневич Ян</title>
  <link rel="stylesheet" href="../../style.css">
</head>
<body>
  <?php
    echo "<p><a href='../../index.html'>К содержанию</a></p>";
    
    $name = 'Ян';

    echo 'Поздравляю,  '.$name.', Вы только что выиграли 1 000 000 японских йен. Забрать вы их можете по адресу  г. Токио, улица Красных Самураев, д.15('.$name.').';
  
    echo '<br>';
  
    $age = 19;

    $toOutput = 'Мой возраст'.$age.' лет.';

    echo '<br>';

    echo $toOutput;

    $num = 2.3333333333;
    echo number_format($num, 3);

    echo '<br>';

    $bool = true;

    echo $bool;

    echo '<br>';

    $bool = false;

    $null = null;

    echo null;

    echo '<br>';
  ?>

Мой код
  <div class="script">
    <pre>
$name = 'Ян';

echo 'Поздравляю,  '.$name.', Вы только что выиграли 1 000 000 японских йен. Забрать вы их можете по адресу  г. Токио, улица Красных Самураев, д.15('.$name.').';


$age = 19;

$toOutput = 'Мой возраст'.$age.' лет.';


echo $toOutput;

$num = 2.3333333333;
echo number_format($num, 3);


$bool = true;

echo $bool;


$bool = false;

$null = null;

echo null;
    </pre>
    
  </code>
  
</body>
</html>