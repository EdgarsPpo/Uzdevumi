<?php

$mazakaisCipars = 1;
$lielakaisCipars = 10;

$cipari = range($mazakaisCipars, $lielakaisCipars);
$Sareizinats = array_product($cipari);

echo "Sareizinat skaitlus no $mazakaisCipars lidz $lielakaisCipars ir $Sareizinats!" ."\n";