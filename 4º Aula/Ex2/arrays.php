<?php

// cria um array indexado e um array associativo
// • usa a função print_r para guardar numa variável o conteúdo
// de cada array
// • imprime o valor de cada array

//array indexado
$cores = array("Azul", "Amarelo", "Verde", "Branco");
print_r($cores);

//array associativo
echo "<br>","<br>";
$pontos = ["Zé"=>11, "José"=>4, "Zéca"=>22];
echo "Zé: " . $pontos["Zé"] . "\n";
echo "José: " . $pontos["José"] . "\n";
echo "Zéca: " . $pontos["Zéca"] . "\n";

?>