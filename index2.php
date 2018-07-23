<?php

session_start();

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

$_SESSION['name'] = 'cookie.txt';
$_SESSION['moneyType'] = 'UAH'; 

// получить json
$str_json = file_get_contents('php://input');
$response = json_decode($str_json, true);

// глобальные переменные
$numURLS = 0; 
$URL_for_parsing = ''; 
$arrayOfPageURLS = array();
$arrayOfBuildings = array();

// задать нужные параметры
$numURLS = $response['countRequest'];
$_SESSION['moneyType'] = $response['priceType'];

// сформировать поисковую строку
if(strcasecmp($response['typeBuild'], 'house') == 0) {
    createURLHouse();
} else {
    createURLFlat();
}

// рабочие переменные
$maxPage = 0;
$currentPage = 0;
$countParsedURLS = 0;

//echo $URL_for_parsing;
//var_dump($response);

// спарсить
parseFirstPage($URL_for_parsing, 'td[class=offer] table tbody]', 'span[class=item fleft] a[class=block br3 brc8 large tdnone lheight24] span');
parseArrayOfURLs();
usort($arrayOfBuildings, "sortArrayByRating");
$_SESSION['array'] = $arrayOfBuildings;
createJSON();
//addToDataBase($arrayOfBuildings);
?>