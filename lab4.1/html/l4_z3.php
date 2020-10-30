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
      <h2>Задание 3.</h2>
      <p>Разработайте программу, которая из чисел 20 .. 45 находила те, которые делятся на 5
и найдите сумму этих чисел. Рекомендуется использовать функцию fmod для
определения "делится число" или "не делится".
      </p>
      <p>Введите границы диапазона значений:</p>
      <form action="" method="get">
          <input type="number" name="numberValue1" id="value1" placeholder="min"/>...
          <input type="number" name="numberValue2" id="value2" placeholder="max" /><br>
          <input type="number" name="numberValue3" id="value3" placeholder="делитель" /><br>
        <input type="submit" value="Рассчитать" id="submitInput" />
      </form>

      <p class="result result--border"></p>
      <script src="../js/pageScript_3.js"></script>
    </main>
  </body>
</html>