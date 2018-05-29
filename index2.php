<?php
//ob_start();

session_start();
$_SESSION['name'] = 'cookie.txt';
$_SESSION['moneyType'] = 'UAH';
//echo $_SESSION['test'];

require_once 'connection.php'; // подключаем скрипт
require_once 'simple_html_dom.php';
require_once 'BuildingClass.php';
require_once 'curl.php';
require_once 'oldFunc.php';
require_once 'createURL.php';
require_once 'excel.php';

// подключаемся к серверу БД
//$link = mysqli_connect($host, $user, $password, $database)
//or die("Ошибка " . mysqli_error($link));

// глобальные переменные
$arrayOfPageURLS = array();
$arrayOfBuildings = array();

$maxPage = 0;
$currentPage = 0;

$numURLS = 50;
$countParsedURLS = 0;

$URL_for_parsing = '';

// функции
function printArray($arr){
    echo 'Перебрано результатов '.count($arr).'<br>';
    foreach($arr as $key => $value) {
        echo "$key   =   $value <br />";
    }
}

function parseFirstPage($url, $tag, $tagForCountPage, $page = 1){
    global $maxPage, $currentPage, $countParsedURL, $arrayOfPageURLS, $numURLS;

    $fullURL = $url.'%27&page='.$page;
    $data = str_get_html(CURLrequest($fullURL));
    $res = 0;

    if ($data->innertext!=''){
        if(count($data->find( $tagForCountPage))){
            foreach($data->find($tagForCountPage) as $a){
                $res = $a->plaintext;
            }
        }
        $maxPage = $res;
        //echo 'Количество страниц: '.$res.'<br>';

        if(count($data->find($tag))){
            foreach($data->find($tag) as $res){
                if ($countParsedURL < $numURLS){
                    $key = $res->children(0)->children(0)->children(1)->children(0)->children(0)->children(0)->href;
                    $val = $res->children(0)->children(0)->children(2)->children(0)->children(0)->children(0)->plaintext;
                    $key = preg_replace('/#.+/','', $key);
                    if (!array_key_exists($key, $arrayOfPageURLS)){
                        $arrayOfPageURLS[$key] = trim($val);
                        $countParsedURL++;
                    }
                }
                else {
                    break;
                }
            }
            $currentPage = $page + 1;

            if ($countParsedURL < $numURLS && $currentPage < $maxPage){
                parseNextPage($url, $tag, $currentPage);
            }
        }
    }
}

function parseNextPage($url, $tag, $page){
    global $maxPage, $currentPage, $countParsedURL, $arrayOfPageURLS, $numURLS;

    $fullURL = $url.'%27&page='.$page;
    $data = str_get_html(CURLrequest($fullURL));

    if($data->innertext!='' and count($data->find($tag))){
        foreach($data->find($tag) as $res){
            if ($countParsedURL < $numURLS){
                $key = $res->children(0)->children(0)->children(1)->children(0)->children(0)->children(0)->href;
                $val = $res->children(0)->children(0)->children(2)->children(0)->children(0)->children(0)->plaintext;
                if (!array_key_exists($key, $arrayOfPageURLS)){
                    $arrayOfPageURLS[$key] = trim($val);
                    $countParsedURL++;
                }
            }
            else {
                break;
            }
        }
        $currentPage = $currentPage + 1;
        if ($countParsedURL < $numURLS && $currentPage < $maxPage){
            parseNextPage($url, $tag, $currentPage);
        }
    }
}

