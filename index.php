<?php
session_start();
    $_SESSION['test'] = 'test';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>DARSER</title>
	<link rel="shortcut icon" href="Home.png" type="image/png">
	<link rel="stylesheet" href="bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="promo/promo.css">
	<script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
	<script defer src="./js/list.js" type="text/javascript"></script>
	<script defer src="./js/up.js" type="text/javascript"></script>
	<script defer src="./js/currency.js" type="text/javascript"></script>
	<script defer src="./js/dropContainer.js" type="text/javascript"></script> 
	<script defer src="./js/res.js" type="text/javascript"></script> 
	<script type="text/javascript" src="promo/slider/slider.js"></script>
	<script type="text/javascript">
	    function loadEx(){
                window.open("download.php");
	    }
   </script>
</head>
<body id="body">
	<div id="wait"><i class="fas fa-home"></i></div>
	<div class="wrapper container-fluid">
		<header>
			<div id="header" class="header container p-3">
				<div class="row">
					<div class="logo col-md-3 text-center">
						<i class="fas fa-home" style="font-size: 5em; color: green;"></i>
					</div>
					<div class="title col-md-9 mt-3 text-center">
						<h1>
							WWW.DARSER.COM
						</h1>
					</div>
				</div>
			</div>
		</header>
		<div id="main" class="container">
		    <div id="slider" class="slider">
			<div class="slider_content">
				<a class="content_current" href="catalog.html"><img src="promo/slider/img/sl1.png" alt="sl"></a>
				<a href="Item_details_page.html"><img src="promo/slider/img/sl2.png" alt="sl"></a>
				<a href="catalog.html"><img src="promo/slider/img/sl3.png" alt="sl"></a>
				<div id="prev" class="slider_btn prev"></div>
				<div id="next" class="slider_btn next"></div>
			</div>
			<div class="separator"></div>
			<div class="current-item">
			</div>
		</div>
			<section>
				<div class="description_block container p-3 pt-5">
					<div class="jumbotron">
						<h2>
							Darser - оценка недвижимости
						</h2>
						<hr>
						<p>
							У Вас нет средств, времени и сил для детального изучения рынка недвижимости, но Вы хотите узнать приблизительную стоимость нужного Вам жилья? Тогда Darser именно то, что Вам нужно! 
						</p>
					</div>
				</div>
			</section>
			<section>
				<div class="searh_block container p-3">
					<form class="form p-4" action="#">
						<div class="row">
							<div class="col-lg-4">
								<fieldset>								
									<legend>Введите характеристики:</legend>
									<label for="">
									Выберите тип недвижимости:
									</label>
									<br>
									<input name="building" value="house" type="radio" checked>
									<label class="mr-3" for="">Дом</label>
									<input name="building" value="flat" type="radio">
									<label for="">Квартира</label>
									<br>
									<label for="">
										Выберите операцию:
									</label>
									<select class="custom-select" name="operation" data-style="btn-primary">
										<option value="buy">Продажа</option>
										<option value="rent">Аренда</option>
									</select>
									<br>
									<label for="selectArea">
										Выберите область:
									</label>
									<select id="selectArea" class="custom-select" name="area" data-style="btn-info" data-live-search="true" defaultval="Вся Украина">    
										<option>Винницкая область</option>
										<option>Волынская область</option>
										<option>Днепропетровская область</option>
										<option>Донецкая область</option>
										<option>Житомирская область</option>
										<option>Закарпатская область</option>
										<option>Ивано-Франковская область</option>
										<option>Киевская область</option>
										<option>Кировоградская область</option>
										<option>Крым (АРК)</option>
										<option>Луганская область</option>
										<option>Львовская область</option>
										<option>Николаевская область</option>
										<option>Одесская область</option>
										<option>Полтавская область</option>
										<option>Ровенская область</option>
										<option>Сумская область</option>
										<option>Тернопольская область</option>
										<option>Харьковская область</option>
										<option>Херсонская область</option>
										<option>Хмельницкая область</option>
										<option>Черкасская область</option>
										<option>Черниговская область</option>
										<option>Черновицкая область</option>
									</select>
									<label for="city">
										Выберите город:
									</label>
									<select id="selectCity" class="custom-select" name="city" data-style="btn-info" data-live-search="true" defaultval="Вся Украина"> 
										<optgroup label="Винницкая область">
											<option>Бар</option>
											<option>Бершадь</option>
											<option>Винница</option>
											<option>Гайсин</option>
											<option>Гнивань</option>
											<option>Жмерика</option>
											<option>Ильинцы</option>
											<option>Казатин</option>
											<option>Калиновка</option>
											<option>Крыжополь</option>
											<option>Ладыжин</option>
											<option>Липовец</option>
											<option>Могилев-Подольский</option>
											<option>Немиров</option>
											<option>Песочин</option>
											<option>Погребище</option>
											<option>Стрижавка</option>
											<option>Тульчин</option>
											<option>Хмельник</option>
											<option>Чечельник</option>
											<option>Шаргород</option>
											<option>Ямполь</option>
										<optgroup label="Волынская область">
											<option>Берестечко</option>
											<option>Владимир-Волынский</option>
											<option>Горохов</option>
											<option>Иваничи</option>
											<option>Камень-Каширский</option>
											<option>Киверцы</option>
											<option>Ковель</option>
											<option>Луцк</option>
											<option>Любешов</option>
											<option>Любомль</option>
											<option>Маневичи</option>
											<option>Нововолынск</option>
											<option>Ратно</option>
											<option>Рожище</option>
											<option>Старая Выжевка</option>
											<option>Турийск</option>
											<option>Устилуг</option>
											<option>Цумань</option>
											<option>Шацк</option>
										</optgroup>
										<optgroup label="Днепропетровская область">
											<option>Апостолово</option>
											<option>Верхнеднепровск</option>
											<option>Вольногорск</option>
											<option>Днепр</option>
											<option>Желтые Воды</option>
											<option>Каменское</option>
											<option>Кривой Рог</option>
											<option>Марганец</option>
											<option>Никополь</option>
											<option>Новомосковск</option>
											<option>Орджоникидзе</option>
											<option>Павлоград</option>
											<option>Перещепино</option>
											<option>Першотравенск</option>
											<option>Подгородное</option>
											<option>Пятихатки</option>
											<option>Синельниково</option>
											<option>Терновка</option>
										</optgroup>
										<optgroup label="Донецкая область">
											<option>Авдеевка</option>
											<option>Александровка</option>
											<option>Амвросиевка</option>
											<option>Артемовск</option>
											<option>Волноваха</option>
											<option>Горловка</option>
											<option>Дебальцево</option>
											<option>Дзержинск</option>
											<option>Димитров</option>
											<option>Доброполье</option>
											<option>Докучаевск</option>
											<option>Донецк</option>
											<option>Дружковка</option>
											<option>Енакиево</option>
											<option>Ждановка</option>
											<option>Зугрэс</option>
											<option>Кировское</option>
											<option>Константиновка</option>
											<option>Краматорск</option>
											<option>Красноармейск</option>
											<option>Красный Лиман</option>
											<option>Майорск</option>
											<option>Макеевка</option>
											<option>Мариуполь</option>
											<option>Марьинка</option>
											<option>Новоазовск</option>
											<option>Новогродовка</option>
											<option>Селидово</option>
											<option>Славянск</option>
											<option>Снежное</option>
											<option>Соледар</option>
											<option>Старобешево</option>
											<option>Торез</option>
											<option>Угледар</option>
											<option>Харцызск</option>
											<option>Шахтерск</option>
											<option>Ясиноватая</option>
										</optgroup>
										<optgroup label="Житомирская область">
											<option>Андрушевка</option>
											<option>Барановка</option>
											<option>Бердичев</option>
											<option>Володарск-Волынский</option>
											<option>Емильчино</option>
											<option>Житомир</option>
											<option>Иршанск</option>
											<option>Коростень</option>
											<option>Коростышев</option>
											<option>Малин</option>
											<option>Новоград-Волынский</option>
											<option>Овруч</option>
											<option>Олевск</option>
											<option>Попельня</option>
											<option>Радомышль</option>
											<option>Романов</option>
											<option>Черняхов</option>
											</optgroup>
										<optgroup label="Закарпатская область">
											<option>Берегово</option>
											<option>Буштына</option>
											<option>Великий Бычков</option>
											<option>Виноградов</option>
											<option>Вышково</option>
											<option>Дубовое</option>
											<option>Иршава</option>
											<option>Королево</option>
											<option>Межгорье</option>
											<option>Мукачево</option>
											<option>Перечин</option>
											<option>Рахов</option>
											<option>Свалява</option>
											<option>Солотвина</option>
											<option>Тячев</option>
											<option>Ужгород</option>
											<option>Хуст</option>
											<option>Чоп</option>
										</optgroup>
										<optgroup label="Ивано-Франковская область">
											<option>Богородчаны</option>
											<option>Болехов</option>
											<option>Бурштын</option>
											<option>Галич</option>
											<option>Городенка</option>
											<option>Делятин</option>
											<option>Долина</option>
											<option>Ивано-Франковск</option>
											<option>Калуш</option>
											<option>Коломыя</option>
											<option>Косов</option>
											<option>Ланчин</option>
											<option>Надворная</option>
											<option>Перегинское</option>
											<option>Рогатин</option>
											<option>Снятын</option>
											<option>Тлумач</option>
											<option>Тысменица</option>
											<option>Яремче</option>
										</optgroup>
										<optgroup label="Киевская область">
											<option>Барышевка</option>
											<option>Белая Церковь</option>
											<option>Березань</option>
											<option>Богуслав</option>
											<option>Борисполь</option>
											<option>Бородянка</option>
											<option>Боярка</option>
											<option>Бровары</option>
											<option>Буча</option>
											<option>Васильков</option>
											<option>Вишневое</option>
											<option>Володарка</option>
											<option>Вышгород</option>
											<option>Глеваха</option>
											<option>Гостомель</option>
											<option>Иванков</option>
											<option>Ирпень</option>
											<option>Кагарлык</option>
											<option>Киев</option>		
											<option>Коцюбинское</option>
											<option>Макаров</option>
											<option>Мироновка</option>
											<option>Обухов</option>
											<option>Переяслав-Хмельницкий</option>
											<option>Припять</option>
											<option>Ржищев</option>
											<option>Рокитное</option>
											<option>Сквира</option>
											<option>Славутич</option>
											<option>Тараща</option>
											<option>Тетиев</option>
											<option>Узин</option>
											<option>Украинка</option>
											<option>Фастов</option>
											<option>Чернобыль</option>
											<option>Яготин</option>
										</optgroup>
										<optgroup label="Кировоградская область">
											<option>Александрия</option>
											<option>Бобринец</option>
											<option>Власовка</option>
											<option>Гайворон</option>
											<option>Долинская</option>
											<option>Знаменка</option>
											<option>Кропивницкий</option>
											<option>Малая Виска</option>
											<option>Новая Прага</option>
											<option>Новоархангельск</option>
											<option>Новое</option>
											<option>Новомиргород</option>
											<option>Новоукраинка</option>
											<option>Первомайск</option>
											<option>Петрово</option>
											<option>Помошная</option>
											<option>Светловодск</option>
											<option>Смолино</option>
										</optgroup>
										<optgroup label="Крым (АРК)">
											<option>Алупка</option>
											<option>Алушта</option>
											<option>Армянск</option>
											<option>Бахчисарай</option>
											<option>Белогорск</option>
											<option>Береговое</option>
											<option>Джанкой</option>
											<option>Евпатория</option>
											<option>Знаменка</option>
											<option>Инкерман</option>
											<option>Керчь</option>
											<option>Красногвардейское</option>
											<option>Красноперекопск</option>
											<option>Раздольное</option>
											<option>Саки</option>
											<option>Севастополь</option>
											<option>Симферополь</option>
											<option>Старый Крым</option>
											<option>Судак</option>
											<option>Феодосия</option>
											<option>Черноморское</option>
											<option>Щёлкино</option>
											<option>Ялта</option>
										</optgroup>					
										<optgroup label="Луганская область">
											<option>Александровск</option>
											<option>Алмазная</option>
											<option>Алчевск</option>
											<option>Антрацит</option>
											<option>Артемовск</option>
											<option>Брянка</option>
											<option>Вахрушево</option>
											<option>Горное</option>
											<option>Горское</option>
											<option>Зимогорье</option>
											<option>Золотое</option>
											<option>Зоринск</option>
											<option>Ирмино</option>
											<option>Кировск</option>
											<option>Краснодон</option>
											<option>Краснопартизанск</option>
											<option>Красный Луч</option>
											<option>Кременная</option>
											<option>Лисичанск</option>
											<option>Луганск</option>
											<option>Лутугино</option>
											<option>Миусинск</option>
											<option>Молодогвардейск</option>
											<option>Новодружеск</option>
											<option>Новопсков</option>
											<option>Первомайск</option>
											<option>Перевальск</option>
											<option>Петровское</option>
											<option>Попасная</option>
											<option>Приволье</option>
											<option>Ровеньки</option>
											<option>Рубежное</option>
											<option>Сватово</option>
											<option>Свердловск</option>
											<option>Северодонецк</option>
											<option>Станица Луганская</option>
											<option>Старобельск</option>
											<option>Стаханов</option>
											<option>Суходольск</option>
											<option>Счастье</option>
											<option>Червонопартизанск</option>
										</optgroup>
										<optgroup label="Львовская область">
											<option>Белз</option>
											<option>Бобрка</option>
											<option>Борислав</option>
											<option>Броды</option>
											<option>Буск</option>
											<option>Великие Мосты</option>
											<option>Винники</option>
											<option>Глиняны</option>
											<option>Городок</option>
											<option>Добромиль</option>
											<option>Дрогобыч</option>
											<option>Дубляны</option>
											<option>Жидачев</option>
											<option>Жолква</option>
											<option>Золочев</option>
											<option>Каменка-Бугская</option>
											<option>Львов</option>
											<option>Мостиска</option>
											<option>Николаев</option>
											<option>Новояворовск</option>
											<option>Новый Роздол</option>
											<option>Перемышляны</option>
											<option>Пустомыты</option>
											<option>Рава-Русская</option>
											<option>Радехов</option>
											<option>Рудки</option>
											<option>Самбор</option>
											<option>Сколе</option>
											<option>Сокаль</option>
											<option>Сосновка</option>
											<option>Старый Самбор</option>
											<option>Стебник</option>
											<option>Стрый</option>
											<option>Трускавец</option>
											<option>Угнев</option>
											<option>Хыров</option>
											<option>Червоноград</option>
											<option>Яворов</option>
										</optgroup>
										<optgroup label="Николаевская область">
											<option>Александровка</option>
											<option>Арбузинка</option>
											<option>Баштанка</option>
											<option>Березнеговатое</option>
											<option>Братское</option>
											<option>Веселиново</option>
											<option>Вознесенск</option>
											<option>Врадиевка</option>
											<option>Доманевка</option>
											<option>Еланец</option>
											<option>Казанка</option>
											<option>Кривое Озеро</option>
											<option>Николаев</option>
											<option>Новая Одесса</option>
											<option>Новый Буг</option>
											<option>Очаков</option>
											<option>Первомайск</option>
											<option>Снигиревка</option>
											<option>Южноукраинск</option>
										</optgroup>
										<optgroup label="Одесская область">
											<option>Ананьев</option>
											<option>Арциз</option>
											<option>Балта</option>
											<option>Белгород-Днестровский</option>
											<option>Беляевка</option>
											<option>Березовка</option>
											<option>Болград</option>
											<option>Великодолинское</option>
											<option>Измаил</option>
											<option>Ильичевск</option>
											<option>Килия</option>
											<option>Кодыма</option>
											<option>Котовск</option>
											<option>Любашевка</option>
											<option>Овидиополь</option>
											<option>Одесса</option>
											<option>Раздельная</option>
											<option>Рени</option>
											<option>Татарбунары</option>
											<option>Теплодар</option>
											<option>Ширяево</option>
											<option>Южное</option>
										</optgroup>
										<optgroup label="Полтавская область">
											<option>Гадяч</option>
											<option>Глобино</option>
											<option>Горишные Плавни</option>
											<option>Градижск</option>
											<option>Гребенка</option>
											<option>Дергачи</option>
											<option>Диканька</option>
											<option>Зеньков</option>
											<option>Карловка</option>
											<option>Кобеляки</option>
											<option>Котельва</option>
											<option>Кременчуг</option>
											<option>Лохвица</option>
											<option>Лубны</option>
											<option>Миргород</option>
											<option>Новые Санжары</option>
											<option>Пирятин</option>
											<option>Полтава</option>
											<option>Решетиловка</option>
											<option>Хорол</option>
											<option>Червонозаводское</option>
											<option>Чутово</option>
										</optgroup>
										<optgroup label="Ровенская область">
											<option>Березне</option>
											<option>Вараш</option>
											<option>Владимирец</option>
											<option>Дубно</option>
											<option>Дубровица</option>
											<option>Заречное</option>
											<option>Здолбунов</option>
											<option>Квасилов</option>
											<option>Клевань</option>
											<option>Корец</option>
											<option>Костополь</option>
											<option>Млинов</option>
											<option>Острог</option>
											<option>Радивилов</option>
											<option>Ровно</option>
											<option>Рокитное</option>
											<option>Сарны</option>
										</optgroup>
										<optgroup label="Сумская область">
											<option>Ахтырка</option>
											<option>Белополье</option>
											<option>Бурынь</option>
											<option>Ворожба</option>
											<option>Воронеж</option>
											<option>Глухов</option>
											<option>Дружба</option>
											<option>Конотоп</option>
											<option>Краснополье</option>
											<option>Кролевец</option>
											<option>Лебедин</option>
											<option>Путивль</option>
											<option>Ромны</option>
											<option>Свесса</option>
											<option>Середина-Буда</option>
											<option>Сумы</option>
											<option>Тростянец</option>
											<option>Шостка</option>
										</optgroup>
										<optgroup label="Тернопольская область">
											<option>Бережаны</option>
											<option>Борщев</option>
											<option>Бучач</option>
											<option>Великая Березовица</option>
											<option>Гусятин</option>
											<option>Залещики</option>
											<option>Збараж</option>
											<option>Зборов</option>
											<option>Козова</option>
											<option>Копычинцы</option>
											<option>Кременец</option>
											<option>Лановцы</option>
											<option>Монастыриска</option>
											<option>Подволочиск</option>
											<option>Подгайцы</option>
											<option>Почаев</option>
											<option>Скалат</option>
											<option>Теребовля</option>
											<option>Тернополь</option>
											<option>Хоростков</option>
											<option>Чертков</option>
											<option>Шумск</option>
										</optgroup>
										<optgroup label="Харьковская область">
											<option>Балаклея</option>
											<option>Барвенково</option>
											<option>Богодухов</option>
											<option>Валки</option>
											<option>Великий Бурлук</option>
											<option>Волчанск</option>
											<option>Высокий</option>
											<option>Дергачи</option>
											<option>Змиев</option>
											<option>Изюм</option>
											<option>Комсомольское</option>
											<option>Красноград</option>
											<option>Купянск</option>
											<option>Лозовая</option>
											<option>Люботин</option>
											<option>Мерефа</option>
											<option>Новая Водолага</option>
											<option>Первомайский</option>
											<option>Солоницевка</option>
											<option>Харьков</option>
											<option>Чугуев</option>
										</optgroup>
										<optgroup label="Херсонская область">
											<option>Антоновка</option>
											<option>Белозерка</option>
											<option>Берислав</option>
											<option>Великая Александровка</option>
											<option>Великая Лепетиха</option>
											<option>Геническ</option>
											<option>Голая Пристань</option>
											<option>Каланчак</option>
											<option>Камышаны</option>
											<option>Каховка</option>
											<option>Новая Каховка</option>
											<option>Новая Маячка</option>
											<option>Новоалексеевка</option>
											<option>Новотроицкое</option>
											<option>Пойма</option>
											<option>Скадовск</option>
											<option>Таврийск</option>
											<option>Херсон</option>
											<option>Чаплинка</option>
										</optgroup>
										<optgroup label="Хмельницкая область">
											<option>Виньковцы</option>
											<option>Волочиск</option>
											<option>Городок</option>
											<option>Деражня</option>
											<option>Дунаевцы</option>
											<option>Изяслав</option>
											<option>Каменец-Подольский</option>
											<option>Красилов</option>
											<option>Летичев</option>
											<option>Нетешин</option>
											<option>Полонное</option>
											<option>Понинка</option>
											<option>Славута</option>
											<option>Староконстантинов</option>
											<option>Теофиполь</option>
											<option>Хмельницкий</option>
											<option>Шепетовка</option>
										</optgroup>
										<optgroup label="Черкасская область">
											<option>Ватутино</option>
											<option>Городище</option>
											<option>Драбов</option>
											<option>Жашков</option>
											<option>Звенигородка</option>
											<option>Золотоноша</option>
											<option>Каменка</option>
											<option>Канев</option>
											<option>Корсунь-Шевченковский</option>
											<option>Лысянка</option>
											<option>Маньковка</option>
											<option>Монастырище</option>
											<option>Смела</option>
											<option>Тальное</option>
											<option>Умань</option>
											<option>Христиновка</option>
											<option>Черкассы</option>
											<option>Чернобай</option>
											<option>Чигирин</option>
											<option>Шпола</option>
										</optgroup>
										<optgroup label="Черниговская область">
											<option>Бахмач</option>
											<option>Бобровица</option>
											<option>Борзна</option>
											<option>Городня</option>
											<option>Десна</option>
											<option>Ичня</option>
											<option>Козелец</option>
											<option>Корюковка</option>
											<option>Мена</option>
											<option>Нежин</option>
											<option>Новгород-Северский</option>
											<option>Носовка</option>
											<option>Прилуки</option>
											<option>Седнев</option>
											<option>Семеновка</option>
											<option>Чернигов</option>
											<option>Щорс</option>
										</optgroup>
										<optgroup label="Черновицкая область">
											<option>Берегомет</option>
											<option>Вашковцы</option>
											<option>Вижница</option>
											<option>Герца</option>
											<option>Глыбокая</option>
											<option>Заставна</option>
											<option>Кельменцы</option>
											<option>Кицмань</option>
											<option>Красноильск</option>
											<option>Новоднестровск</option>
											<option>Новоселица</option>
											<option>Путила</option>
											<option>Сокиряны</option>
											<option>Сторожинец</option>
											<option>Хотин</option>
											<option>Черновцы</option>
										</optgroup> 
							</select>
							<label for="accuracy">
							    Выберите точность:
							    </label> <input id="accuracy" class="input-group form-control" type="number" min="1" name="accuracy" placeholder="0">
								</fieldset>
							</div>
							<div class="block_picker col-lg-7 offset-lg-1 p-4 align-self-center">
								<div class="row ">	
									<div class="col-xs-4 col-sm-4 col-md-4">
										<input name="floor1" class="form-control mb-3" type="number" placeholder="Этажность от" min="1" max="50" pattern="^	]">
										<input name="floor2" class="form-control mb-3" type="number" placeholder="Этажность до" min="1" max="50" pattern="^[0-9]">
										<input name="floor3" class="form-control mb-3" type="number" placeholder="Этаж от" min="1" pattern="^[0-9]">
										<input name="floor4" class="form-control mb-3" type="number" placeholder="Этаж до" min="1" pattern="^[0-9]">
									</div>
									<div class="col-xs-4 col-sm-4 col-md-4">
										<input name="area-size1" class="form-control mb-3" type="number" placeholder="Площадь от" min="20" step="10" pattern="^[0-9]">
										<input name="area-size2" class="form-control mb-3" type="number" placeholder="Площадь до" min="20" step="10" pattern="^[0-9]">
									</div>
									<div class="col-xs-4 col-sm-4 col-md-4">
										<input name="numberOfRoom1" class="form-control mb-3" type="number" placeholder="Кол-во комнат от" min="1" max="10" pattern="^[0-9]">
										<input name="numberOfRoom2" class="form-control mb-3" type="number" placeholder="Кол-во комнат до" min="1" max="10" pattern="^[0-9]">
 									</div>
 								</div>	
								<div class="currency row justify-content-center">
								<div>	
									<i class="fas fa-dollar-sign current" data-type="USD"></i>
								</div>
								<div class="ml-2 mr-2">	
									<i class="fas fa-euro-sign no-current" data-type="EUR"></i>
								</div>
								<div>	
									<i class="grivna no-current" data-type="UAH">₴</i>
								</div>
							</div>	
							</div>
						</div>
						<div class="container mt-4 p-0 text-center">
							
							<button id="getData" type="submit" class="btn btn-secondary btn-lg">ПОЛУЧИТЬ ДАННЫЕ
							<span></span>
							</button>
						</div>	
					</form>
				<div id="resultError"></div>
				</div>
			</section>
			<section id="result">	
				<div class="container cost p-5" name="result">
					<div class="row">
						<div class="cost_container col-lg-4 m-auto text-center">
							<h2 style="white-space:nowrap;">СРЕДНЯЯ СТОИМОСТЬ</h2>
							<p class="h1"><span id="moneyType"></span> <span id="averSum"></span></p>
						</div>
                        <div class="bodycontainer scrollable">
						<table class="table col-lg-8 table-striped table-hover table-scrollable">
							<thead class="thead-dark">
								<tr>
									<th scope="col">URL</th>
									<th scope="col">Цена</th>
									<th scope="col">Заголовок</th>
									<th scope="col">Объявление от</th>
									<th scope="col">Тип объекта</th>
									<th scope="col">Тип дома</th>
									<th scope="col">Этаж</th>
									<th scope="col">Этажность</th>
									<th scope="col">Общая площадь, м2</th>
									<th scope="col">Площадь кухни, м2</th>
									<th scope="col">Тип стен</th>
									<th scope="col">Количество комнат</th>
									<th scope="col">Планировка</th>
									<th scope="col">Санузел</th>
									<th scope="col">Отопление</th>
									<th scope="col">Ремонт</th>
									<th scope="col">Ландшафт</th>
									<th scope="col">Растояние к ближайшему городу</th>
									<th scope="col">Площадь участка, соток (ки/ка)</th>
									<th scope="col">Кадастровый номер</th>
									<th scope="col">Утепление стен</th>
									<th scope="col">Тип кровли</th>
									<th scope="col">год постройки</th>
								</tr>
							</thead>
							<tbody id="info">
								
							</tbody>
						</table>
						</div>
					</div>
				</div>
				<div class="container">
					<div id="arrowDrop" class="row justify-content-center mb-2">
						<i  class="fas fa-arrow-alt-circle-down" style="font-size: 6em"></i>
					</div>
				</div>	

				<div id="itemsContainer" class="result_container p-5 container" >
					<div class="result_title p-2">
						<h2 class="text-center">
							Результат
						</h2>
					</div>
					<div class="items_container container p-4" id="itemscont">
						<section>
							<div class="item container text-center p-3 mt-4 mb-4" name="resultFoto">
								<h3 class="caption">Logo</h3>
								<div class="flex-row flex-wrap">
									<div class="resLogo">
										<i class="fas fa-home" style="font-size: 5em; color: green;"></i>
									</div>
									<div class="mt-3">
										<p class="description">
											Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
										</p>
									</div>
								</div>
							</div>
						</section>
						<section>
							<div class="item container text-center p-3 mt-4 mb-4">
								<h3 class="caption">Logo</h3>
								<div class="flex-row flex-wrap">
									<div class="resLogo">
										<i class="fas fa-home" style="font-size: 5em; color: green;"></i>
									</div>
									<div class="mt-3">
										<p class="description">
											Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
										</p>
									</div>
								</div>
							</div>
						</section>
						<section>
							<div class="item container text-center p-3 mt-4 mb-4">
								<h3 class="caption">Logo</h3>
								<div class="flex-row flex-wrap">
									<div class="resLogo">
										<i class="fas fa-home" style="font-size: 5em; color: green;"></i>
									</div>
									<div class="mt-3">
										<p class="description">
											Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
										</p>
									</div>
								</div>
							</div>
						</section>
					</div>
					<div class="d-flex flex-row justify-content-center"><input type="button" class="btn btn-dark btn-lg mt-5" value="Скачать Excel" name="hello" OnClick="loadEx();"></div>
				</div>
			</section>			
		</div>
		<footer>
			<section>
				<div class="footer container p-2">
					<article>
						<p class="text-center">
							Copyright © 2018, Darser, All Rights Reserved
						</p>
					</article>
				</div>
			</section>
		</footer>
	</div>

	<div id="up" class="up text-center pt-3">
		<i class="fas fa-arrow-up h1"></i>
	</div>

	<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
</body>
</html>