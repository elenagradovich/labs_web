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
      <p><b>Создайте AJAX запросы, которые должны после нажатия на соответствующие кнопки обращаться к файлам autumn.txt, winter.txt, summer.txt, и spring.txt и затем отображать результат выполнения запроса в абзац с id=par1.</b></p>
      <div id="code">
        <p id="par1" class="result--border ">В данном абзаце будут отображены результаты запросов.</p>
        <input id="but1" type="button" value="Обратится к файлу autumn.txt" />
        <input id="but2" type="button" value="Обратится к файлу winter.txt" />
        <br /><br />
        <input id="but3" type="button" value="Обратится к файлу summer.txt" />
        <input id="but4" type="button" value="Обратится к файлу spring.txt" />
      </div>
    </main>
  </body>
</html>