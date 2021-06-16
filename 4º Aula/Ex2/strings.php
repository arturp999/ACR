<!-- defina duas strings
• mostra o seu conteúdo (str / str2)
• mostra a length de cada string (10 / 12)
• compara as duas strings e dis se são iguais ou não -->

<?php
$str1 = "Era uma vez um camelo";
$str2 = "que era amigo do god Carlao";

echo "$str1 / $str2 ";

echo "<p> A primeira string têm : ".strlen($str1)." de caracteres</p>";

echo "<p> A segunda string têm : ".strlen($str2)." de caracteres</p>";


$str9 = "teste";
$str8 = "teste";
if (strcmp($str1, $str2) !== 0) {
    echo "$str1 <-- NÃO É IGUAL A --> $str2";
} else{
    echo "$str1 <-- É IGUAL A --> $str2";
}


?>