function parseInnerPage($url, $tagHeader, $tagName, $tagDescription, $tagPhoto, $tagRating){

    global $arrayOfBuildings, $arrayOfPageURLS;

    // потом удалить
    //$arrayOfPageURLS[$url] = '500 000 грн.';

    $ob = new Building($url);
    $data = str_get_html(CURLrequest($url));

    if ($data->innertext!=''){

        if (count($data->find($tagName))){
            foreach($data->find($tagName) as $HEADER){
                $res = $HEADER->plaintext;
                $res = preg_replace("/[\t\r\n]+/",' ', $res);
                $res = preg_replace('/ {2,}/',' ',$res);
                $res = str_replace('&amp;', '&', $res);
                $res = str_replace('&nbsp;', ' ', $res);
                $res = str_replace('&quot;',"",$res);
                $first = mb_substr($res, 0, 1, 'UTF-8');
                $last = mb_substr($res, mb_strlen($res) - 2, 1, 'UTF-8');
                if ( strcmp($first, $last)) {
                    $res = mb_substr($res, 1, strlen($res) - 1, 'UTF-8');
                }
                $ob->headline = $res;
            }
        }
// тестовый блок
        if (count($data->find($tagDescription))){
            foreach($data->find($tagDescription) as $desc){
                $res = $desc->innertext;
                $res = preg_replace("/br/um","",$res);
                $res = preg_replace("/\\t/um","",$res);
                $res = preg_replace("/[^a-zA-ZА-Яа-я0-9\s\-\_\.\,ёЁЇїІіЄєҐґ\!\?]/um","",$res);
                $res = preg_replace("/span.+?[\.\,]/um","",$res);
                $res = preg_replace("/span.+?-spanspan/um","",$res);
                $res = preg_replace("/quot/um","",$res);
                $res = preg_replace("/\\.?u\d+/um","",$res);
                //$res = preg_replace("/\\.?u2029/um","",$res);
                $res = preg_replace("/[тел\. ]?380.+?-.+?-.+?[\.\,]?/um","",$res);
                
                $description = $res;
                $description = preg_replace("/[\t\r\n]+/",' ', $description);
                $description = preg_replace('/\s{2,}/',' ',$description);
                $description = str_replace('&amp;', '&', $description);
                $description = str_replace('&nbsp;', ' ', $description);
                $first = mb_substr($description, 0, 1, 'UTF-8');
                $last = mb_substr($description, mb_strlen($description) - 2, 1, 'UTF-8');
                if ( strcmp($first, $last)) {
                    $description = mb_substr($description, 1, strlen($description) - 1, 'UTF-8');
                }
    
                $ob->description = $description;
            }
        }
        if (count($data->find($tagPhoto))){
            foreach($data->find($tagPhoto) as $foto){
                $ob->photo = $foto->src;
            }
        }
        if (count($data->find($tagRating))){
            foreach($data->find($tagRating) as $rating){
                $ob->rating = $rating->innertext;
            }
        }

        if(count($data->find( $tagHeader))){
            foreach($data->find($tagHeader) as $tableHeader){
                //$res = $tableHeader;
                $head = (string)$tableHeader->children(0)->plaintext;
                $textT = (string)$tableHeader->children(1)->children(0)->plaintext;
                $textT = preg_replace("/[\t\r\n]+/",' ', $textT);
                $textT = preg_replace('/ {2,}/',' ',$textT);
                $textT = str_replace('&amp;', '&', $textT);
                $text = str_replace('&nbsp;', ' ', $textT);
                $first = mb_substr($text, 0, 1, 'UTF-8');
                $last = mb_substr($text, mb_strlen($text) - 2, 1, 'UTF-8');
                if ( strcmp($first, $last)) {
                    $text = mb_substr($text, 1, strlen($text) - 1, 'UTF-8');
                }
                $ob->price = $arrayOfPageURLS[$url];
                // указать тип валюты с запроса
                $ob->moneyType = $_SESSION['moneyType'];
                $ob->moneyValue = preg_replace("/[^0-9]/", '', $arrayOfPageURLS[$url]);

                switch ( mb_strtolower($head)) {
                    case 'объявление от':
                        $ob->typeSell = $text;
                        break;
                    case 'без комиссии':
                        $ob->lessPrice = $text;
                        break;
                    case 'тип объекта':
                        $ob->buildingType = $text;
                        break;
                    case 'тип дома':
                        $ob->houseType = $text;
                        break;
                    case 'этажность':
                        $ob->floorCount = $text;
                        break;
                    case 'этаж':
                        $ob->floorNumber = $text;
                        break;
                    case 'общая площадь':
                        $ob->commonSquare = $text;
                        break;
                    case 'площадь кухни':
                        $ob->kitchenSquare = $text;
                        break;
                    case 'тип стен':
                        $ob->wallType = $text;
                        break;
                    case 'внешнее утепленее стен':
                        $ob->outHeatingWall = $text;
                        break;
                    case 'количество комнат':
                        $ob->roomCount = $text;
                        break;
                    case 'планировка':
                        $ob->layout = $text;
                        break;
                    case 'санузел':
                        $ob->tuilet = $text;
                        break;
                    case 'отопление':
                        $ob->heating = $text;
                        break;
                    case 'ремонт':
                        $ob->repear = $text;
                        break;
                    case 'меблирование':
                        $ob->furniture = $text;
                        break;
                    case 'бытовая техника':
                        $ob->devices = $text;
                        break;
                    case 'комфорт':
                        $ob->comfort = $text;
                        break;
                    case 'коммуникации':
                        $ob->communication = $text;
                        break;
                    case 'инфраструктура (до 500 метров)':
                        $ob->infrastructure = $text;
                        break;
                    case 'ландшафт (до 1 км.)':
                        $ob->landshaft = $text;
                        break;
                    case 'описание':
                        $ob->notation = $text;
                        break;
                    case 'расстояние до ближайшего города':
                        $ob->lengthToCity = $text;
                        break;
                    case 'площадь участка':
                        $ob->landSquare = $text;
                        break;
                    case 'кадастровый номер':
                        $ob->cadastralNumber = $text;
                        break;
                    case 'тип кровли':
                        $ob->roofType = $text;
                        break;
                    case 'год постройки\сдачи':
                        $ob->biiltYear = $text;
                        break;
                    case 'мультимедиа':
                        $ob->multimedia = $text;
                        break;

                    default:
                        # code...
                        break;
                }
            }
        }
    }

    //$res = $ob->__toString();
    //echo $ob;
    array_push($arrayOfBuildings, $ob);

}

