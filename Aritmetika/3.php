<?php

$mazakaisCipars = 1;
$lielakaisCipars = 100;

$cipari = range($mazakaisCipars, $lielakaisCipars);
$saskaititiCipari = array_sum($cipari);
$Videjais = $saskaititiCipari / count($cipari);

echo "Sum of $mazakaisCipars to $lielakaisCipars is $saskaititiCipari!" ."\n";
echo "The average is $Videjais!" ."\n";