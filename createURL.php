<?php
function createURL(){
    global $URL_for_parsing;
    $URL = 'https://www.olx.ua/nedvizhimost/';
    // тип строения
    if (true){
        $URL = $URL.'doma/';
    } else {
        $URL = $URL.'kvartiry-komnaty/';
    }

    // тип операции
    if (true) {
        $URL = $URL.'prodazha-domov/';
    } else if (true){
        $URL = $URL.'arenda-domov/';
    } else if (true){
        $URL = $URL.'prodazha-kvartir-komnat/';
    } else if (true){
        $URL = $URL.'arenda-kvartir-komnat/';
    }

    //если еще заданы какие-то поля
    if (true){
        $URL = $URL.'?';
    }

    // !!!!!!! перед каждой следующей операцией нужно добавлять & !!!!!!!!
    //
    // ВНИМАНИЕ
    //
    // !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

    // этаж для квартиры
    if (true){
        $URL = $URL.'search%5Bfilter_float_floor%3Afrom%5D='.''; // дописать конкатанацию значения начального этажа
    } else if (true){
        $URL = $URL.'search%5Bfilter_float_floor%3Ato%5D='.''; // дописать конкатанацию значения последнего этажа
    }

    // этажность
    if (true){
        $URL = $URL.'search%5Bfilter_float_total_floors%3Afrom%5D='.''; // дописать
    } else if (true){
        $URL = $URL.'search%5Bfilter_float_total_floors%3Ato%5D='.''; // дописать
    }

    // количество комнат в квартире
    if (true){
        $URL = $URL.'search%5Bfilter_float_number_of_rooms%3Afrom%5D='.''; // дописать
    } else if (true){
        $URL = $URL.'search%5Bfilter_float_number_of_rooms%3Ato%5D='.''; // дописать
    }

    // общая площадь
    if (true){
        $URL = $URL.'search%5Bfilter_float_total_area%3Afrom%5D='.''; // дописать
    } else if (true){
        $URL = $URL.'search%5Bfilter_float_total_area%3Ato%5D=5'.''; // дописать
    }

    // площадь участка (для ДОМА)
    if (true){
        $URL = $URL.'search%5Bfilter_float_land_area%3Afrom%5D='.''; // дописать
    } else if (true){
        $URL = $URL.'search%5Bfilter_float_land_area%3Ato%5D='.''; // дописать
    }

    $URL_for_parsing = $URL;
}

function createURLHouse(){
    global $response, $URL_for_parsing;

    $URL = 'https://www.olx.ua/nedvizhimost/doma/';

    /*String location;               область/город +
    String typeBuild;                тип постройки +
    String buyRent;                  тип операции +
    String floorCountMin;            этажность макс +
    String floorCountMax;            этажность мин +
    String floorMin;                 этаж макс !-
    String floorMax;                 этаж мин  !-
    String roomNumberMin;            количество комнат мин +
    String roomNumberMax;            количество комнат макс +
    String areaMin;                  минимальная площадь +
    String areaMax;                  максимальная площадь +
    String priceType;                валюта !-
    String countRequest;             количесто вариантов !-
    */

    // дописать тип операции
    if(strcasecmp($response['buyRent'], 'buy') == 0){
        $URL = $URL.'prodazha-domov/';
    } else {
        $URL = $URL . 'arenda-domov/';
    }

    // дописать местоположение
    $URL = $URL.$response['location'].'/?';

    //if(strcasecmp($response['priceType'], "UAH") != 0){
    $URL = $URL.'currency='.$response['priceType'];
    //}

    // дописать макс этажность
    if(strcasecmp($response['floorCountMin'], "") != 0) {
        $URL = $URL.'&search%5Bfilter_float_total_floors%3Afrom%5D='.$response['floorCountMin'];
    }

    // дописать мин этажность
    if(strcasecmp($response['floorCountMax'], "") != 0) {
        $URL = $URL.'&search%5Bfilter_float_total_floors%3Ato%5D='.$response['floorCountMax'];
    }

    // дописать мин количество комнат
    if(strcasecmp($response['roomNumberMin'], "") != 0) {
        $URL = $URL.'&search%5Bfilter_float_number_of_rooms%3Afrom%5D='.$response['roomNumberMin'];
    }

    // дописать макс количество комнат
    if(strcasecmp($response['roomNumberMax'], "") != 0) {
        $URL = $URL.'&search%5Bfilter_float_number_of_rooms%3Ato%='.$response['roomNumberMax'];
    }

    // дописать мин общая площадь
    if(strcasecmp($response['areaMin'], "") != 0) {
        $URL = $URL.'&search%5Bfilter_float_total_area%3Afrom%5D='.$response['areaMin'];
    }

    // дописать маск общая площадь
    if(strcasecmp($response['areaMax'], "") != 0) {
        $URL = $URL.'&search%5Bfilter_float_total_area%3Ato%5D='.$response['areaMax'];
    }

    // собрать строку запроса
    //$URL = $URL.http_build_query($request);
    $URL_for_parsing = $URL;
}

