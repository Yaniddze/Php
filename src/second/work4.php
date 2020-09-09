<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Практика 2 Задача 4 Зиневич Ян</title>
  <link rel="stylesheet" href="../../style.css">
</head>
<body>
  <?php
    echo "<p><a href='../../index.html'>К содержанию</a></p>";
    function calc($n, $x) {
        return 5 * $x + 2 * $n;
    }

    $XConst = rand(23,24) + rand(0,10)/10;
    
    echo '<table border="1px solid black"><tr><th>an</th><th>an=5x+2n</th></tr>';

    for ($i=1; $i <= 10; $i++) { 
        echo '<tr><td>a'.$i.'</td><td>'.calc($XConst, $i).'</td></tr>';
    }

    echo '</table>'
?>

Мой код
  <div class="script">
    <pre>
    <?php
        echo htmlspecialchars(<<< 'EOF'
        function calc($n, $x) {
            return 5 * $x + 2 * $n;
        }
    
        $XConst = rand(23,24) + rand(0,10)/10;
        
        echo '<table border="1px solid black"><tr><th>an</th><th>an=5x+2n</th></tr>';
    
        for ($i=1; $i <= 10; $i++) { 
            echo '<tr><td>a'.$i.'</td><td>'.calc($XConst, $i).'</td></tr>';
        }
    
        echo '</table>'
EOF
);
    ?>
    </pre>
    
  </code>
  
</body>
</html>