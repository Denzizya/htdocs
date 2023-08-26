<?php

function wordUp($str)
{
    $encoding='UTF-8';
    $words = preg_split("/\s+/", $str);
    $str = "";
    foreach($words as $word)
    {
        $str .= mb_strtoupper(mb_substr($word, 0, 1, $encoding), $encoding) . mb_substr($word, 1, mb_strlen($word), $encoding) . " ";
    }

    return $str;
}

echo wordUp("help and їля іл, , ъеб. ёж!");