<?php
$pirmais = readline("Ievadi savu numuru: ");
$otrais = readline("Ievadi nakamo numuru: ");


if ($pirmais== 15 || $otrais== 15) {
    echo "Viens no cipariem ir 15" ."\n";
} else if ($pirmais + $otrais == 15) {
    echo "Kopa sanak 15" ."\n";
} else if ($pirmais - $otrais == 15) {
    echo "Starpiba ir 15" ."\n";
} else {
    echo "Kautkas nav pareizi" ."\n";
}