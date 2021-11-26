<?php
function return_calls($str,$tab){
    static $nb = 0;
    $str($tab);
    return ++$nb;
}