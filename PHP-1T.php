<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Веб-разработчик Ярослав</title>
  <link rel="stylesheet" href="Styles/main.css">
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

    
    <table>
      <thead>
        <tr>
          <th>Название оборудования</th>
          <th>Цена</th>
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
  <section id="section1">
    <a href="https://httpbin.org/post">Ссылка на раздел с котиками</a>
  </section>
  
  <footer>
    <p>Контактная информация</p>
    <p>© <?php echo date("Y"); ?> Шминке Я.Д. Московский Политех. Все права защищены.</p>
  </footer>
  
</body>
</html>