<?php
function createURL(){
    global $URL_for_parsing;
    $URL = 'https://www.olx.ua/nedvizhimost/';
    // тип строения
    if (/*проверить поле на сайте*/){
        $URL = $URL.'doma/';
    } else {
        $URL = $URL.'kvartiry-komnaty/';
    }

    // тип операции
    if (/*проверить поле на сайте*/) {
        $URL = $URL.'prodazha-domov/';
    } else if (/*проверить поле на сайте*/){
        $URL = $URL.'arenda-domov/';
    } else if (/*проверить поле на сайте*/){
        $URL = $URL.'prodazha-kvartir-komnat/';
    } else if (/*проверить поле на сайте*/){
        $URL = $URL.'arenda-kvartir-komnat/';
    }

    //если еще заданы какие-то поля
    if (){
        $URL = $URL.'?';
    }

    // !!!!!!! перед каждой следующей операцией нужно добавлять & !!!!!!!!
    //
    // ВНИМАНИЕ
    //
    // !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

    // этаж для квартиры
    if (/* проверить поле на сайте*/){
        $URL = $URL.'search%5Bfilter_float_floor%3Afrom%5D='.''; // дописать конкатанацию значения начального этажа
    } else if (/* проверить поле на сайте*/){
        $URL = $URL.'search%5Bfilter_float_floor%3Ato%5D='.''; // дописать конкатанацию значения последнего этажа
    }

    // этажность
    if (/* проверить поле на сайте*/){
        $URL = $URL.'search%5Bfilter_float_total_floors%3Afrom%5D='.''; // дописать
    } else if (/* проверить поле на сайте*/){
        $URL = $URL.'search%5Bfilter_float_total_floors%3Ato%5D='.''; // дописать
    }

    // количество комнат в квартире
    if (/* проверить поле на сайте*/){
        $URL = $URL.'search%5Bfilter_float_number_of_rooms%3Afrom%5D='.''; // дописать
    } else if (){
        $URL = $URL.'search%5Bfilter_float_number_of_rooms%3Ato%5D='.''; // дописать
    }

    // общая площадь
    if (/* проверить поле на сайте*/){
        $URL = $URL.'search%5Bfilter_float_total_area%3Afrom%5D='.''; // дописать
    } else if (){
        $URL = $URL.'search%5Bfilter_float_total_area%3Ato%5D=5'.''; // дописать
    }

    // площадь участка (для ДОМА)
    if (/* проверить поле на сайте*/){
        $URL = $URL.'search%5Bfilter_float_land_area%3Afrom%5D='.''; // дописать
    } else if (){
        $URL = $URL.'search%5Bfilter_float_land_area%3Ato%5D='.''; // дописать
    }

    $URL_for_parsing = $URL;
}
?>