<?php
echo "Bem vindo ao Screen Match!\n";

$nomeFilme = "Top Gun - Maverick";
$anoLancamento = 2022;
$notaFilme = (9 + 6 + 8 + 7.5 + 5) / 5;
$incluidoNoPlano = $planoPrime || $anoLancamento < 2020;
$planoPrime = true;

echo $nomeFilme;
 ?>