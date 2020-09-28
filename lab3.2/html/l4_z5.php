<!DOCTYPE HTML>
<html>
  <head>
   <meta charset="utf-8">
   <link rel="stylesheet" href="../../styles/menu.css">
   <link rel="stylesheet" href="../../styles/commonStyles.css">
   <script src="../../menu.js"></script>
   <script type='text/javascript'>
      function winter(){
         let xhttp=new XMLHttpRequest();
         xhttp.onreadystatechange=function(){
            if (xhttp.readyState==4 && xhttp.status==200) {
               document.getElementById('res').innerHTML=xhttp.responseText;
            }
         }
         xhttp.open('GET', '../files/winter.txt', true);
         xhttp.send();
      }
   </script>
   </head>
   <body>
      <?php
         include '../../menu.php';
      ?>
      <main>
         <p>Исправьте ошибки в коде</p>
         <input type='button' value='Отправить запрос' onclick='winter()'/>
         <br /><br />
         <div id='res'> </div>
      </main>
   </body>
</html>