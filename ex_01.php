<?php

function rev_epur_str($str = NULL){
    
    if(isset($str) == false)
        return false;

    $res = trim(preg_replace('/\s+/'," ",$str));
    $res = preg_split('/\s+/',$res);
    $st = array_reverse($res);
    $first = implode(" ",$st);
    echo $first;
}