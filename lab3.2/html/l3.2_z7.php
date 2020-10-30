<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../../styles/menu.css">
  <link rel="stylesheet" href="../../styles/commonStyles.css">
  
  <script src="../js/task7.js"></script>
</head>
<body>
  <?php
    include '../../menu.php';
  ?>
  <main>
    <p>Скрипт testfile.php принимает три аргумента var1, var2, var3. Значения этих переменных могут могут быть в диапазоне от 1 до 5.
      Создайте AJAX запрос для обращения к этому скрипту и подберите такие значения аргументов var1, var2 и var3, чтобы 
      результат выполнения скрипта был равен 8. В самом скрипте testfile.php запрограммируйте вычисляемую формулу: (
      var2 – var1 )*var3.
      1. Если результат равен 8, то сервер возвращает:
      Результат выполнения первого скрипта: 8.
      Поздравляем Вы подобрали правильные значения переменных! 
      2. Если результат не равен 8, то сервер возвращает вычисленное значение.
      Например, Результат выполнения первого скрипта: 12
      3. Если вводимые на форме значения выходят за пределы 1-5, то выводить соответствующее сообщение без передачи данных на сервер.</p>
      
        1е число: <input id="value1" type="number" name="number1" placeholder="Введите первое число"><br>
        2е число: <input id="value2" type="number" name="number2" placeholder="Введите второе число"><br>
        3е число: <input id="value3" type="number" name="number3" placeholder="Введите третье число"><br>
        <button class="result">Получить результат</button>
        <p class="res"></p>
      </form>
  </main>
</body>
</html>