function parseArrayOfURLs(){
    global $arrayOfPageURLS;
    if (count($arrayOfPageURLS) > 0){
        foreach ($arrayOfPageURLS as $url => $cost) {
            parseInnerPage($url, 'table[class=item] tbody tr',
                'div[class=offer-titlebox] h1',
                'div[id=textContent] p',
                'div[id=photo-gallery-opener] img',
                'div[id=offerbottombar] div[class=pdingtop10] strong');
        }
    }
}

function printTable($objectArray){

    echo '<table border="1"';

    echo '<tr>';

    echo '<th>'.'Адрес'.'</th>';
    echo '<th>'.'Заголовок'.'</th>';
    echo '<th>'.'Объявление от'.'</th>';
    echo '<th>'.'Цена'.'</th>';
    echo '<th>'.'Комиссия'.'</th>';
    echo '<th>'.'Тип объекта'.'</th>';
    echo '<th>'.'Тип дома'.'</th>';
    echo '<th>'.'Этаж'.'</th>';
    echo '<th>'.'Этажность'.'</th>';
    echo '<th>'.'Общая площадь'.'</th>';
    echo '<th>'.'Площадь кухни'.'</th>';
    echo '<th>'.'Тип стен'.'</th>';
    echo '<th>'.'Количество комнат'.'</th>';
    echo '<th>'.'Планировка'.'</th>';
    echo '<th>'.'Санузел'.'</th>';
    echo '<th>'.'Отопление'.'</th>';
    echo '<th>'.'Ремонт'.'</th>';
    echo '<th>'.'Меблирование'.'</th>';
    echo '<th>'.'Бытовая техника'.'</th>';
    echo '<th>'.'Мультимедиа'.'</th>';
    echo '<th>'.'Комфорт'.'</th>';
    echo '<th>'.'Коммуникации'.'</th>';
    echo '<th>'.'Инфраструктура'.'</th>';
    echo '<th>'.'Ландшафт'.'</th>';
    echo '<th>'.'Описание'.'</th>';
    echo '<th>'.'Расстояние к ближайшему городу'.'</th>';
    echo '<th>'.'Площадь участка'.'</th>';
    echo '<th>'.'Кадастровый номер'.'</th>';
    echo '<th>'.'Внешнее утепление стен'.'</th>';
    echo '<th>'.'Тип кровли'.'</th>';
    echo '<th>'.'Год постройки'.'</th>';

    echo '</tr>';

    foreach ($objectArray as $ob) {
        echo '<tr>';
        echo '<td>'.$ob->URL.'</td>';
        echo '<td>'.$ob->headline.'</td>';
        echo '<td>'.$ob->typeSell.'</td>';
        echo '<td>'.$ob->price.'</td>';
        echo '<td>'.$ob->lessPrice.'</td>';
        echo '<td>'.$ob->buildingType.'</td>';
        echo '<td>'.$ob->houseType.'</td>';
        echo '<td>'.$ob->floorNumber.'</td>';
        echo '<td>'.$ob->floorCount.'</td>';
        echo '<td>'.$ob->commonSquare.'</td>';
        echo '<td>'.$ob->kitchenSquare.'</td>';
        echo '<td>'.$ob->wallType.'</td>';
        echo '<td>'.$ob->roomCount.'</td>';
        echo '<td>'.$ob->layout.'</td>';
        echo '<td>'.$ob->tuilet.'</td>';
        echo '<td>'.$ob->heating.'</td>';
        echo '<td>'.$ob->repear.'</td>';
        echo '<td>'.$ob->furniture.'</td>';
        echo '<td>'.$ob->devices.'</td>';
        echo '<td>'.$ob->multimedia.'</td>';
        echo '<td>'.$ob->comfort.'</td>';
        echo '<td>'.$ob->communication.'</td>';
        echo '<td>'.$ob->infrastructure.'</td>';
        echo '<td>'.$ob->landshaft.'</td>';
        echo '<td>'.$ob->notation.'</td>';

        echo '<td>'.$ob->lengthsToCity.'</td>';
        echo '<td>'.$ob->landSquare.'</td>';
        echo '<td>'.$ob->cadastralNumber.'</td>';
        echo '<td>'.$ob->outHeatingWall.'</td>';
        echo '<td>'.$ob->roofType.'</td>';
        echo '<td>'.$ob->builtYear.'</td>';
        echo '<td>'.$ob->moneyType.'</td>';
        echo '<td>'.$ob->moneyValue.'</td>';

        echo '</tr>';
    }
    echo '</table>';
}

