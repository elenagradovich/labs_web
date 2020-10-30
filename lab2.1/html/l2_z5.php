<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
    <script type="text/javascript" src="../js/task5.js"></script>
    <link rel="stylesheet" href="../css/style5.css">                                    
    <link rel="stylesheet" href="../../styles/menu.css">
    <link rel="stylesheet" href="../../styles/commonStyles.css">
    
  </head>
  <body>
    <?php
      include '../../menu.php';
    ?>
    <main>
      <p><b>1. После нажатия на кнопку с id=but1 должно отобразится всплывающее окно содержащее значения CSS свойств color элементов с id=par1, id=par2 и id=par3.</b></p>
      <div id="code">
      <p id="par1"> Я первый абзац.</p>
      <p id="par2"> Я второй абзац.</p>
      <p id="par3"> Я третий абзац.</p>
      <p> </p>
      <input id="but1" type="button" value="Вывести цвет абзацев" />
      </div>
      <p><b>2.После нажатия на кнопку с id=but2 элементы должны стать оформленными согласно их содержимому.</b></p>
      <div id="code">
      <p id="par4">Текст этого элемента отображен красным шрифтом.</p>
      <p id="par5">Текст этого элемента отображен шрифтом размером 25 пикселей.</p>
      <p id="par6">Текст этого элемента отображен шрифтом Verdana размером 33 пикселя.</p>
      <p id="par7">Текст этого элемента отображен жирным шрифтом Times New Roman красного цвета размером 27 пикселей.</p>
      <input id="but2" type="button" value="Оформить элементы"/>
      </div>
    </main>
  </body>
</html>
