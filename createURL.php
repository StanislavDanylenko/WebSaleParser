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
?>