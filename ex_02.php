<?php

function min_len_array($tab){

    if(count($tab) == 0)
        return FALSE;
    
    $arr_len = [];
    $arr_val = [];
    $res = 0;

    foreach($tab as $key=> $value){
        $taille = strlen($value);
        $arr_len[] = $taille;
        $arr_val[] = $value;
    }
    foreach($arr_len as $key=> $val){
        $i = min($arr_len);
        $i = array_search($i,$arr_len);
        $res = $i;
    }

    foreach($arr_val as $key=> $val){
        if($key == $i){
            return $val;
        }
    }
}