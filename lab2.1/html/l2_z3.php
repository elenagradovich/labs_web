<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
    <script type="text/javascript" src="../js/task3.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../../styles/menu.css">
    <link rel="stylesheet" href="../../styles/commonStyles.css">
    
  </head>
  <body>
    <?php
      include '../../menu.php';
    ?>
  <main>
  <p><b>1.При нажатии на кнопку с id=but1 абзац с id=par1 должен исчезать, а при нажатии на кнопку c id=but2 появляться.</b></p>
  <div id="code">
    <p id="par1" style="font-size:20px;">Нажмите на кнопку ниже и я пропаду.</p>
    <input id="but1" type="button" value="Спрятать абзац" />
    <input id="but2" type="button" value="Показать абзац" />
  </div>

  <p><b>2. При наведении курсора мыши на абзац с id=par2 он должен становится прозрачным (можете задавать любые значения 
  прозрачности, но необходимо чтобы текст был видим) в течении 3 секунд (3000 милисекунд). При выведении курсора мыши 
  за пределы абзаца он должен возвращать стандартные значения прозрачности.</b></p>
  <div id="code">
    <p id="par2">Наведите на меня курсор мыши и я стану прозрачным.</p>
  </div>

  <p><b>3. При нажатии на кнопку с id=but3 высота элемента wrap1 должна уменьшатся до 0 в течении 5 секунд. При нажатии на кнопку с id=but4 элементу wrap1 в течении 7 секунд должна быть возращена стандартная высота.

</b></p>
  <div id="code">
    <div id="wrap1"></div><br />
    <input id="but3" type="button" value="Сжать элемент" />
    <input id="but4" type="button" value="Расширить элемент" />
  </div>
  <hr />

  <p><b>4. Создайте анимацию перемещающую красный квадрат поочередно по всем черным квадратам с цифрами. Анимация должна активироваться при нажатии на кнопку с id=but5.</b></p>
  <div id="code">
    <input id="but5" type="button" value="Активировать анимацию" />
    <br /><br />
    <div id="wrap2">
      <div id="redsquare"></div>
      <div id="square1">
        <b>1.</b>
      </div>
      <div id="square2">
        <b>2.</b>
      </div>
      <div id="square3">
        <b>3.</b>
      </div>
      <div id="square4">
        <b>4.</b>
      </div>
      <div id="square5">
        <b>5.</b>
      </div>
    </div> 
  </div>
</main>
</body>
</html>