<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">                                                     
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
    <script type="text/javascript" src="../js/task1.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../../styles/menu.css">
    <link rel="stylesheet" href="../../styles/commonStyles.css">
    
  </head>
  <body>
    <?php
      include '../../menu.php';
    ?>
    <main>
    <h2>Каждое задание отмеченное цифрой должно быть выполнено с помощью одной jQuery команды.<h2>
    
    <p><b>1.</b></p>                                                        
    <p id="pmtog">Покрасьте меня в зеленый цвет..</p>
    <p><b>2.</b></p>
    <h3 class="pr1">Мой цвет не должен быть изменен.</h3>
    <p class="pr1">Покрасьте меня в красный цвет.</p>
    <p><b>3.</b></p>
    <input type="button" value="Покрасьте меня в оранжевый" />
    <br /><br />
    <input type="text" value="Мой цвет не должен быть изменен"/>
    <br /><br />
    <!--<input type="submit" value="Мой цвет изменять не нужно"/>-->
    <br /><br />
    <p><b>4.</b></p>
    <p class="pmb1">Покрасьте меня в синий.</p>
    <p>Мой цвет не должен быть изменен.</p>
    <p>Мой цвет не должен быть изменен.</p>
    <p class="pmb2">Покрасьте меня в синий.</p>
    <p>Мой цвет не должен быть изменен.</p>
    <p class="pmb3">Покрасьте меня в синий.</p>
    <p><b>5.</b></p>
    <div id="wrap1">
      <p>Мой цвет не должен быть изменен.</p>
      <p class="pmtobr">Покрасьте меня в коричневый.</p>
    </div>
    <p class="pmtobr">Мой цвет не должен быть изменен.</p>
    <p><b>6. Отобразите рамку вокруг третьего изображения. (Используйте команду css("borderStyle","solid")</b></p>
    <img src="../img/mounting1.jpg" style="width:200px;">
    <img src="../img/mounting2.jpg" style="width:200px;">
    <img src="../img/mounting3.jpg" style="width:200px;">
    <p><b>7. </b></p>
    <div id="iwrap">
      <input type="button" value="Покрасьте меня в красный" />
      <br /><br />
      <input type="text" value="Мой цвет не должен быть изменен"/>
      <br /><br />
      <input type="submit" value="Покрасьте меня в красный"/>
    </div>
  </main>
</body>
</html>