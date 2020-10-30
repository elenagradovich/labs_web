<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../styles/menu.css">
    <link rel="stylesheet" href="../../styles/commonStyles.css">
    <script src="../js/pageScript_1.js"></script>
    
  </head>
  <body>
    <?php
      include '../../menu.php';
    ?>
    <main>
      <h2>Задание 1.</h2>
      <p>Разработать программу, которая считала бы сумму цифр числа, определенного в
        переменной PHP-скрипта. Например: есть число 123, то программа должна вычислить
        сумму цифр 1, 2, 3, т. е. 6.
      </p>
      <form action="" method="get">
        <label>Введите число:
          <input type="number" name="numberValue" id="value" />
        </label><br/>
        <input type="submit" value="Рассчитать сумму цифр числа" id="submitInput" />
      </form>

      <p class="result result--border"></p>
    </main>
  </body>
</html>