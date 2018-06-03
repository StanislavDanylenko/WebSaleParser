<?php

function parseFirstPage($url, $tag, $tagForCountPage, $page = 1){
    global $maxPage, $currentPage, $countParsedURL, $arrayOfPageURLS, $numURLS;

    $fullURL = $url.'%27&page='.$page;
    $data = str_get_html(CURLrequest($fullURL));
    $res = 0;

    if ($data->innertext!=''){

        $tagNothingFound = 'h1[class=c41 lheight24]';
        if (count($data->find($tagNothingFound))){
            foreach($data->find($tagNothingFound) as $el){
                $temp = $el;
                if (strcasecmp($temp, '') != 0){
                    return;
                }
            }
        }

        $tagSomeFound = 'div[class=dontHasPromoted section clr rel] h2';
        if (count($data->find($tagSomeFound))){
            foreach($data->find($tagSomeFound) as $el){
                $temp = preg_replace("/[^0-9]/", '', $el->plaintext);
                if ($temp < $numURLS){
                    $numURLS = $temp;
                }
            }
        }
        
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
                $res = preg_replace('/^\s+/m', "", $res);
                $res = preg_replace('/\s+$/m', "", $res);
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
                $res = preg_replace("/[тел\. ]?380.+?-.+?-.+?[\.\,]?/um","",$res);

                $description = $res;
                $description = preg_replace("/[\t\r\n]+/",' ', $description);
                $description = preg_replace('/\s{2,}/',' ',$description);
                $description = str_replace('&amp;', '&', $description);
                $description = str_replace('&nbsp;', ' ', $description);
                $description = preg_replace('/^\s+/m', "", $description);
                $description = preg_replace('/\s+$/m', "", $description);
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
                        $ob->typeSell = preg_replace('/\s+$/m', "", $text);
                        break;
                    case 'без комиссии':
                        $ob->lessPrice = preg_replace('/\s+$/m', "", $text);
                        break;
                    case 'тип объекта':
                        $ob->buildingType = preg_replace('/\s+$/m', "", $text);
                        break;
                    case 'тип дома':
                        $ob->houseType = preg_replace('/\s+$/m', "", $text);
                        break;
                    case 'этажность':
                        $ob->floorCount = preg_replace("/[^0-9]/", '', $text);
                        break;
                    case 'этаж':
                        $ob->floorNumber = preg_replace("/[^0-9]/", '', $text);
                        break;
                    case 'общая площадь':
                        $ob->commonSquare = preg_replace("/[^0-9\.]/", '', $text);
                        break;
                    case 'площадь кухни':
                        $ob->kitchenSquare = preg_replace("/[^0-9\.]/", '', $text);
                        break;
                    case 'тип стен':
                        $ob->wallType = preg_replace('/\s+$/m', "", $text);
                        break;
                    case 'внешнее утепленее стен':
                        $ob->outHeatingWall = preg_replace('/\s+$/m', "", $text);
                        break;
                    case 'количество комнат':
                        $ob->roomCount = preg_replace("/[^0-9]/", '', $text);
                        break;
                    case 'планировка':
                        $ob->layout = preg_replace('/\s+$/m', "", $text);
                        break;
                    case 'санузел':
                        $ob->toilet = preg_replace('/\s+$/m', "", $text);
                        break;
                    case 'отопление':
                        $ob->heating = preg_replace('/\s+$/m', "", $text);
                        break;
                    case 'ремонт':
                        $ob->repair = preg_replace('/\s+$/m', "", $text);
                        break;
                    case 'меблирование':
                        $ob->furniture = preg_replace('/\s+$/m', "", $text);
                        break;
                    case 'бытовая техника':
                        $ob->devices = preg_replace('/\s+$/m', "", $text);
                        break;
                    case 'комфорт':
                        $ob->comfort = preg_replace('/\s+$/m', "", $text);
                        break;
                    case 'коммуникации':
                        $ob->communication = preg_replace('/\s+$/m', "", $text);
                        break;
                    case 'инфраструктура (до 500 метров)':
                        $ob->infrastructure = preg_replace('/\s+$/m', "", $text);
                        break;
                    case 'ландшафт (до 1 км.)':
                        $ob->landscape = preg_replace('/\s+$/m', "", $text);
                        break;
                    case 'описание':
                        $ob->notation = preg_replace('/\s+$/m', "", $text);
                        break;
                    case 'расстояние до ближайшего города':
                        $ob->lengthsToCity = preg_replace('/\s+$/m', "", $text);
                        break;
                    case 'площадь участка':
                        $ob->landSquare = preg_replace("/[^0-9\.]/", '', $text);
                        break;
                    case 'кадастровый номер':
                        $ob->cadastralNumber = preg_replace('/\s+$/m', "", $text);
                        break;
                    case 'тип кровли':
                        $ob->roofType = preg_replace('/\s+$/m', "", $text);
                        break;
                    case 'год постройки\сдачи':
                        $ob->builtYear = preg_replace('/\s+$/m', "", $text);
                        break;
                    case 'мультимедиа':
                        $ob->multimedia = preg_replace('/\s+$/m', "", $text);
                        break;

                    default:
                        # code...do nothing
                        break;
                }
            }
        }
    }

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
?>