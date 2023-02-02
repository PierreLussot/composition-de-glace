<?php

function verificationTitre($titre)
{
    if (isset($titre)) {
        return  $titre;
    } else {
        return $titre = 'Pas de titre';
    }
}

function varDump($array)
{
    echo "<pre>";
    var_dump($array);
    echo "</pre>";
}

function checkbox(string $name, string $value, array $data): string
{
    $attribute = '';
    if (isset($data[$name]) && in_array($value, $data[$name])) {
        $attribute .= 'checked';
    }

    return " <input  class='form-check-input' type='checkbox' name='{$name}[]' value='$value' $attribute>";
}

function radio(string $name, string $value, array $data)
{
    $attribute = '';
    if (isset($data[$name]) && $value === $data[$name]) {
        $attribute .= 'checked';
    }
    return " <input  class='' type='radio' name='$name' value='$value'  $attribute >";
}

$parfums = [
    'Fraise' => 4,
    'Chocolat' => 5,
    'Vanille' => 3
];

$cornets = [
    'Pot' => 2,
    'Cornet' => 3,
];

$supplements = [
    'Pépite de chocolat' => 1,
    'Chantilly' => 0.5,
];

$ingredients = [];
$total = 0;
if (isset($_GET['parfum'])) {
    foreach ($_GET['parfum'] as $parfum) {
        $ingredients[] =  $parfum;
        $total += $parfums[$parfum];
    }
}

if (isset($_GET['cornet'])) {
    $cornet = $_GET['cornet'];
    $ingredients[] =  $cornet;
    $cornetPrice =  $cornets[$cornet];
    $total += $cornetPrice;
}


if (isset($_GET['supplement'])) {
    foreach ($_GET['supplement'] as $supplement) {
        $ingredients[] =  $supplement;
        $total += $supplements[$supplement];
    }
}



/* varDump($ingredients); */
