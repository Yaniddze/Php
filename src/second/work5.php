<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Практика 2 Задача 5 Зиневич Ян</title>
  <link rel="stylesheet" href="../../style.css">
</head>
<body>
  <?php
    echo "<p><a href='../../index.html'>К содержанию</a></p>";
    
    class Product {
        public $title;
        public $count;
        public $price;
        public $totalPrice;

        function __construct($title, $count, $price)
        {
            $this->title = $title;
            $this->count = $count;
            $this->price = $price;
            $this->totalPrice = $price * $count;
        }

        function print(){
            return '<tr><td>'.$this->title.'</td><td>'.$this->count.'</td><td>'.$this->price.'</td><td>'.$this->totalPrice.'</td></tr>';
        }
    }

    $prod1 = new Product('Мягкая игрушка', 56, 1200.20);
    $prod2 = new Product('Мягкая игрушка 2', 10, 120.20);
    $prod3 = new Product('Мягкая игрушка', 36, 2300.20);
    $prod4 = new Product('Мягкая игрушка', 12, 1000.20);

    echo '<table border="1px solid black">';
    echo '<tr><th>Наименование</th><th>Кол-во</th><th>Цена</th><th>Всего</th></tr>';

    echo $prod1->print();
    echo $prod2->print();
    echo $prod3->print();
    echo $prod4->print();

    echo '</table>';

    echo 'Всего: '.number_format($prod1->totalPrice + $prod2->totalPrice + $prod3->totalPrice + $prod4->totalPrice).'<br>';
?>

Мой код
  <div class="script">
    <pre>
    <?php
        echo htmlspecialchars(<<< 'EOF'
        
        
    class Product {
        public $title;
        public $count;
        public $price;
        public $totalPrice;

        function __construct($title, $count, $price)
        {
            $this->title = $title;
            $this->count = $count;
            $this->price = $price;
            $this->totalPrice = $price * $count;
        }

        function print(){
            return '<tr><td>'.$this->title.'</td><td>'.$this->count.'</td><td>'.$this->price.'</td><td>'.$this->totalPrice.'</td></tr>';
        }
    }

    $prod1 = new Product('Мягкая игрушка', 56, 1200.20);
    $prod2 = new Product('Мягкая игрушка 2', 10, 120.20);
    $prod3 = new Product('Мягкая игрушка', 36, 2300.20);
    $prod4 = new Product('Мягкая игрушка', 12, 1000.20);

    echo '<table border="1px solid black">';
    echo '<tr><th>Наименование</th><th>Кол-во</th><th>Цена</th><th>Всего</th></tr>';

    echo $prod1->print();
    echo $prod2->print();
    echo $prod3->print();
    echo $prod4->print();

    echo '</table>';

    echo 'Всего: '.number_format($prod1->totalPrice + $prod2->totalPrice + $prod3->totalPrice + $prod4->totalPrice).';';
EOF
);
    ?>
    </pre>
    
  </code>
  
</body>
</html>