function printTable1($objectArray){

    echo '<table border="1" class="table-dark"';

    echo '<tr>';
    echo '<th>'.'Адрес'.'</th>';
    echo '<th>'.'Цена'.'</th>';
    echo '</tr>';

    foreach ($objectArray as $ob) {
        echo '<tr>';
        echo '<td>'.$ob->URL.'</td>';
        echo '<td>'.$ob->price.'</td>';
        echo '</tr>';
    }
    echo '</table>';
}

function printTableTestBigTableAttributes($objectArray){

    echo '<table border="1" class="table-dark"';

    echo '<tr>';
    echo '<th>'.'Адрес'.'</th>';
    echo '<th>'.'Описание'.'</th>';
    echo '<th>'.'Фото'.'</th>';
    echo '<th>'.'Рейтинг'.'</th>';
    echo '</tr>';

    foreach ($objectArray as $ob) {
        echo '<tr>';
        echo '<td>'.$ob->URL.'</td>';
        echo '<td>'.$ob->description.'</td>';
        echo '<td>'.$ob->photo.'</td>';
        echo '<td>'.$ob->rating.'</td>';
        echo '</tr>';
    }
    echo '</table>';
}

function openWindow(){
    echo('<script type="text/javascript">
           window.onload=function(e){
                window.open("download.php");
           }
            </script>');
}

function sortArrayByRating(Building $b1, Building $b2) {
    if ($b1->rating > $b2->rating) {
        return -1;
    } else return 1;
}

function createJSON() {
    global $arrayOfBuildings;
    echo json_encode($arrayOfBuildings, JSON_UNESCAPED_UNICODE);
}

function addToDataBase($objectArray) {
        // подключаемся к серверу
        global $host, $user, $password, $database;
        $link = mysqli_connect($host, $user, $password, $database)
        or die("Ошибка " . mysqli_error($link));
        $count = 0;
    foreach ($objectArray as $ob) {
        // создание строки запроса
            $query = "INSERT INTO buildings 
        VALUES(
            '$ob->URL',
            '$ob->headline',
            '$ob->typeSell',
            '$ob->price',
            '$ob->lessPrice',
            '$ob->buildingType',
            '$ob->houseType',
            '$ob->floorNumber',
            '$ob->floorCount',
            '$ob->commonSquare',
            '$ob->kitchenSquare',
            '$ob->wallType',
            '$ob->roomCount',
            '$ob->layout',
            '$ob->tuilet',
            '$ob->heating',
            '$ob->repear',
            '$ob->furniture',
            '$ob->devices',
            '$ob->multimedia',
            '$ob->comfort',
            '$ob->communication',
            '$ob->infrastructure',
            '$ob->landshaft',
            '$ob->notation',
            '$ob->lengthsToCity',
            '$ob->landSquare',
            '$ob->cadastralNumber',
            '$ob->outHeatingWall',
            '$ob->roofType',
            '$ob->builtYear',
            '$ob->description',
            '$ob->photo',
            '$ob->rating',
            '$ob->moneyType',
            '$ob->moneyValue'
        ) ON DUPLICATE KEY UPDATE URL=URL";
        // выполняем запрос
        $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
        if($result){
                $count++;
                //echo "<span style='color:blue;'>Данные добавлены $count</span><br>";
            }
    }
    // закрываем подключение
    mysqli_close($link);
}

//parseFirstPage('https://www.olx.ua/nedvizhimost/kvartiry-komnaty/poltava/?search%5Border%5D=filter_float_price%3Adesc', 'a[class=marginright5 link linkWithHash detailsLink]', 'span[class=item fleft] a[class=block br3 brc8 large tdnone lheight24] span');
//printArray($arrayOfPageURLS);

parseFirstPage('https://www.olx.ua/nedvizhimost/kvartiry-komnaty/poltava/?search%5Border%5D=filter_float_price%3Adesc', 'td[class=offer] table tbody]', 'span[class=item fleft] a[class=block br3 brc8 large tdnone lheight24] span');
//printArray($arrayOfPageURLS);
//$arrayOfPageURLS['https://www.olx.ua/obyavlenie/srochno-sobstvennik-sdan-1-k-kv-ul-perspektivnaya-11-m-n-sadovyy-IDl9aQe.html#65b8e63905;promoted'] = '50000';
//parseInnerPage('https://www.olx.ua/obyavlenie/srochno-sobstvennik-sdan-1-k-kv-ul-perspektivnaya-11-m-n-sadovyy-IDl9aQe.html#65b8e63905;promoted', 'table[class=item] tbody tr',
//                'div[class=offer-titlebox] h1',
//                'div[id=textContent] p',
//                'div[id=photo-gallery-opener] img',
//                'div[id=offerbottombar] div[class=pdingtop10] strong');
parseArrayOfURLs();
usort($arrayOfBuildings, "sortArrayByRating");
//printTable1($arrayOfBuildings);
addToDataBase($arrayOfBuildings);
$_SESSION['array'] = $arrayOfBuildings;
//openWindow();
//getFileName('.txt');
//getExcel('Blablabla', $arrayOfBuildings);
//file_force_download('cookie.txt');
//printArray($arrayOfPageURLS);
//printArray($arrayOfBuildings);
//echo json_encode($arrayOfBuildings, JSON_UNESCAPED_UNICODE);
createJSON();
?>