<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.04 - Variáveis e tipos de dados");

/**
 * [tipos de dados] https://php.net/manual/pt_BR/language.types.php
 * [ variáveis ] https://php.net/manual/pt_BR/language.variables.php
 */
fullStackPHPClassSession("variáveis", __LINE__);

$userFirstName = "Felipe";
$userLastName = "Ferreira";
echo "<h3>{$userFirstName} {$userLastName}</h3>";
//OU (Use apenas um)
$user_first_name = $userFirstName;
$user_last_name = $userLastName;
echo "<h3>{$user_first_name} {$user_last_name}</h3>";

$userAge = "21";
echo "<p>{$userFirstName} {$userLastName} <span class='tag'>tem {$userAge}</span></p>";

$userEmail = "filipiferreirasilva789@gmail.com";
echo "<p>$userEmail</p>";

//variavel variavel
$company = "UpInside";
$$company = "Treinamento";
echo "<h3>{$company} {$UpInside}</h3>";

$calcA = 10;
$calcB = 20;
//$calcB = $calcA;
$calcB = &$calcA; //variavel referencia
$calcB = 50;

var_dump([
    "a" => $calcA,
    "b" => $calcB
]);

/**
 * [ tipo boleano ] true | false
 */
fullStackPHPClassSession("tipo boleano", __LINE__);

$true = true;
$false = false;
var_dump($true, $false);

$a = 0;
$b = 0.0;
$c = "";      //o PHP demonina valor nulo ou zerado é entrepetado como false
$d = [];
$e = null;

var_dump($a, $b, $c, $d, $e);
if ($a || $b || $c || $d || $e) {
    var_dump(true);
} else {
    var_dump(false);
}

/**
 * [ tipo callback ] call | closure
 */ // retorna uma rotina ou valor
fullStackPHPClassSession("tipo callback", __LINE__);

/**$code = "<article><h1>Um Call User Function!</h1></article>";
$codeClear = call_user_func( function "strip_tags", $code );
var_dump($code, $codeClear);

$codeMore = function ($code) {
    var_dump($code);
};
$codeMore( code: "#Boraprogramar!"); */

/**
 * [ outros tipos ] string | array | objeto | numérico | null
 */
fullStackPHPClassSession("outros tipos", __LINE__);

$string = "Olá mundo";
$array = [$string];
$object = new Stdclass();
$object->hello = $string;
$null = null;
$int = 1232;
$float = 1.23213;

var_dump([
    $string,
    $array,
    $object,
    $object,
    $null,
    $int,
    $float
]);

