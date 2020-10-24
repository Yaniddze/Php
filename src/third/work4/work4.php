<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Практика 5 Задача 4 Зиневич Ян</title>
  <link rel="stylesheet" href="../../style.css">
</head>
<body>
  <?php
    echo "<p><a href='../../../index.html'>К содержанию</a></p>";
    
    $pages = array(
        array("Title" => "Contact", "Src" => "./contacts.html"),
        array("Title" => "about", "Src" => "./about.html"),
    );

    foreach($pages as $page) {
        echo '<div><a href='.$page["Src"].'> '.$page["Title"].' </a></div>';
    }
?>
Мой код
  <div class="script">
    <pre>
    <?php
        echo htmlspecialchars(<<< 'EOF'
        $pages = array(
            array("Title" => "Contact", "Src" => "./contacts.html"),
            array("Title" => "about", "Src" => "./about.html"),
        );
    
        foreach($pages as $page) {
            echo '<div><a href='.$page["Src"].'> '.$page["Title"].' </a></div>';
        }
EOF
);
    ?>
    </pre>
    
  </code>
  
</body>
</html>