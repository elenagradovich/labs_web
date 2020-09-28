<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
	<script type="text/javascript" src="../js/task4.js"></script>
	<link rel="stylesheet" href="../css/style4.css">
	<link rel="stylesheet" href="../../styles/menu.css">
  <link rel="stylesheet" href="../../styles/commonStyles.css"> 
	<script src="../../menu.js"></script>
</head>
<body>
	<?php
		include '../../menu.php';
	?>
	<main>
		<p><b>1. Исправьте ошибки в группировке элементов ниже для того, чтобы виджет accordion отобразился корректно.</b></p>
		<div id="accordion1" class="ui-accordion-content">
			<h2><a href="#">Пчелы</a></h2>
			<div>
				<p><b>Пчёлы</b> — секция в надсемействе <i>Apoidea</i> летающих насекомых подотряда 
				Стебельчатобрюхие отряда перепончатокрылых, родственное осам и муравьям. Наука о пчёлах
				называется апиология (апидология).</p>
			</div>
			<h2><a href="#">Мухи</a></h2>
				<div>
				<p><b>Мухи</b> — род насекомых семейства Настоящие мухи (<i>Muscidae</i>). Наиболее хозяйственно 
				значимые виды: повсеместно распространенная синантропная комнатная муха (<i>Musca domestica Linnaeus</i>), 
				встречающаяся в Закавказье и Средней Азии базарная муха (<i>Musca sorbens Wiedemann</i>), являющаяся 
				переносчиком возбудителей холеры, дизентерии, брюшного тифа. </p>
			</div>
			<h2><a href="#">Комары</a></h2>
				<div>
				<p><b>Комары, или настоящие комары, или кровососущие комары</b>— семейство двукрылых насекомых, принадлежащих
				к группе длинноусых (<i>Nematocera</i>), самки имаго которых в большинстве случаев являются компонентом 
				комплекса гнуса. Характерны для этого семейства ротовые органы: верхняя и нижняя губа вытянуты и образуют 
				футляр, в котором помещаются длинные тонкие иглы (2 пары челюстей); у самцов челюсти недоразвиты — они не 
				кусаются. Безногие личинки и подвижные куколки комаров живут в стоячих водах.</p>
			</div>
		</div>
		<hr />
		<p><b>2. Создайте на основе приведенных ниже данных виджет accordion.</b></p>
		<br /><br />
		<div id="accordion2">
			<h2><a href="#">Атмосфера</a></h2>
			<div>
				<p><b>Атмосфера</b> — газовая оболочка небесного тела, удерживаемая около него гравитацией. Поскольку не существует резкой границы между атмосферой и межпланетным пространством, то обычно атмосферой принято считать область вокруг небесного тела, в которой газовая среда вращается вместе с ним как единое целое. Глубина атмосферы некоторых планет, состоящих в основном из газов (газовые планеты), может быть очень большой.</p>
			</div>
			<h2><a href="#">Биосфера</a></h2>
			<div>
				<p><b>Биосфера</b> — оболочка Земли, заселённая живыми организмами, находящаяся под их воздействием и занятая продуктами их жизнедеятельности; «пленка жизни»; глобальная экосистема Земли.</p>
				<p>Биосфера — оболочка Земли, заселённая живыми организмами и преобразованная ими. Биосфера сформировалась 500 млн лет назад, когда на нашей планете стали зарождаться первые организмы. Она проникает во всю гидросферу, верхнюю часть литосферы и нижнюю часть атмосферы, то есть населяет экосферу. </p>
				<p>Биосфера представляет собой совокупность всех живых организмов. В ней обитает более 3.000.000 видов растений, животных, грибов, бактерий и насекомых. Человек тоже является частью биосферы, его деятельность превосходит многие природные процессы.</p>
			</div>
			<h2><a href="#">Ноосфера</a></h2>
			<div>
				<p><b>Ноосфера</b> — сфера взаимодействия общества и природы, в границах которой разумная человеческая деятельность становится определяющим фактором развития.</p>
				<p>Ноосфера — предположительно новая, высшая стадия эволюции биосферы, становление которой связано с развитием общества, оказывающего глубокое воздействие на природные процессы. </p>
			</div>
			<h2><a href="#">Гидросфера</a></h2>
			<div>
				<p><b>Гидросфера</b> — это водная оболочка Земли.</p>
				<p>Она образует ее прерывистую водную оболочку. Средняя глубина океана составляет 3800 м, максимальная (Марианская впадина Тихого океана) — 11,034 метров. Около 97 % массы гидросферы составляют соленые океанические воды, 2,2 % — воды ледников, остальная часть приходится на подземные, озерные и речные пресные воды. </p>
				<p>Общий объём воды на планете около 1532000000 кубических километров. Масса гидросферы примерно 1,46*1021 кг. Это в 275 раз больше массы атмосферы, но лишь 1/4000 от массы всей планеты. </p>
			</div>
			<hr />
		</div>
		<p><b>3. Создайте виджет autocomplete который будет производить поиск по списку стран приведенных ниже. Сделайте так чтобы виджет начинал поиск только если длина ввода пользователя превышает 3 символа.</b></p>
		<input id="auto" placeholder="Страна" />
		<!--<p>Список стран:</p>
		<ul>
			<li>Австралия</li>
			<li>Австрия</li>
			<li>Азербайджан</li>
			<li>Аргентина</li>
			<li>Афганистан</li>
			<li>Бангладеш</li>
			<li>Беларусь</li>
			<li>Бразилия</li>
			<li>Великобритания </li>
			<li>Вьетнам</li>
			<li>Германия</li>
			<li>Греция</li>
			<li>Грузия</li>
			<li>Дания</li>
			<li>Египет</li>
			<li>Израиль</li>
			<li>Ирак</li>
			<li>Иран</li>
			<li>Испания </li>
			<li>Италия</li>
			<li>Канада</li>
			<li>Киргизия</li>
			<li>КНР</li>
			<li>Куба</li>
			<li>Латвия</li>
			<li>Литва</li>
			<li>Мексика</li>
			<li>Молдавия</li>
			<li>Монголия</li>
			<li>Нигерия</li>
			<li>Нидерланды </li>
			<li>Пакистан</li>
			<li>Польша</li>
			<li>Португалия</li>
			<li>Россия</li>
			<li>Румыния</li>
			<li>Сербия</li>
			<li>Словакия</li>
			<li>Словения</li>
			<li>США</li>
			<li>Таджикистан </li>
			<li>Таиланд</li>
			<li>Тунис </li>
			<li>Турция</li>
			<li>Узбекистан</li>
			<li>Украина</li>
			<li>Филиппины</li>
			<li>Финляндия</li>
			<li>Франция</li>
			<li>Хорватия</li>
			<li>Черногория</li>
			<li>Чехия</li>
			<li>Швейцария </li>
			<li>Швеция</li>
			<li>Эстония</li>
			<li>ЮАР</li>
			<li>Япония</li>
		</ul>-->
	<hr />
	<b>4. Оформите как кнопки элементы с id=el1, id=el2, id=el3.</b>
	<section class="task4__buttons-wrapper">
		<button id="el1">Кнопка1</button>
		<a id="el2" href="http://www.google.ru">google.ru</a>
		<div id="el3">
			<input type="checkbox" name="check" id="value1" /><label for="value1">Флажок 1</label>
			<input type="checkbox" name="check" id="value2" /><label for="value2">Флажок 2</label>
			<input type="checkbox" name="check" id="value3" /><label for="value3">Флажок 3</label>
			<input type="checkbox" name="check" id="value4" /><label for="value4">Флажок 4</label>
		</div>
	</section>
	</main>
</body>
</html>