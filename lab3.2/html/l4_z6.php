<!DOCTYPE HTML>
<html>
  <head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../../styles/menu.css">
  <link rel="stylesheet" href="../../styles/commonStyles.css">
  <script src="../../menu.js"></script>
   <script type='text/javascript'>
    
      function getSeason(season){
        let filePath;
        switch (season) {
          case 'summer': 
            filePath = '../files/summer.txt';
            break;
          case 'autumn': 
            filePath = '../files/autumn.txt';
            break;
          case 'winter': 
            filePath = '../files/winter.txt';
            break
          case 'spring': 
            filePath = '../files/spring.txt';
            break
          default: filePath = '';
        }
        
        let xhttp=new XMLHttpRequest();
        
        xhttp.onreadystatechange=function(){
          if (xhttp.readyState==4 && xhttp.status==200) {
            document.querySelector('#res').innerHTML=xhttp.responseText;
          }
        }
        xhttp.open('GET', filePath, true);
        xhttp.send();
      }
   </script>
   </head>
   <body>
    <?php
      include '../../menu.php';
    ?>
    <main>
      <p>Создайте 4 кнопки и напишите для них код, запрашивающий в помощью AJAX файлы
        winter.txt, summer.txt, autumn.txt, spring.txt с сервера и отображающий 
        результат на странице.
      </p>
      <button id='summer' onclick="getSeason('summer')">summer</button>
      <button id='autumn' onclick="getSeason('autumn')">autumn</button>
      <button id='winter' onclick="getSeason('winter')">winter</button>
      <button id='spring' onclick="getSeason('spring')">spring</button>
      <div id='res' ></div>
    </main>
   </body>
</html>