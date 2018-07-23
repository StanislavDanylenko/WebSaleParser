<?php
session_start();
    $_SESSION['test'] = 'test';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
	    function loadEx(){
                window.open("download.php");
	    }
    </script>
    <script>
        $(function() {
        $('#button').click(function() {
        //посылаем запрос на страницу includes/check.php
        $.ajax({
            type: "POST",
            //путь к скрипту
            url: 'index2.php',
            dataType: "text",
            success: function(data) {
            //в перменной data мы получим ответ от скрипта
            //document.body.innerHTML+=data;
             document.getElementById("q").innerHTML = data;
                //var arr = eval(data);
                /*Console.log(arr);
                alert("i am here!");*/
                //var jsonRes = JSON.parse(data);
                //alert(jsonRes);
                //alert(data.lenght);
                //document.getElementById("q").innerHTML = "bjbj";
                //console.log(data);
        },
        error:function (xhr, ajaxOptions, thrownError){
        //если ошибка аякса, то выведем ее
        alert(xhr.status);
        alert(thrownError);
    } 
    });
    });
    });
    </script>
</head>
<body>
	<div class="wrapper container-fluid">
		<header>
			<div class="header container container">
				<div class="row">
					<div class="col-md-3 pl-5">
						<img class="img-thumbnail" src="logo.png" alt="logo" width="75" height="75">
					</div>
					<div class="col-md-9 mt-3">
						<h1 class="text-center">
							WWW.WEBPARS.COM
						</h1>
					</div>
				</div>
			</div>
		</header>
		<div id="main">
			<section>
				<div class="searh_block container pt-3 pb-3">
					<div class="jumbotron jumbotron">
						<h2>
							Lorem Ipsulum
						</h2>
						<hr>
						<p>
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
						</p>
					</div>
					<form action="" method="POST">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-3">
								<fieldset>								
									<legend>Personal information:</legend>
									<label for="">
									Выберите тип недвижимости:
									</label>
									<br>
									<input name="building" type="radio" checked>
									<label class="mr-1" for="">Дом</label>
									<input name="building" type="radio">
									<label for="">Квартира</label>
									<br>
									<label for="">
										Выберите операцию:
									</label>
									<select class="custom-select mb-2" name="operation" data-style="btn-primary">
											<option value="buying">Покупка</option>
											<option value="selling">Продажа</option>
											<option value="rent">Аренда</option>
											<option value="delivery">Сдача</option>
									</select>
									<br>
									<label for="">
										Выберите населённый пункт
									</label>
									<select class="custom-select" name="address" data-style="btn-info" data-live-search="true" defaultval="Вся Украина">    
											<option>Выберите населённый пункт</option>
											<optgroup label="Винницкая обл.">
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
											</optgroup>
											<optgroup label="Волынская обл.">
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
											<optgroup label="Днепропетровская обл.">
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
											<optgroup label="Донецкая обл.">
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
											<optgroup label="Житомирская обл.">
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
											<optgroup label="Закарпатская обл.">
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
											<optgroup label="Запорожская обл.">
												<option>Акимовка</option>
												<option>Беляевка</option>
												<option>Бердянск</option>
												<option>Васильевка</option>
												<option>Веселое</option>
												<option>Вольнянск</option>
												<option>Гуляйполе</option>
												<option>Днепрорудное</option>
												<option>Запорожье</option>
												<option>Каменка-Днепровская</option>
												<option>Куйбышево</option>
												<option>Кушугум</option>
												<option>Мелитополь</option>
												<option>Михайловка</option>
												<option>Молочанск</option>
												<option>Орехов</option>
												<option>Пологи</option>
												<option>Приморск</option>
												<option>Розовка</option>
												<option>Токмак</option>
												<option>Энергодар</option>
											</optgroup>
											<optgroup label="Ивано-Франковская обл.">
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
											<optgroup label="Киевская обл.">
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
											<optgroup label="Кировоградская обл.">
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
											</optgroup>
											<optgroup label="Крым">
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
											<optgroup label="Луганская обл.">
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
											<optgroup label="Львовская обл.">
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
											<optgroup label="Николаевская обл.">
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
											<optgroup label="Одесская обл.">
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
											<optgroup label="Полтавская обл.">
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
											<optgroup label="Ровенская обл.">
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
											<optgroup label="Сумская обл.">
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
											<optgroup label="Тернопольская обл.">
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
											<optgroup label="Харьковская обл.">
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
											<optgroup label="Херсонская обл.">
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
											<optgroup label="Хмельницкая обл.">
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
											<optgroup label="Черкасская обл.">
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
											<optgroup label="Черниговская обл.">
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
											<optgroup label="Черновицкая обл.">
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
								</fieldset>
							</div>
							<div class="block_picker row col-xs-12 col-sm-12 col-md-9 ml-0">
								<div class="col-xs-4 col-sm-4 col-md-4">
									<input class="form-control mb-2" type="text" placeholder="Этаж">
									<input class="form-control mb-2" type="text" placeholder="Этаж">
									<input class="form-control mb-2" type="text" placeholder="Этаж">
									<input class="form-control mb-2" type="text" placeholder="Этаж">
								</div>
								<div class="col-xs-4 col-sm-4 col-md-4">
									<input class="form-control mb-2" type="text" placeholder="Площадь">
									<input class="form-control mb-2" type="text" placeholder="Площадь">
								</div>
								<div class="col-xs-4 col-sm-4 col-md-4">
									<input class="form-control mb-2" type="text" placeholder="Кол-во комнат">
									<input class="form-control mb-2" type="text" placeholder="Кол-во комнат">
								</div>
							</div>
							<div class="container text-center mt-4">	
     							<input name="myActionName" type="submit" class="btn btn-secondary btn-lg" value="ПОЛУЧИТЬ ДАННЫЕ (POST)" />
							</form>
							<button type="button" class="btn btn-secondary btn-lg" id="button">ПОЛУЧИТЬ ДАННЫЕ (AJAX) </button>
						</div>	
					</form>
				</div>
				<?php 
					if(isset($_POST['myActionName'])){
                        include 'index2.php';
                    } 
                ?>
                <section id="q"></section>
			</section>
			<section>	
				<div class="result_container container">
					<div class="result_title mb-0">
						<h2 class="text-center">
							Результат
						</h2>
					</div>
					<div class="items_container container">
						<section>
							<div class="item container">
								<h3>Logo</h3>
								<div class="row">
									<div class="col-xs-3 col-sm-3 col-md-3">
										<img src="logo.png" width="100" height="100" alt="logo">
									</div>
									<div class="col-xs-9 col-sm-9 col-md-9">
										<p>
											Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
										</p>
									</div>
								</div>
							</div>
						</section>
						<section>
							<div class="item container">
								<h3>Logo</h3>
								<div class="row">
									<div class="col-xs-3 col-sm-3 col-md-3">
										<img src="logo.png" width="100" height="100" alt="logo">
									</div>
									<div class="col-xs-9 col-sm-9 col-md-9">
										<p>
											Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
										</p>
									</div>
								</div>
							</div>
						</section>
						<section>
							<div class="item container">
								<h3>Logo</h3>
								<div class="row">
									<div class="col-xs-3 col-sm-3 col-md-3">
										<img src="logo.png" width="100" height="100" alt="logo">
									</div>
									<div class="col-xs-9 col-sm-9 col-md-9">
										<p>
											Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
										</p>
									</div>
								</div>
							</div>
						</section>
					</div>
					<div class="container mt-4 text-center">
						<!--<button class="btn btn-dark btn-lg" type="button" name="hello">Подробнее
						</button>-->
				<input type="button" class="btn btn-dark btn-lg" value="Скачать" name="hello" OnClick="loadEx();">
					</div>
				</div>
			</section>			
		</div>
		<footer>
			<section>
				<div class="footer container pt-2">
					<article>
						<p class="text-center">
							Copyright © 2018, Your Company Here, All Rights Reserved
						</p>
					</article>
				</div>
			</section>
		</footer>
	</div>
	<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
</body>
</html>