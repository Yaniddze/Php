<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Практика 6 Зиневич Ян</title>
  <link rel="stylesheet" href="./style.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <style>
    main > div {
      display: flex;
    }

    main > div > div {
      margin: 10px auto;
    }

    main > div > div > div {
      margin: 10px auto;
    }
  </style>
</head>
<body>
  <header>
    <div class="logo">
      <img width="350px" src="./Безымянный.png"> 
    </div>
    <div class="nav">
      <div>
        <a href="./index.php">Главная</a>
      </div>
      <div>
        <a href="./price.php">Прайс</a>
      </div>
      <div>
        <a href="./galery.html">Галерея</a>
      </div>
      <div>
        <a href="./order.html">Заказ</a>
      </div>
      <div>
        <a>Контакты</a>
      </div>
    </div>
  </header>
  <main>
      <?php
        $price1 = fopen("./content/Contacts.txt", "r") or die("Unable to open file!");
        $file1 = fread($price1,filesize("./content/Contacts.txt"));
        fclose($price1);

        echo $file1;
      ?>
    <p>
      Адрес: Красная 63,к.6 <br>
      Университетская Набережная, 40 <br>
      Телефоны: +7 (9000) 66-555-1, +7 (351) 225-06-20. <br>
    </p>
    <div>
      <div>
        <div>
          <img src='./content/Адрес1.png' width="400px">
        </div>
        
        <div>
          <img src='./content/Адрес2.png' width="400px">
        </div>
        
        <div>
          <img src='./content/Адрес3.png' width="400px">
        </div>
      </div>
    </div>
    
  </main>
  <footer>
    <div>
      Cake maker | Chelyabinsk
    </div>
  </footer>
</body>
</html>