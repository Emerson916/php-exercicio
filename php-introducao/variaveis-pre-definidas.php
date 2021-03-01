<?php

    /* As variaveis pré definidas, sempre são iniciadas com um $ (cifrão)

    */

    /* A variavel GET, recebe as variaveis de parametros*/
    //$_GET


    // var_dump, exibe informações sobre a variável, como: tipo, valor e etc..
   // var_dump($_GET);

   // echo($_GET["nome"] . $_GET["idade"]);

    //$_GET e $_POST é um array que recebe os paremetros passado por requisição

    $nome = $_GET["Nome"];

    $idade = $_GET["Idade"];

    $anoNascimento = 2021 - $idade;

    echo "<h1>Olá, $nome, você nasceu em, $anoNascimento</h1>";

    //$fezAniversario = $_GET["fezAniversario"];

    //isset() retorna true se a variavel foi declarada se o valor é diferente de nulo

    // !isset() se torna um falso por causa do !
    if(!isset($_GET["Aniversario"])){
        $anoNascimento = $anoNascimento - 1;
    }

?>