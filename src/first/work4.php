<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Практика 1 Задача 4 Зиневич Ян</title>
  <link rel="stylesheet" href="../../style.css">
</head>
<body>
  <?php
    echo "<p><a href='../../index.html'>К содержанию</a></p>";
    
    $prod1 = "Видеокамера экшн GoPro HERO5 Black Edition (CHDHX-502)";
        $prod2 = "4K-Телевизор LG 43UJ639V 43(109см)";
        $prod3 = "Утюг Philips GC3810/27";
    
        $price1 = 200;
        $price2 = 400;
        $price3 = 250;
    
        $price = ($price1 + $price2 + $price3) / 3;
    
        echo <<< EOD
        <table border="1px solid black">
            <tr>
                <th>
                    Товар
                </th>
                <th>
                    Цена (руб.)
                </th>
            </tr>
            <tr>
                <td>
                    $prod1
                </td>
                <td>
                    $price1
                </td>
            </tr>
            <tr>
                <td>
                    $prod2
                </td>
                <td>
                    $price2
                </td>
            </tr>
            <tr>
                <td>
                    $prod3
                </td>
                <td>
                    $price3
                </td>
            </tr>
            
        </table>

EOD;
    echo '<div>Средняя цена: ';
    printf('%d', $price);
    echo '</div>';

    echo '<div>Самый дорогой: '.max($price1, $price2, $price3).'</div>';
    echo '<div>Самый дешевый: '.min($price1, $price2, $price3).'</div>';
  ?>

Мой код
  <div class="script">
    <pre>
    <?php
        echo htmlspecialchars(<<< 'EOF'
        $prod1 = "Видеокамера экшн GoPro HERO5 Black Edition (CHDHX-502)";
        $prod2 = "4K-Телевизор LG 43UJ639V 43(109см)";
        $prod3 = "Утюг Philips GC3810/27";
    
        $price1 = 200;
        $price2 = 400;
        $price3 = 250;
    
        $price = ($price1 + $price2 + $price3) / 3;
    
        echo <<< EOD
        <table border="1px solid black">
            <tr>
                <th>
                    Товар
                </th>
                <th>
                    Цена (руб.)
                </th>
            </tr>
            <tr>
                <td>
                    $prod1
                </td>
                <td>
                    $price1
                </td>
            </tr>
            <tr>
                <td>
                    $prod2
                </td>
                <td>
                    $price2
                </td>
            </tr>
            <tr>
                <td>
                    $prod3
                </td>
                <td>
                    $price3
                </td>
            </tr>
            
        </table>
        EOD;

        echo '<div>Средняя цена: ';
        printf('%d', $price);
        echo '</div>';

        echo '<div>Самый дорогой: '.max($price1, $price2, $price3).'</div>';
        echo '<div>Самый дешевый: '.min($price1, $price2, $price3).'</div>';
  
EOF
);
    ?>
    </pre>
    
  </code>
  
</body>
</html>