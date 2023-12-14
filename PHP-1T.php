<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <?php
  $pageTitle = "Котики(Веб-разработчик Ярослав)";
  echo "<title>$pageTitle</title>";
  ?>
  <!-- <title>Веб-разработчик Ярослав</title> -->
  <link rel="stylesheet" href="1T.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  
</head>
<body>
  <header>
    <nav>
      <a href="PHP-1T.php#nav">Раздел с котиками</a>
      <a href="php2.php#nav">Раздел с технологиями</a>
      <a href="php3.php#nav">Раздел с музыкой</a>
    </nav>

  </header>
  
  <main>
  <?php
  $currentTime = date("s");
  if ($currentTime % 2 == 0) {
      echo '<img src="img_1.jpeg" alt="Even Second Image">';
  } else {
      echo '<img src="img_2.jpeg" alt="Odd Second Image">';
  }
  ?>
  <?php /* $imagePath = 'img_1.jpeg';
  echo "<img src='$imagePath' alt='фотография'>";
  ?>
  
  <?php
  $imagePath = 'img_2.jpeg';
  echo "<img src='$imagePath' alt='фотография'>";
  */ ?>
    <!-- <img src=img_1.jpeg alt="Фотография" width="600" height="450"> -->
    <!-- <img scr=img_2.jpeg alt="Фотография" width="500" height="450"> -->


    
    <table>
      <thead>
        <tr>
          <?php 
          $naming = "Животное";
          echo '<th>'.  $naming; '</th>'
          ?>
          <?php 
          $price = "Размер";
          echo '<th>'.  $price; '</th>'
          ?>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Тигр</td>
          <td><?php echo "очень большой"; ?></td>
          <!-- <?php //тег для php страниц  ?> -->
          <!-- <?php //echo = output value  ?> -->
          <!-- <?php //$ = value variable  ?> -->
          <!-- <?php // $_GET['video'] = Global variables ?> -->
          <!-- <?php // $_add = functions($a,$b)  ?> -->
          <!-- <?php // return $a*$b = first-class functions   ?> -->
          <!-- <?php // return $a*$b = first-class functions   ?> -->
          <!-- <?php // array_map(function ($a,$b){ return $a*$b; }) = anonymous functions   ?> -->

        </tr>
        <tr>
          <td>Леопард</td>
          <td><?php echo "большой"; ?></td>
        </tr>
      </tbody>
    </table>
  </main>
  <!-- <section id="section1"> -->
  <!--   <a href="https://httpbin.org/post">Ссылка на раздел с доп.информацией</a> -->
  <!-- </section> -->
  
  <footer >
    <p>Контактная информация</p>
    <?php
    date_default_timezone_set('Europe/Moscow');
    $currentTime = date("d.m.Y в H:i:s");
    echo "Данная страница сформирована на $currentTime.<br>";
    ?>
    <p>© <?php echo date("Y"); ?> Шминке Я.Д. Московский Политех. Все права защищены.</p>
  </footer>
  
</body>
</html>

