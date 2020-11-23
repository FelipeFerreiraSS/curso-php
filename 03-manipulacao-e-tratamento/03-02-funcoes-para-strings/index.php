<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.02 - Funções para strings");

/*
 * [ strings e multibyte ] https://php.net/manual/en/ref.mbstring.php
 */
fullStackPHPClassSession("strings e multibyte", __LINE__);

$string = "O último show foi incrível!";

var_dump([
    "string" => $string,
    "strlen" => strlen($string), //numero de caracteres acento é contado
    "mb_strlen" => mb_strlen($string), // numero de caracteres sem contar acento(mais recomendado)
    //"substr" => substr($string, start: "9"), 
    //"mb_substr" => mb_substr($string, start: "9"), 
    "strtoupper" => strtoupper($string),  
    "mb_strtoupper" => mb_strtoupper($string),  //toda a frase em caixa alta(converção correta)
]);

/**
 * [ conversão de caixa ] https://php.net/manual/en/function.mb-convert-case.php
 */  //
fullStackPHPClassSession("conversão de caixa", __LINE__);

$mbString = $string;

var_dump([
    "mb_strtoupper" => mb_strtoupper($mbString), // caixa alta
    "mb_strtolower" => mb_strtolower($mbString), // caixa baixa
    //"mb_convert_case UPPER" => mb_convert_case($mbString, mode: MB_CASE_UPPER),
    //"mb_convert_case LOWER" => mb_convert_case($mbString, mode: MB_CASE_LOWER),
    //"mb_convert_case TITTLE" => mb_convert_case($mbString, mode: MB_CASE_TITTLE),
]);

/**
 * [ substituição ] multibyte and replace
 */
fullStackPHPClassSession("substituição", __LINE__);

$mbReplace = $mbString;
var_dump([
    "mb_strlen" => mb_strlen($mbReplace),
    //"mb_strpos" => mb_strpos($mbReplace, needle: ", "),
    //"mb_strrpos" => mb_strrpos($mbReplace, needle: ", "),
    //"mb_substr" => mb_substr($mbReplace, start: 40 + 2, length: 14),
    //"mb_substr" => mb_strstr($mbReplace, needle: ", ", part: true),
    //"mb_strrchr" => mb_strrchr($mbReplace, needle: ", ", part: true),
]);

$mbReplace = $string;

//echo "<p>", $mbStrReplace, "</p>";

$articleData = [
    "event" => "Rock in Rio",
    "desc" => $mbReplace
];

echo str_replace(array_keys($articleData), array_values($articleData), $artcle);

/**
 * [ parse string ] parse_str | mb_parse_str
 */  //recsição HTTP, API ...
fullStackPHPClassSession("parse string", __LINE__);

$endPoint = "name=Felipe&email=curso@php.com.br";
mb_parse_str($endPoint, &result: $parseEndPoint);

var_dump([
    $endPoint,
    $parceEndPoint,
]);