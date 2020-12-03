<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.03 - Funções para arrays");

/*
 * [ criação ] https://php.net/manual/pt_BR/ref.array.php
 */
fullStackPHPClassSession("manipulação", __LINE__);

$index = [
    "AC/DC",
    "Nirvana",
    "Alter Bridge"
];

$assoc = [
    "band_1" => "AC/DC",
    "band_2" => "Nirvana",
    "band_3" => "Alter Bridge"
];

array_unshift( &array:$index, var:"Teste");
$assoc = ["band_4" => "Pearl Jam", "band_5" => ""] + $assoc;

array_push( &array:$index, var: "");
$assoc = $assoc + ["band_6" => ""];

array_shift( array &$index );
array_shift( array &$assoc );

array_pop( array &$index );
array_pop( array &$assoc );

array_unshift( &array:$index, var:"");

$index = array_filter($index);
$assoc = array_filter($assoc);

var_dump(
    $index,
    $assoc
);

/*
 * [ ordenação ] reverse | asort | ksort | sort
 */


fullStackPHPClassSession("ordenação", __LINE__);
/*
$index = array_reverse($index)
$assoc = array_reverse($assoc);

asort( &array:$index);
asort( &array:$assoc);

ksort( &array:$index);
krsort( &array:$assoc);

sort( &array:$index)
rsort( &array:$index);
*/
var_dump(
    $index,
    $assoc
);

/*
 * [ verificação ]  keys | values | in | explode
 */
fullStackPHPClassSession("verificação", __LINE__);

var_dump(
    [
        array_keys($assoc),
        array_keys($assoc)
    ]
);
/*
if(in_array( needle:"AC/DC", $assoc)){
    echo "<p>cause I'm back</p>";
}*/

/*$arrToString = implode( glue: ",", $assoc);
echo "<p>Eu curto {$arrToString} e muitas outras!</p>";
echo "<p>{$arrToString}</p>";

var_dump(explode( delimiter:", ", $arrToString));
*/
/**
 * [ exemplo prático ] um template view | implode
 */
fullStackPHPClassSession("exemplo prático", __LINE__);

$profile = [
    "name" => "Felipe",
    "company" => "Upinside",
    "mail" => "Felipe@gmail.com"
];

$template = <<<TPL
    <article>
        <h1>{{name}}</h1>
        <p>{{company}}<br>
        <a href="mailto:{{mail}}" title="Enviar e-mail para {{name}}">Eviar E-mail</a></p>
    </article>
TPL;

echo $template;

echo str_repeat(
    array_keys($profile), array_values($profile), $template
);

$replaces = "{{" . impoort( glue:"}}&{{", array_keys($profile)) . "}}";

var_dump(explode("&", $replaces));
echo str_repeat(
    explode( delimiter: "&", $replaces),
    array_values($profile),
    $template
);
