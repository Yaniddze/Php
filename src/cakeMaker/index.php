<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Практика 6 Зиневич Ян</title>
  <link rel="stylesheet" href="./style.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"></head>
<body>
  
  <header>
    <div class="logo">
      <img width="350px" src="./Безымянный.png"> 
    </div>
    <div class="nav">
      <div>
        <a>Главная</a>
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
        <a href="./contacts.php">Контакты</a>
      </div>
    </div>
  </header>
  <main>
    <div class="slider">
      <div class="slider__imgs">
        <div class="slider__imgs-1">
          <img class="active" height="300px" src="https://static.1000.menu/img/content/25504/pirog-iz-sdobnogo-testa_1518867453_1_max.jpg" />
          <img class="no_active" height="300px" src="https://img.7dach.ru/image/600/15/40/11/2018/12/29/45ccdf.jpg" />
          <img class="no_active" height="300px" src="https://www.povarenok.ru/data/cache/2016sep/16/12/1709205_60985-710x550x.jpg" />
        </div>
      </div>
      <div class="slider__buttons__holder">
        <div class="slider__buttons">
  
          <div class="active">
          </div>
  
          <div class="not_active">
          </div>
  
          <div class="not_active">
          </div>
  
        </div>
      </div>
    </div>
    <h2>«Есть идея? Превратим ее в торт»</h2>
    <?php
        $price1 = fopen("./content/About.txt", "r") or die("Unable to open file!");
        $file1 = fread($price1,filesize("./content/About.txt"));
        fclose($price1);

        $file1 = str_replace("\n", "<br>", $file1);

        echo $file1;

        
      ?>
  </main>
  <footer>
    <div>
      Cake maker | Chelyabinsk
    </div>
  </footer>

  <script src="./scripts.js"></script>
</body>
</html>