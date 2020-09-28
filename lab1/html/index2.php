<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../../styles/menu.css">
    <link rel="stylesheet" href="../../styles/commonStyles.css">
    <script src="../js/jquery.min.js"></script>
    <script src="../../menu.js"></script>
  </head>
  <body>
    <?php
      include '../../menu.php';
    ?>
    <main>
      <h1>Лабораторная работа №1 часть2.</h1>
      <h2>Задание 1.</h2>
      <p>С помощью регулярного выражения найдите в тексте ниже все слова, выделенные жирным шрифтом 
        (не используя поиск альтернатив).</p>
      <p><b>yandex.ru</b> example.com <b>www.yandex.ru</b> example.ru <b>yandex</b> 
        http://example.com <b>http://www.yandex.ru</b> <b>YANDEX.RU</b> </p>
      <div class="task1_result result"></div> 
      
      <h2>Задание 2.</h2>
      <p>1. Создайте конструктор - <i>Automobile</i> создающий объекты со свойствами <i>color</i> (цвет), 
        <i>model</i> (модель), <i>year</i> (год выпуска), <i>manufact</i> (производитель) и методами: <i>whatColor</i> 
        (позволяющий узнать цвет автомобиля) и <i>autoInfo</i> (позволяющий узнать модель, год выпуска, и производителя 
        автомобиля). </p>
        <p>2. Создайте с помощью конструктора <i>Automobile</i> объекты перечисленные ниже и обратитесь к их методам 
        <i>whatColor</i> и <i>autoInfo</i>: <br />
        1. Nissan Skyline 2007 Красный;<br /> 2. Toyota Corolla 2009 Черный;<br /> 3. Volkswagen Golf 2009 Синий</p>
      <div class="task2_result1 result"></div>
      <p>3. Создайте конструктор - <i>Driver</i> наследующий свойства и методы у конструктора <i>Automobile</i>. 
        Конструктор должен добавлять к функциональности свойство driver содержащее свойства <i>name</i> (имя хозяина 
        автомобиля) и <i>experience</i> (водительский стаж) и метод driverInfo (позволяющий узнать имя и стаж хозяина 
        автомобиля).</p>
      <p>4. Создайте с помощью конструктора <i>Driver</i> объект: Дмитрий 3 Ford Focus 2010 Белый. И обратитесь к его 
        методам whatColor, autoInfo и driverInfo.</p>

      <div class="task2_result2 result"></div>

      <h2>Задание 3.</h2>
      <input class="task3__button" type="button" value="Нажмите на меня" />

      <h2>Задание 4.</h2>
      <section class="task4">
        <p>Установим размер шрифта всех абзацев равным 20 пикселям<br/>
          Изменим на зеленый цвет шрифта элемента с id=el2<br/>
          Изменим на красный цвет шрифта элемента с class=el3<br/>
          Сделаем жирным шрифт элементов с id=el2 и class=el3<br/>
          Изменим на синий цвет текста кнопки<br/>
          Установим размер шрифта всех элементов имеющих атрибут href равным 20 пикселям<br/>
          Изменим на зеленый цвет ссылки на www.google.com</p>
        <p>Я первый элемент.</p>
        <p id="el2">Я второй элемент.</p>
        <p class="el3">Я третий элемент.</p>
        <input type="button" value="Я кнопка" />
        <br /><br />
        <a href="http://www.google.com/">Google</a>
        <br /><br />
        <a href="http://www.htmlbook.ru/HTML/">HTML учебник</a>
      </section>

      <h2>Задание 5.</h2>
      <p>Для того, чтобы узнать кодовое слово, необходимо изменить цвет и размер шрифта некоторых букв. 

      Измените цвет и размер шрифта:<br/>
      Элемента с id=meadow;<br/>
      Элемента с class=rainbow;<br/>
      Элемента с id=future находящегося внутри элемента с id=fut; (данный элемент необходимо выделить цветом отличным от красного);<br/>
      Элемента имеющего атрибут set;<br/>
      Элемента с атрибутом last=code.<br/>

      Обратите внимание: для изменения цвета текста элемента используйте метод: css('color','новый_цвет_текста'), для изменения размера шрифта используйте метод: css('font-size','размер_шрифта_px'). <br/></p>

      <div id="wrap1">
        В тпд*кцлГ/ Щ34мть в-л
        <div style="display:inline">К</div>
        ову ку_у жззщш бтуш+щцтвл фѝтѝмц цзойц
        <span id="none">Ь</span>
        шев уывлц-дйжыщч в
        <span id="meadow">а</span>
        оПтмтущйзМчѝта вилуц ушЗѝ/тхй хфыО
        <span id="protect">ж</span>
        ыуе ѝыв
        <span class="rainbow">з</span>
        роц вварцжцду ул
        <span id="test">к</span>
        шу тфвфлдоцу уещкоу+ш лѝоа
        <div id="fut">влм.цщу
          <span id="future">а</span>
          мтвлОЛдву влуйд
        </div>
        цу ушо вѝбр.фвцу щц
        <span id="sec">у</span>
        ш оѝл/влоцюбь лц
        <span set id="bear">н</span>
        дуо юѝфыд.лоцу рвла ушуѝть фываждлц гщушѝ ѝть.ущш тѝьЦцовл ѝбфвы воѝ+длов цуз
        <span id="beck" last="code">ь</span>йхВѝѝ ѝ. вцуш ѝтьѝьбв цудкощ з
        <span id="beck" last="none">в</span>о жыоыфв цщфзф ѝзвѝоѝловы выоѝѝьт ѝь юѝузо ытьѝѝ хшуццѝж воалфыао фждво цзущкш ѝѝлджо
      </div> 
    </main>
    <script src="../js/index2.js"></script>
  
  </body>
</html>