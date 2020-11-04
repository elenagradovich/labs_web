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
      <h2>Задание 6.</h2>
      <p>Игральным картам присвоены следующие порядковые номера в зависимости от их достоинства:
      "валет" - 11, "дама" - 12, "король" - 13, "туз" - 14. Порядковые номера остальных карт
      соответствуют их названиям ("семерка", "восьмерка" и т.д.). Разработать программу, которая выводила бы
      достоинство карты по номеру, который будет вводить пользователь..
      </p>
      <form action="" method="get">
        <input type="number" name="numberValue" id="value" placeholder="Введите номер карты"/>
        <input type="submit" value="Вернуть значение" id="submitInput" />
      </form>

      <p class="result result--border"></p>
      <script src="../js/pageScript_6.js"></script>
    </main>
  </body>
</html>