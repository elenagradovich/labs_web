<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
    <script type="text/javascript" src="../js/task4.js"></script>
    <link rel="stylesheet" href="../css/style4.css">                                                        
    <link rel="stylesheet" href="../../styles/menu.css">
    <link rel="stylesheet" href="../../styles/commonStyles.css">
    
  </head>
  <body>
    <?php
      include '../../menu.php';
    ?>
    <main>
      <p><b>1. После нажатия на кнопку с id=but1 содержимое невидимого абзаца с id=par1 должно быть считано и вставлено в абзац с id=par2.</b></p>
      <div id="code">
      <p id="par1">Вставьте в меня содержимое первого абзаца.</p>
      <p id="par2">Скопировать содержимое абзаца par1 в par2.</p>
      <input id="but1" type="button" value="Добавить в абзацы выше недостающие слова" />
      </div>

      <p><b>2. После нажатия на кнопку с id=but2 в абзацы par3, par4, par5 и par6 должны добавляться недостающие слова. Слова при вставке должны быть выделены жирным шрифтом.</b></p>
      <div id="code">
      <p id="par3"> Для разметки веб-страниц используется -- </p>
      <p id="par4"> - используется для оформления HTML страниц.</p>
      <p id="par5"> - предназначен для написания клиентских скриптов выполняющихся браузером.</p>
      <p id="par6"> - JavaScript библиотека значительно упрощающая написание кода.</p>
      <input id="but2" type="button" value="Добавить в абзацы выше недостающие слова" />
      </div>

      <p><b>3. После нажатия на кнопку с id=but3 элементы с id=href1, id=par7 и type=text должны стать оформленными соответственно своему содержимому.</b></p>
      <div id="code">
        <a id="href1" href="http://www.google.ru/">Передо мной отображено значение моего атрибута href.</a> 
        <p id="par7" class="afterbutton"> После кнопки с id=but3 расположено значение моего атрибута class.</p>
        <input type="text" value="После данного элемента расположено слово 'key'" />
        <br /><br />
        <input id="but3" type="button" value="Оформить элементы" />
      </div>

      <p><b>4. После нажатия на кнопку с id=but4 элементы должны стать оформленными соответственно своему содержимому. (Необходимые стили уже заданы нужно только обернуть абзацы в тэги с соответствующими id: style1, style2, style3, style4.)</b></p>
      <div id="code">
      <p id="par8" >Текст этого элемента отображен жирным шрифтом Verdana.</p>
      <p id="par9" >Текст этого элемента отображен шрифтом красного цвета размером 20 пикселей.</p>
      <p id="par10" >Текст этого элемента отображен синим шрифтом Times New Roman.</p>
      <p id="par11" >Текст этого элемента отображен зеленым шрифтом Arial размером 25 пикселей.</p>
      <input id="but4" type="button" value="Применить оформление к абзацам" />
      </div>
    </main>
  </body>
</html>
