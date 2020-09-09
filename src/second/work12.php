<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Практика 2 Задача 12 Зиневич Ян</title>
  <link rel="stylesheet" href="../../style.css">
</head>
<body>
  <?php
    echo "<p><a href='../../index.html'>К содержанию</a></p>";

    $t = -13;

    class Country {
        public $title;
        public $temperature;

        function __construct($title, $temperature)
        {
            $this->title = $title;
            $this->temperature = $temperature;
        }
    }

    echo 'Температура Челябинска: '.$t.'.<br>';

    $countries = [
        new Country('Норвегия', rand(-5, -20)),
        new Country('Швеция', rand(-5, -20)),
        new Country('Финляндия', rand(-5, -20)),
    ];

    for ($i=0; $i < 3; $i++) { 
        $country = $countries[$i];

        if ($country->temperature < $t) {
            echo $country->title.' холоднее чем Челябинск ('.$country->temperature.').<br>';
        } else {
            echo $country->title.' теплее чем Челябинск ('.$country->temperature.').<br>';
        }
    }
?>

Мой код
  <div class="script">
    <pre>
    <?php
        echo htmlspecialchars(<<< 'EOF'
        
        $t = -13;

    class Country {
        public $title;
        public $temperature;

        function __construct($title, $temperature)
        {
            $this->title = $title;
            $this->temperature = $temperature;
        }
    }

    echo 'Температура Челябинска: '.$t.'.<br>';

    $countries = [
        new Country('Норвегия', rand(-5, -20)),
        new Country('Швеция', rand(-5, -20)),
        new Country('Финляндия', rand(-5, -20)),
    ];

    for ($i=0; $i < 3; $i++) { 
        $country = $countries[$i];

        if ($country->temperature < $t) {
            echo $country->title.' холоднее чем Челябинск ('.$country->temperature.').<br>';
        } else {
            echo $country->title.' теплее чем Челябинск ('.$country->temperature.').<br>';
        }
    }
EOF
);
    ?>
    </pre>
    
  </code>
  
</body>
</html>