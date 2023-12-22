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
      <a href="<?php echo 'PHP-1T.php'; ?>
      " class="<?php echo 'selected_menu'; ?>">Раздел с котиками</a>
      <a href="<?php echo 'php2.php'; ?>
      " class="<?php echo 'selected_menu'; ?>">Раздел с технологиями</a>
      <a href="<?php echo 'php3.php'; ?>
      " class="<?php echo 'selected_menu'; ?>">Раздел с музыкой</a>
    </nav>

  </header>
  
  <main>
  <?php
$array = ['четыре', 'три','два','один' ];
$string = implode(', ', $array);
echo $string;
?>
  <?php
  $currentTime = date("s");
  if ($currentTime % 2 == 0) {
      echo '<img src="img_3_1.jpg" alt="Even Second Image">';
  } else {
      echo '<img src="img_3_2.jpg" alt="Odd Second Image">';
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