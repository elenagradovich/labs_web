<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../../styles/menu.css">
    <link rel="stylesheet" href="../../styles/commonStyles.css"> 
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
    <script src="//ajax.aspnetcdn.com/ajax/jquery.ui/1.10.3/jquery-ui.min.js"></script>
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="../js/task3.js"></script>
    <script src="../../menu.js"></script>
  </head>
  <body>
    <?php
      include '../../menu.php';
    ?>
    <main>
      <p><b>1. Сделайте элемент с id=el1 перетаскиваемым и растягиваемым.</b></p>
      <div style="min-height:230px">
        <div id="el1" class="ui-corner-all ui-widget ui-widget-header ui-draggable ui-draggable-dragging ui-widget-content">
          <div id="head">Окно <b>el1</b></div>
          <p id="cont">Данное окно можно перетаскивать и растягивать.</p>
        </div>
      </div>
      <hr />
      <p><b>2. Сделайте список с id=sort1 сортируемым и затем расставьте элементы этого списка в правильном порядке.</b></p>
      <ul id="sort1">
      <li>Второй пункт списка</li>
      <li>Третий пункт списка</li>
      <li>Первый пункт списка</li>
      <li>Пятый пункт списка</li>
      <li>Четвертый пункт списка</li>
      <li>Седьмой пункт списка</li>
      <li>Шестой пункт списка</li>
      </ul>
      <hr />
      <p><b>3. Сделайте элементы с id=el2 и id=el3 перетаскиваемыми. После этого сделайте так, чтобы первая область (c id=drop1) принимала оба элемента, а вторая (c id=drop2) только элемент с id=el3. После того, как элемент будет перетащен в принимающую его область перетаскиваемый элемент должен стать невидимым, а цвет фона области должен измениться на зеленый.</b></p>
      <div id="wrap1">
        <div id="el2" class="ui-corner-all">
          <div id="head">Окно <b>el2</b></div>
          <p id="cont">Данное окно можно перетаскивать мышкой.</p>
        </div>
      <div id="el3" class="ui-corner-all">
        <div id="head">Окно <b>el3</b></div>
        <p id="cont">Данное окно можно перетаскивать мышкой.</p>
      </div>
      <div id="drop1"> Область 1 </div>
      <div id="drop2">Область 2 </div>
      </div>
    </main>
  </body>
</html>