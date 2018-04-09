<?php
require_once 'connection.php'; // подключаем скрипт
require_once 'simple_html_dom.php';
require_once 'BuildingClass.php';
require_once 'curl.php';
require_once 'oldFunc.php';
 
 // подключаемся к серверу БД
$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));


// глобальные переменные
$arrayOfPageURLS = array();
$arrayOfBuildings = array();

$maxPage = 0;
$currentPage = 0;

$numURLS = 200;
$countParsedURLS = 0;



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
        echo 'Количество страниц: '.$res.'<br>';

        if(count($data->find($tag))){
            foreach($data->find($tag) as $res){
                if ($countParsedURL < $numURLS){
                    $key = $res->children(0)->children(0)->children(1)->children(0)->children(0)->children(0)->href;
                    $val = $res->children(0)->children(0)->children(2)->children(0)->children(0)->children(0)->plaintext;
                    if (!array_key_exists($key, $arrayOfPageURLS)){
                        $arrayOfPageURLS[$key] = $val;
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
                        $arrayOfPageURLS[$key] = $val;
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

function parseInnerPage($url, $tagHeader, $tagName){

    global $arrayOfBuildings, $arrayOfPageURLS;

    // потом удалить
    $arrayOfPageURLS[$url] = '500 000 грн.';

    $ob = new Building($url);
    $data = str_get_html(CURLrequest($url));

    if ($data->innertext!=''){

        if (count($data->find($tagName))){
            foreach($data->find($tagName) as $HEADER){
                $res = $HEADER->plaintext;
                $ob->headline = $res;
            }
        }

        if(count($data->find( $tagHeader))){
            foreach($data->find($tagHeader) as $tableHeader){
                //$res = $tableHeader;
                $head = (string)$tableHeader->children(0)->plaintext;
                $text = (string)$tableHeader->children(1)->children(0)->plaintext;
                $ob->price = $arrayOfPageURLS[$url];
                echo $head.' -> ';
                echo $text.'<br>';
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
    echo $ob;
    array_push($arrayOfBuildings, $ob);

}

//parseFirstPage('https://www.olx.ua/nedvizhimost/kvartiry-komnaty/poltava/?search%5Border%5D=filter_float_price%3Adesc', 'a[class=marginright5 link linkWithHash detailsLink]', 'span[class=item fleft] a[class=block br3 brc8 large tdnone lheight24] span');
//printArray($arrayOfPageURLS);

parseFirstPage('https://www.olx.ua/nedvizhimost/kvartiry-komnaty/poltava/?search%5Border%5D=filter_float_price%3Adesc', 'td[class=offer] table tbody]', 'span[class=item fleft] a[class=block br3 brc8 large tdnone lheight24] span');
printArray($arrayOfPageURLS);
parseInnerPage('https://www.olx.ua/obyavlenie/prodam-3k-kvartiru-mn-levada-IDyH3e0.html#e8dbef79ab;promoted', 'table[class=item] tbody tr', 'div[class=offer-titlebox] h1')
?>

