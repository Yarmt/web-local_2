<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Веб-разработчик Ярослав</title>
  <link rel="stylesheet" href="1T.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  
</head>
<body>
  <header>
    <nav>
      <a href="#section1">Раздел с котиками</a>
      <a href="#section2">Раздел с технологиями</a>
      <a href="#section3">Раздел с музыкой</a>
    </nav>
  </header>
  
  <main>
    <img src=img_1.jpeg alt="Фотография" width="600" height="450">
    <img scr=img_2.jpeg alt="Фотография" width="500" height="450">
    
    <table>
      <thead>
        <tr>
          <?php 
          $naming = "Название оборудования";
          echo '<th>'.  $naming; '</th>'
          ?>
          <?php 
          $price = "Цена";
          echo '<th>'.  $price; '</th>'
          ?>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Центральный процессор</td>
          <td><?php echo 33000; ?></td>
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
          <td>Оперативная память</td>
          <td><?php echo 6700; ?></td>
        </tr>
      </tbody>
    </table>
  </main>
  <section id="section1">
    <a href="https://httpbin.org/post">Ссылка на раздел с доп.информацией</a>
  </section>
  
  <footer >
    <p>Контактная информация</p>
    <p>© <?php echo date("Y"); ?> Шминке Я.Д. Московский Политех. Все права защищены.</p>
  </footer>
  
</body>
</html>

