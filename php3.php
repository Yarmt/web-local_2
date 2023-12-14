<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <?php
  $pageTitle = "Музыка(Веб-разработчик Ярослав)";
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
      echo '<img src="img_3_1.jpeg" alt="Even Second Image">';
  } else {
      echo '<img src="img_3_2.jpeg" alt="Odd Second Image">';
  }
  ?>


    
    <table>
      <thead>
        <tr>
          <?php 
          $naming = "Название группы";
          echo '<th>'.  $naming; '</th>'
          ?>
          <?php 
          $price = "Песня";
          echo '<th>'.  $price; '</th>'
          ?>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Depeche Mode</td>
          <td><?php echo "Enjoy the silence"; ?></td>

        </tr>
        <tr>
          <td>Сплин</td>
          <td><?php echo "Выхода нет"; ?></td>
        </tr>
      </tbody>
    </table>
  </main>

  
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