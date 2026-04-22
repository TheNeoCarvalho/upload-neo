<?php

function TextoParaCaixaAlta($texto)
{
     echo strtoupper($texto);
}

function RetornaIniciais($nome_completo)
{
    $iniciais = explode(" ", $nome_completo);
    $primeiraInicial = substr($iniciais[0], -strlen($iniciais[0]), 1);
    $segundaInicial = substr($iniciais[1], -strlen($iniciais[1]), 1);
    echo TextoParaCaixaAlta($primeiraInicial . "" . $segundaInicial);
}