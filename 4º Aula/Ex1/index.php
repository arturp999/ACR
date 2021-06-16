<html>
 <head>
  <title>PHP ex 1</title>
 </head>
 <body>

 <?php
    echo '<p>Hello World</p>'; 
 $variavel = "Era uma vez";
 $variavel1 = " um gajo que estava";
 $variavel2 = " a aprender PHP";

 $istoString = "Isto é uma string para testar";
    echo $variavel,$variavel1,$variavel2;
    echo '<p>O tamanho da string é de</p>'.strlen($istoString)."<br>"; // Imprimir a sua length

    echo strcmp("Hello Amigo","Hello Amigoaaa");
    echo "<br>";
    echo strrev("Wusuppp");

    //remove caracteres
    $str = "Posso por o Video!";
    echo"<br>";
    echo trim($str,"P!");
    echo"<br>";

    
//Criar e chamar uma função que:
///o Caso o dia atual for fim de semana imprime ”Boa!”
//o Caso contrário imprime “Nunca mais é fim de semana!”

 function fimSemana() {
    $dia = date("l"); // local scope
    if ($dia != "Saturday" || $dia != "Sunday") {
       echo "<p>Nunca mais é fim de semana!</p>";
    } else{
        echo "<p> Boa! </p>";
    }
   }
   fimSemana();

   //• Criar um array com 2 ou mais elementos, ordenar o array e imprimir os seus valores
   function arrayElementos(){
       $numeros = array(7,1, 5, 9,10, 21);
        sort($numeros);
        for ($i=0; $i < count($numeros) ; $i++) { 
            echo " " .  $numeros[$i];
        }
   }
   arrayElementos();
 ?> 

 <h1> Ficha 2</h1>

 <?php

?> 


 </body>
</html>