<?php
//ob_start();

session_start();

$_SESSION['name'] = 'cookie.txt';
$_SESSION['moneyType'] = 'UAH';

$str_json = file_get_contents('php://input');

$response = json_decode($str_json, true);
// убрать
$_SESSION['moneyType'] = $response['location'];

require_once 'connection.php';
require_once 'simple_html_dom.php';
require_once 'BuildingClass.php';
require_once 'curl.php';
require_once 'oldFunc.php';
require_once 'createURL.php';
require_once 'excel.php';

require_once 'parsingFunctions.php';
require_once 'printFunctions.php';
require_once 'processFunctions.php';

// глобальные переменные
$arrayOfPageURLS = array();
$arrayOfBuildings = array();

$maxPage = 0;
$currentPage = 0;

$numURLS = 50;
$countParsedURLS = 0;

$URL_for_parsing = '';

parseFirstPage('https://www.olx.ua/nedvizhimost/kvartiry-komnaty/poltava/?search%5Border%5D=filter_float_price%3Adesc', 'td[class=offer] table tbody]', 'span[class=item fleft] a[class=block br3 brc8 large tdnone lheight24] span');
parseArrayOfURLs();
usort($arrayOfBuildings, "sortArrayByRating");
addToDataBase($arrayOfBuildings);
$_SESSION['array'] = $arrayOfBuildings;
createJSON();
?>