<?php
function getStr($string, $start, $end, $position){
    $str = explode($start, $string);
    $str2 = explode($end, $str[$position]);
    return $str2[0];
}