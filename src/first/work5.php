<?php
    const fontSize="16px";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Практика 1 Задача 5 Зиневич Ян</title>
  <link rel="stylesheet" href="../../style.css">
    <style lang="css">
        p{
            font-size:<?php
                echo fontSize;
            ?>;
        }
    </style>
</head>
<body>
  <?php
    echo "<p><a href='../../index.html'>К содержанию</a></p>";
    
    echo 'Версия PHP: '.PHP_VERSION;

    echo '<br>';

    echo 'Версия ОС: '.PHP_OS;

    echo '<br>';
?>

Мой код
  <div class="script">
    <pre>
    <?php
        echo htmlspecialchars(<<< 'EOF'
        <?php
        const fontSize="16px";
    ?>
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Практика 1 Задача 5 Зиневич Ян</title>
      <link rel="stylesheet" href="../../style.css">
        <style lang="css">
            p{
                font-size:<?php
                    echo fontSize;
                ?>;
            }
        </style>
    </head>

        echo 'Версия PHP: '.PHP_VERSION;

        echo '<br>';
    
        echo 'Версия ОС: '.PHP_OS;
    
        echo '<br>';
EOF
);
    ?>
    </pre>
    
  </code>
  
</body>
</html>