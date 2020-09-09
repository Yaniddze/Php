<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Практика 2 Задача 11 Зиневич Ян</title>
  <link rel="stylesheet" href="../../style.css">
</head>
<body>
  <?php
    echo "<p><a href='../../index.html'>К содержанию</a></p>";

    class Tour{
        public $money;
        public $longtitude;

        function __construct($money,$longtitude)
        {
            $this->money =$money;
            $this->longtitude = $longtitude;
        }

        function print(){
            return 'Тур: стоимость: '.$this->money.'; дней: '.$this->longtitude.';';
        }
    }

    $moneys = rand(100,200);
    $days = rand(1, 10);

    echo 'Денег: '.$moneys.'; Дней: '.$days.';<br>';

    for ($i=0; $i < 3; $i++) { 
        $tour = new Tour(rand(100, 200), rand(3,10));
        echo $tour->print();

        if ($tour->longtitude <= $days && $tour->money <= $moneys){
            echo ' Могу поехать!';
        }
        else {
            echo ' Не могу поехать';
        }

        echo '<br>';
    }
?>

Мой код
  <div class="script">
    <pre>
    <?php
        echo htmlspecialchars(<<< 'EOF'
        
        class Tour{
            public $money;
            public $longtitude;
    
            function __construct($money,$longtitude)
            {
                $this->money =$money;
                $this->longtitude = $longtitude;
            }
    
            function print(){
                return 'Тур: стоимость: '.$this->money.'; дней: '.$this->longtitude.';';
            }
        }
    
        $moneys = rand(100,200);
        $days = rand(1, 10);
    
        echo 'Денег: '.$moneys.'; Дней: '.$days.';<br>';
    
        for ($i=0; $i < 3; $i++) { 
            $tour = new Tour(rand(100, 200), rand(3,10));
            echo $tour->print();
    
            if ($tour->longtitude <= $days && $tour->money <= $moneys){
                echo ' Могу поехать!';
            }
            else {
                echo ' Не могу поехать';
            }
    
            echo '<br>';
        }
EOF
);
    ?>
    </pre>
    
  </code>
  
</body>
</html>