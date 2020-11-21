<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.03 - Comandos de saída");

/**
 * [ echo ] https://php.net/manual/pt_BR/function.echo.php
 */
fullStackPHPClassSession("echo", __LINE__);
echo "<p>Olá mundo", " ", "<span class='tag'>#Bora programar!</span>", "</p>";

$hello = "Olá mundo!";
$code = "<span class='tag'>#BoraProgramar!</span>";

echo "<p>$hello</p>";
echo '<p>$hello</p>'; /**Com aspas simples o PHP não le o que esta dentro da variavel */

$day = "dia";
echo "<p>Falta 1 $day para o evento</p>";
echo "<p>Faltam 2 {$day}s para o evento</p>"; /**Use {} para proteger a variavel e poder adicionar letras ou numeros procimas a ela */

echo "<h3>$hello</3>";
echo "<h4>{$hello} {$code}</4>"; /**Voce pode proteger as variaveis para concatenar  */

echo '<h3>' . $hello. " " . $code. "</h3>"; /**Nesma coisa do de sima */

/**Comando de saida fora do escopo de PHP para entrar com HTML puro↓↓↓↓↓ */
?> 
    <h4><?= $hello; ?> <?= $code; ?></h4>  <!--use para criar um atalho para o PHP/ mesma coisa que um echo-->
    HTML
<?php

/**
 * [ print ] https://php.net/manual/pt_BR/function.print.php
 *//**Iqual o echo, So pode usar um por linha */
fullStackPHPClassSession("print", __LINE__);
print $hello;
print $code;

print "<h3>{$hello} {$code}</h3>";

/**
 * [ print_r ] https://php.net/manual/pt_BR/function.print-r.php
 */ // Para esibir um veor(Uma lista de dados)
fullStackPHPClassSession("print_r", __LINE__);

$array = [
    "company" => "UpInside",
    "course" => "FSPHP",
    "class" => "comando de saída"
];

print_r($array);
echo "<pre>", print_r($array), "</pre>"; //Para organizar o array

/**
 * [ printf ] https://php.net/manual/pt_BR/function.printf.php
 */ //dar saida em uma variavel formatada
fullStackPHPClassSession("printf", __LINE__);

$article = "<article><h1>%s</h1><p>%s</p></article>";
$title = "{$hello} {$code}";
$subtitle = "TSETE DE TEXTO  kjaaaaaaaaaaaaaaaaaaaaddddddddd
dddddddddddddddjjjjjjjjjjjjjjjj";

printf($article, $title, $subtitle);
//Voce pode declarar um=== sprintf para armazenar a informação em uma variavel

/**
 * [ vprintf ] https://php.net/manual/pt_BR/function.vprintf.php
 */ // mesma coisa q o printf mais que utiliza um array
fullStackPHPClassSession("vprintf", __LINE__);

$company = "<article><h1>Escola %s</h1><p>Curso <b>%s</b>, aula <b>$s</b></p></article>";
vprintf($company, $array); 
// use o === vsprintf para armazenar em uma variavel 

/**
 * [ var_dump ] https://php.net/manual/pt_BR/function.var-dump.php
 */ //debugar o codigo
fullStackPHPClassSession("var_dump", __LINE__);

var_dump($array);
