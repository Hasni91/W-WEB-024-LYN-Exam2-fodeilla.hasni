<?php
function resum_join_str($str1  = NULL, $str2 = NULL){
    
    
    if (!is_string($str1) || (!is_string($str2)))
        return false;

    $one = str_pad($str1,14,".");
    $two = str_pad($str2,3,".",STR_PAD_LEFT);
    
    $subA = substr($one, 0, 14);
    $subB = substr($two,-3);
    
    return $subA . $subB;
}