function createURLFlat(){
    global $response, $URL_for_parsing;

    //$request = array();

    $URL = 'https://www.olx.ua/nedvizhimost/kvartiry-komnaty/';

    /*String location;               область/город +
    String typeBuild;                тип постройки +
    String buyRent;                  тип операции +
    String floorCountMin;            этажность макс +
    String floorCountMax;            этажность мин +
    String floorMin;                 этаж макс +
    String floorMax;                 этаж мин  +
    String roomNumberMin;            количество комнат мин +
    String roomNumberMax;            количество комнат макс +
    String areaMin;                  минимальная площадь +
    String areaMax;                  максимальная площадь +
    String priceType;                валюта !-
    String countRequest;             количесто вариантов !-
    */

    // дописать тип операции
    if(strcasecmp($response['buyRent'], 'buy') == 0){
        $URL = $URL.'prodazha-kvartir-komnat/';
    } else {
        $URL = $URL . 'arenda-kvartir-komnat/';
    }

    // дописать местоположение
    $URL = $URL.$response['location'].'/?';

    //if(strcasecmp($response['priceType'], "UAH") != 0){
    $URL = $URL.'currency='.$response['priceType'];
   // }

    // дописать мин этажность
    if(strcasecmp($response['floorCountMin'], "") != 0) {
        $URL = $URL.'&search%5Bfilter_float_total_floors%3Afrom%5D='.$response['floorCountMin'];
    }

    // дописать макс этажность
    if(strcasecmp($response['floorCountMax'], "") != 0) {
        $URL = $URL.'&search%5Bfilter_float_total_floors%3Ato%5D='.$response['floorCountMax'];
    }

    // дописать мин этаж
    if(strcasecmp($response['floorMin'], "") != 0) {
        $URL = $URL.'&search%5Bfilter_float_floor%3Afrom%5D='.$response['floorMin'];
    }

    // дописать макс этаж
    if(strcasecmp($response['floorMax'], "") != 0) {
        $URL = $URL.'&search%5Bfilter_float_floor%3Ato%5D='.$response['floorMax'];
    }


    // дописать мин количество комнат
    if(strcasecmp($response['roomNumberMin'], "") != 0) {
        $URL = $URL.'&search%5Bfilter_float_number_of_rooms%3Afrom%5D='.$response['roomNumberMin'];
    }

    // дописать макс количество комнат
    if(strcasecmp($response['roomNumberMax'], "") != 0) {
        $URL = $URL.'&search%5Bfilter_float_number_of_rooms%3Ato%5D='.$response['roomNumberMax'];
    }

    // дописать мин общая площадь
    if(strcasecmp($response['areaMin'], "") != 0) {
        $URL = $URL.'&search%5Bfilter_float_total_area%3Afrom%5D='.$response['areaMin'];
    }

    // дописать маск общая площадь
    if(strcasecmp($response['areaMax'], "") != 0) {
        $URL = $URL.'&search%5Bfilter_float_total_area%3Ato%5D='.$response['areaMax'];
    }

    // собрать строку запроса
    //$URL = $URL.http_build_query($request);
    $URL_for_parsing = $URL;
}

?>