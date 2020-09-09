<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Практика 2 Задача 2 Зиневич Ян</title>
  <link rel="stylesheet" href="../../style.css">
</head>
<body>
  <?php
    echo "<p><a href='../../index.html'>К содержанию</a></p>";
    

    function myFunc($x){
        return (abs(sin(pow($x,4)))/pow(cos($x), 7)) * log(abs($x), 10);
    }

    for ($i=0; $i < 25; $i++) { 
        $a = rand(-25, 25);
        echo 'x = '.$a.'; y = '.number_format(myFunc($a)).'; <br>';
    }
?>

Мой код
  <div class="script">
    <pre>
    <?php
        echo htmlspecialchars(<<< 'EOF'
        

    function myFunc($x){
        return (abs(sin(pow($x,4)))/pow(cos($x), 7)) * log(abs($x), 10);
    }

    for ($i=0; $i < 25; $i++) { 
        $a = rand(-25, 25);
        echo 'x = '.$a.'; y = '.number_format(myFunc($a)).'; <br>';
    }
EOF
);
    ?>
    </pre>
    
  </code>
  
</body>
</html>