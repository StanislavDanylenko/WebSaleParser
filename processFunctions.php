<?php

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
            '$ob->toilet',
            '$ob->heating',
            '$ob->repair',
            '$ob->furniture',
            '$ob->devices',
            '$ob->multimedia',
            '$ob->comfort',
            '$ob->communication',
            '$ob->infrastructure',
            '$ob->landscape',
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
        }
    }
    // закрываем подключение
    mysqli_close($link);
}

?>