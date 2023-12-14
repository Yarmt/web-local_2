<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <?php
  $pageTitle = "Техника(Веб-разработчик Ярослав)";
  echo "<title>$pageTitle</title>";
  ?>
  <link rel="stylesheet" href="2T.css">
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
        echo '<img src="img_2_1.jpg" alt="Even Second Image">';
    } else {
        echo '<img src="img_2_2.jpg" alt="Odd Second Image">';
    }
    ?>
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

        </tr>
        <tr>
          <td>Оперативная память</td>
          <td><?php echo 6700; ?></td>
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