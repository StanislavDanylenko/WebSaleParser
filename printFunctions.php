<?php

function printArray($arr){
    echo 'Перебрано результатов '.count($arr).'<br>';
    foreach($arr as $key => $value) {
        echo "$key   =   $value <br />";
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
        echo '<td>'.$ob->toilet.'</td>';
        echo '<td>'.$ob->heating.'</td>';
        echo '<td>'.$ob->repair.'</td>';
        echo '<td>'.$ob->furniture.'</td>';
        echo '<td>'.$ob->devices.'</td>';
        echo '<td>'.$ob->multimedia.'</td>';
        echo '<td>'.$ob->comfort.'</td>';
        echo '<td>'.$ob->communication.'</td>';
        echo '<td>'.$ob->infrastructure.'</td>';
        echo '<td>'.$ob->landscape.'</td>';
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
?>