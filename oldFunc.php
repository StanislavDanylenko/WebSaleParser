<?php

function printArrayOld($arr){
    echo 'Перебрано результатов '.count($arr).'<br>';
    foreach($arr as $page){
        echo $page.'</br>';
    }
}

function parseFirstPageOld($url, $tag, $tagForCountPage, $page = 1){
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
            foreach($data->find($tag) as $a){
                if ($countParsedURL < $numURLS){
                    $temp = $a->href;
                    if (!in_array($temp, $arrayOfPageURLS)){
                        array_push($arrayOfPageURLS,$temp);
                        $countParsedURL++;
                    }
                }
                else {
                    break;
                }
            }
            $currentPage = $page + 1;
            if ($countParsedURL < $numURLS && $currentPage < $maxPage){
                parseNextPageOld($url, $tag, $currentPage);
            }
        }
    }
}

function parseNextPageOld($url, $tag, $page){
    global $maxPage, $currentPage, $countParsedURL, $arrayOfPageURLS, $numURLS;

    $fullURL = $url.'%27&page='.$page;
    $data = str_get_html(CURLrequest($fullURL));

    if($data->innertext!='' and count($data->find($tag))){
        foreach($data->find($tag) as $a){
            if ($countParsedURL < $numURLS){
                $temp = $a->href;
                if (!in_array($temp, $arrayOfPageURLS)){
                    array_push($arrayOfPageURLS,$temp);
                    $countParsedURL++;
                }
            }
            else {
                break;
            }
        }
        $currentPage = $currentPage + 1;
        if ($countParsedURL < $numURLS && $currentPage < $maxPage){
            parseNextPageOld($url, $tag, $currentPage);
        }
    }
}

?>