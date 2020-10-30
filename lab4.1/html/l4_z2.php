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
      <h2>Задание 2.</h2>
      <p>Разработать программу, которая считала бы количество вхождений какой-нибудь
        выбранной вами цифры в выбранном вами числе. Например: цифра 5 в числе
        442158755745 встречается 4 раза
      </p>
      <form action="" method="get">
        <label>Введите число:
          <input type="number" name="numberValue1" id="value1" />
        </label><br/>
        <label>Введите цифру поиска:
          <input type="number" name="numberValue2" id="value2" />
        </label><br/>
        <input type="submit" value="Рассчитать количество вхождений" id="submitInput" />
      </form>

      <p class="result result--border"></p>
      <script src="../js/pageScript_2.js"></script>
      
    </main>
  </body>
</html>