<?php
    $nome = "Vitor Hugo";
    $idade = 19;
    $peso = 75.0;
    $ativo = true;

    echo "Nome: $nome <br>";
    echo "Idade: $idade <br>";
    echo "Peso: $peso <br>";
    echo "Ativo: $ativo <br>";

    if($idade >= 18) {
        echo "Maior de idade";
    } else {
        echo "Menor de idade";
    }
?>