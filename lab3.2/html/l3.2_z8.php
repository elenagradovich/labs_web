<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../styles/menu.css">
    <link rel="stylesheet" href="../../styles/commonStyles.css">
    
    <script type='text/javascript'>
      window.onload = function (){
        const getData = () => {  
          let xhttp=new XMLHttpRequest();
          //Инициализировать XMLHttpRequest
          xhttp.open('GET','bookshop.json',true);
          //Метод устанавливает соединение
          xhttp.send();
          xhttp.onreadystatechange=function(){
            if (xhttp.readyState==4){
              //Принятое содержимое json файла должно быть вначале обработано функцией eval 
              const data=eval( '('+xhttp.responseText+')' );
              //Далее мы можем спокойно использовать данные
              if (document.readyState === "complete" && data) {
                document.querySelector('.result1').innerHTML=`<b>${data.bookbase[3].author}</>`;
                document.querySelector('.result2').innerHTML=`<b>${data.bookbase[5].title}, ${data.bookbase[6].title}, ${data.bookbase[7].title}</>`;
                document.querySelector('.result3').innerHTML=`<b>${data.bookbase[3].quantity + data.bookbase[6].quantity + data.bookbase[9].quantity + data.bookbase[12].quantity}</>`
              }
            }
          }
        }
        getData();
      }
    </script>
  </head>
  <body>
    <?php
      include '../../menu.php';
    ?>
    <main>
      Создать AJAX-запрос для обращения к файлу bookshop.json.
      Необходимо считать его содержимое и вывести:
      <ul>
        <li>Value 4-го тэга author на страницу <span class="result1"></span></li>
        <li>Value 6-го, 7-го и 8-го тэга title на страницу.<span class="result2"></span></li>
        <li>Сумму содержимого 4-го, 7-го, 10-го и 13-го тэга quantity на страницу.<span class="result3"></span></li>
      </ul>
    </main>
  </body>
</html>