<?php 

$altura = 1.73;
$peso = 69;

$imc = $peso / ($altura**2);

if ($imc <= 18.4) {
    echo "Seu imc é $imc e tais magrin ein fi";
} else if ($imc  >= 18.5 && $imc <= 24.9) {
    echo "Seu imc é $imc ta de boa";
} else {
    echo "Seu imc é $imc tais gordao mane";
}