<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">  
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
    <script type="text/javascript" src="../js/task2.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../../styles/menu.css">
    <link rel="stylesheet" href="../../styles/commonStyles.css">
    
  </head>
  <body>
    <?php
      include '../../menu.php';
    ?>
  <main>
  <p><b>1.После одинарного нажатия на кнопку с id="but1" цвет текста абзаца с id="par1" должен измениться на зеленый, а размер его шрифта должен стать равным 20px. При двойном нажатии на кнопку с id="but1" оформление абзаца с id="par1" должно сбрасываться на стандартное.</b></p>
  <div id="code">
    <h3 id="par1">Я первый заголовок на странице.</h3>
    <p id="par1">Я первый абзац на странице.</p>
    <input id="but1" type="button" value="Нажмите на меня" />
  </div>

  <p><b>2. При наведении указателя мыши на ссылку c id="href1" ее цвет должен измениться на оранжевый. При выведении указателя мыши за ее пределы оформление должно сбросится на стандартное.</b></p>
  <div id="code">
    <a id="href1" href="http://www.google.ru/">www.google.ru</a>
  </div>

  <p><b>3. При выделении текста элемента с id="text1" его цвет должен измениться на красный, а размер шрифта должен стать равным 20px.</b></p>
  <div id="code">
    <input type="text" id="text1" value="Выделите мой текст" />
  </div>
  
  <p><b>4. При каждом щелчке по кнопке с id=but2 оформление абзаца с id=par2 должно меняться следующим образом:</b></p>
  <ul>
    <li>- Текст должен быть отображен шрифтом Times New Roman красного цвета;</li>
    <li>- Текст должен быть отображен шрифтом Arial синего цвета;</li>
    <li>- Текст должен быть отображен жирным шрифтом Verdana, с рамкой толщиной 1 пиксель (используйте свойство font-weight:bold для того, чтобы сделать текст жирным и свойство border-style для задания толщины границы)
</li>
  </ul>
  <div id="code">
    <p id="par2">Мое оформление будет меняться после каждого нажатия на кнопку ниже.</p>
    <input id="but2" type="button" value="Изменить оформление абзаца" />
  </div>
</main>
</body>
</html>
