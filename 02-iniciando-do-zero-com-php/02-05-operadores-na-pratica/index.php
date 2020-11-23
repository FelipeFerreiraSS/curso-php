<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
echo fullStackPHPClassName("02.05 - Operadores na prática");

/**
 * [ operadores ] https://php.net/manual/pt_BR/language.operators.php
 * [ atribuição ] https://php.net/manual/pt_BR/language.operators.assignment.php
 */
fullStackPHPClassSession("atribuição", __LINE__);

$operatorA = 5;
$operator = [
    "a += 5" => ($operatorA += 5),    //operador a = 5
    "a -= 5" => ($operatorA -= 5),
    "a *= 5" => ($operatorA *= 5),
    "a %= 5" => ($operatorA %= 5),
];
var_dump($operator);

$incrementA = 5;
$incrementB = 5;
$increment = [
    "pos-encremento" => $incrementA++,
    "res-encremento" => $incrementA,
    "pre-encremento" => ++$incrementA,
    "pos-decremento" => $incrementB--,
    "res-decremento" => $incrementB,
    "pre-decremento" => --$incrementB,
];

var_dump($increment);

/**
 * [ comparação ] https://php.net/manual/pt_BR/language.operators.comparison.php
 */ //testar valores/ desenvolver rotinas, testar comportamento
fullStackPHPClassSession("comparação", __LINE__);

$relatedA = 5;
$relatedB = "5";
$relatedC = 10;
$related = [
    "a == b" => ($relatedA == $relatedB),  //== para testar valor
    "a === b" => ($relatedA === $relatedB),  // ===para testar valor e tipo de dados
    "a != b" => ($relatedA != $relatedB),  // != diferente
    "a !== b" => ($relatedA !== $relatedB),  // !== diferente de tipos de dados
    "a > c" => ($relatedA > $relatedC), 
    "a < c" => ($relatedA < $relatedC), 
    "a >= c" => ($relatedA >= $relatedC), 
    "a >= c" => ($relatedA >= $relatedB), 
    "a <= c" => ($relatedA <= $relatedB),  // menor ou iqual 
];
var_dump($related);


/**
 * [ lógicos ] https://php.net/manual/pt_BR/language.operators.logical.php
 */ //iqualdade diferença e negação entre as comdiçoes
fullStackPHPClassSession("lógicos", __LINE__);

$logicA = true; 
$logicB = false;
$logic = [
    "a && b" => ($logicA && $logicB),   // &&== existe logicA e logicB
    "a || b" => ($logicA || $logicB),   // ||== existe logicA ou logicB
    "a" => ($logicA),   //existe a logicA 
    "! a" => ($logicA),   //!== se não existir a logicA 
    "! b" => ($logicB),   //!== se não existir a logicB 
];
var_dump($logic);

/**
 * [ aritiméticos ] https://php.net/manual/pt_BR/language.operators.arithmetic.php
 */ //fazer calculos no PHP
fullStackPHPClassSession("aritiméticos", __LINE__);

$calcA = 5;
$calcB = 10;
$logic = [
    "a + b" => ($calcA + $calcB),
    "a - b" => ($calcA - $calcB),
    "a * b" => ($calcA * $calcB),
    "a / b" => ($calcA / $calcB), //dividido
    "a % b" => ($calcA % $calcB), //resto da divisão
];
var_dump($logic);