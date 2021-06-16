<html>

<head>
    <title>PHP ex 1 e 2</title>
</head>

<body>

    <?php
    echo '<p>Hello World</p>';
    $variavel = "Era uma vez";
    $variavel1 = " um gajo que estava";
    $variavel2 = " a aprender PHP";

    $istoString = "Isto é uma string para testar";
    echo $variavel, $variavel1, $variavel2;
    echo '<p>O tamanho da string é de</p>' . strlen($istoString) . "<br>"; // Imprimir a sua length

    echo strcmp("Hello Amigo", "Hello Amigoaaa");
    echo "<br>";
    echo strrev("Wusuppp");

    //remove caracteres
    $str = "Posso por o Video!";
    echo "<br>";
    echo trim($str, "P!");
    echo "<br>";


    //Criar e chamar uma função que:
    ///o Caso o dia atual for fim de semana imprime ”Boa!”
    //o Caso contrário imprime “Nunca mais é fim de semana!”

    function fimSemana()
    {
        $dia = date("l"); // local scope
        if ($dia != "Saturday" || $dia != "Sunday") {
            echo "<p>Nunca mais é fim de semana!</p>";
        } else {
            echo "<p> Boa! </p>";
        }
    }
    fimSemana();

    //• Criar um array com 2 ou mais elementos, ordenar o array e imprimir os seus valores
    function arrayElementos()
    {
        $numeros = array(7, 1, 5, 9, 10, 21);
        sort($numeros);
        for ($i = 0; $i < count($numeros); $i++) {
            echo " " .  $numeros[$i];
        }
    }
    arrayElementos();
    ?>

    <h1> Ficha 2</h1>

    <?php
    function menuPaginas()
    {
        // Cria uma função que gera o HTML para criar um menu com base no array.
        // O html gerado deve incluir uma UL com uma LI para cada Item e dentro
        // de cada LI uma A com o href=”./?p=x” onde x deve ser o valor do index
        // do array correspondente (ex: o html gerado para a página home deve ser
        // (<li><a href=”./?p=0”>home</a></li>
        $paginasDisponiveis = array("Index.php", "Vars.php", "Strings.php", "Arrays.php", "About.php");
        echo "<ul>Menu ";
        for ($i = 0; $i < count($paginasDisponiveis); $i++) {
            $teste00 = trim($paginasDisponiveis[$i], ".php");
            echo "<li><a href=$paginasDisponiveis[$i]>$teste00</a></li>";
        }
        echo "</ul>";
    }
    menuPaginas();
    $pageName = $_SERVER['SCRIPT_NAME'];
    echo $pageName;
    echo "<br>";
    echo "<br>";
    echo "<br>";
    ?>


    <form action="index.php" method="get">
        Variavel: <input type="text" name="variavel"><br>
        <input type="submit">
    </form>
    <?php

    //     Cria uma variável $pageName que guarda o nome da página atual (vai ao
    // array buscar o nome da página com o index guardado na variável $page

    function getP()
    {
        $paginasDisponiveis = array("Index.php", "Vars.php", "Strings.php", "Arrays.php", "About.php");
        if (isset($_GET['variavel'])) {
            $page = $_GET['variavel'];
            echo " Foi guardado var p " . $page . "<br>";

            for ($i = 0; $i < count($paginasDisponiveis); $i++) {
                $teste00 = trim($paginasDisponiveis[$page], ".php");
                echo "<li>$teste00</li>";
                break;
            }

        } else {
            $page = 0;
            echo "Nao foi guardada qualquer var: " . $page;
        }
    }
    getP();

    ?><br>




</body>

</html>