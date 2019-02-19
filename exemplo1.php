<?php
    include("cadeira.php");

    $c1 = new Cadeira("AZUL","5.3","ACO","10","120","0.4",true,"0.4","0.85");

/*
    $c1->cor = "AZUL";
    $c1->peso = "5.3";
    $c1->material = "ACO";
    $c1->durabilidade = "10";
    $c1->custo = "120";
    $c1->tamanho = "0.4";
    $c1->encosto = true; 
    $c1->regulagem_minima = "0.4";
    $c1->regulagem_maxima = "0.85";
*/
    echo "<br /><br />";
    print_r($c1);

    $c1->aumentar(0.5);

    echo "<br /><br />";
    print_r($c1);
    echo "<br /><br />";


    $c2 = new Cadeira("PRETO","0.9","PLASTICO","5","40","0.4",false,"0.4","0.4");

/*
    $c2->cor = "PRETO";
    $c2->peso = "0.9";
    $c2->material = "PLASTICO";
    $c2->durabilidade = "5";
    $c2->custo = "40";
    $c2->tamanho = "0.4";
    $c2->encosto = false; 
    $c2->regulagem_minima = "0.4";
    $c2->regulagem_maxima = "0.4";
*/
    print_r($c2);

    echo "<br /><br />";
    
    echo "
        <table border = \"1\">
            <tr>
                <td> Cor </td>
                <td> Peso </td>
                <td> Material </td>
                <td> Durabilidade </td>
                <td> Custo </td>
                <td> Tamanho </td>
                <td> Encosto </td>
                <td> Regulagem Mínima </td>
                <td> Regulagem Máxima </td>
            </tr>
            <tr>
                <td> $c1->cor </td>
                <td> $c1->peso </td>
                <td> $c1->material </td>
                <td> $c1->durabilidade </td>
                <td> $c1->custo </td>
                <td> $c1->tamanho </td>
                <td> $c1->encosto </td>
                <td> $c1->regulagem_minima </td>
                <td> $c1->regulagem_maxima </td>
            </tr>
            <tr>
                <td> $c2->cor </td>
                <td> $c2->peso </td>
                <td> $c2->material </td>
                <td> $c2->durabilidade </td>
                <td> $c2->custo </td>
                <td> $c2->tamanho </td>
                <td> $c2->encosto </td>
                <td> $c2->regulagem_minima </td>
                <td> $c2->regulagem_maxima </td>
            </tr>
        </table>";
?>