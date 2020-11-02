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
      <h2>Задание 4.</h2>
      <p>Создать массив, наполнить его случайными значениями (можно использовать
функцию rand), найти максимальное и минимальное значение массива и поменять их
местами.
      </p>
      <form action="" method="get">
        <input type="number" name="numberValue1" id="value1" placeholder="min значение диапазона"/>...
        <input type="number" name="numberValue2" id="value2" placeholder="max значение диапазона" /><br>
        <input type="number" name="numberValue3" id="value3" placeholder="количество чисел" /><br>
        <input type="submit" value="Рассчитать" id="submitInput" />
      </form>

      <p class="result result--border"></p>
      <script src="../js/pageScript_4.js"></script>
    </main>
  </body>
</html>