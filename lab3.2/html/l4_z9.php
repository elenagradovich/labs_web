<!DOCTYPE HTML>
<html>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../../styles/menu.css">
  <link rel="stylesheet" href="../../styles/commonStyles.css">
  <script src="../../menu.js"></script>
</head>

<body>
  <?php
    include '../../menu.php';
  ?>
  <main>
    <p>Напишите код, который обращается к файлу phonebase.json 
      из текущего каталога и выводит все названия телефонов из него в виде списка.
    </p>
    <button id="button" class="task9__download">Загрузить phonebase.json!</button>
    <script>
      window.onload = function (){
        const downloadButton = document.querySelector('.task9__download');
        function loadPhones() {
          var xhr = new XMLHttpRequest();
          xhr.open('GET', 'phonebase.json', true);
          xhr.onreadystatechange = function() {
            if (xhr.readyState != 4) return;
            button.innerHTML = 'Готово!';
            if (xhr.status != 200) {
              // обработать ошибку
              alert(xhr.status + ': ' + xhr.statusText);
            } else {
              const data=JSON.parse(xhr.responseText);
              let elem = document.createElement('ul');

              for(item of data) {
                let li = document.createElement('li');
                li.textContent = item.name;
                elem.appendChild(li);
              }
              downloadButton.insertAdjacentElement('afterend', elem);
            }
          }

          xhr.send();
          button.innerHTML = 'Загружаю...';
          button.disabled = true;
        }
        downloadButton.addEventListener('click', loadPhones);
      }
    </script>
  </main>
</body>

</html>