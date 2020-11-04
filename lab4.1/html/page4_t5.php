<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../../styles/menu.css">
    <link rel="stylesheet" href="../../styles/commonStyles.css">
  </head>
  <body>
    <?php
      include '../../menu.php';
    ?>
    <main>
      <a href="index.php"><img src="../img/arrow-back.png" alt="back"/></a>
      <h2>Задание 5.</h2>
      <p>Создание сокращенного варианта ФИО. Вводим Иванов Иван Петрович, возвращает Иванов И.П..
      </p>
      <p><b>Введите фамилию, имя и отчество</b></p>
      <form action="" method="get">
        <input type="text" name="name" id="value" placeholder="Иванов Иван Петрович"/>
        <input type="submit" value="Получить сокращенную форму" id="submitInput" />
      </form>

      <p class="result result--border"></p>
      <script src="../js/pageScript_5.js"></script>
    </main>
  </body>
</html>