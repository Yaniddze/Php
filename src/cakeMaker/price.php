<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Практика 6 Зиневич Ян</title>
  <link rel="stylesheet" href="./style.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"></head>
  <style>
    table {
      width: 100%;
      margin: 0;
    }

    td, th {
      padding: 10px;
      text-align:center;
      border: 1px solid black;
    }
  </style>
<body>
  <header>
    <div class="logo">
      <img width="350px" src="./Безымянный.png"> 
    </div>
    <div class="nav">
      <div>
        <a href="./index.html">Главная</a>
      </div>
      <div>
        <a>Прайс</a>
      </div>
      <div>
        <a href="./galery.html">Галерея</a>
      </div>
      <div>
        <a href="./order.html">Заказ</a>
      </div>
      <div>
        <a href="./contacts.html">Контакты</a>
      </div>
    </div>
  </header>
  <main>
    <p>
      <?php
        $price1 = fopen("./content/Price_1.txt", "r") or die("Unable to open file!");
        $file1 = fread($price1,filesize("./content/Price_1.txt"));
        fclose($price1);

        $price2 = fopen("./content/Price2.txt", "r") or die("Unable to open file!");
        $file2 = fread($price2,filesize("./content/Price2.txt"));
        fclose($price2);

        $file1 = str_replace("Внимание!", "<b>Внимание!</b>", $file1);

        echo $file1;

        $splitedFile = explode("\n", $file2);

        echo '<table>';
        echo '<tr><th>Название</th><th>Вес</th><th>Цена</th></tr>';

        for ($i=0; $i < count($splitedFile); $i++) { 
          $element = explode("*", $splitedFile[$i]);

          echo '<tr><td>'.$element[0].'</td><td>'.$element[1].'</td><td>'.$element[2].'</td></tr>';
        }

        echo '</table>';
      ?>
    </p>
  </main>
  <footer>
    <div>
      Cake maker | Chelyabinsk
    </div>
  </footer>
</body>
</html>