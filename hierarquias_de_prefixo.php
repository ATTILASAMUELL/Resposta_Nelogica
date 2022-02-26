<?php

/*
    Pergunta 2 -  Hierarquia de Prefixo:
    
    Dada uma lista de nomes ( nomes=[‘jackson’, ‘jacques’,’jack’] ), determine o número de nomes nessa lista
    para os quais uma determinada string de consulta é um prefixo. O prefixo deve ter pelo menos 1 caractere 
    a menos que toda a string de nome.
*/
/*
    @Author:  ATTILA TABORY
    Função findCompletePrefixes() : Devoluções, Int[q]: cada valor[i] é a resposta da consulta.
    - No script abaixo, mostro dominio com REGEX, foreach.
*/

function findCompletePrefixes($consulta)
{
    $arrayPrefi = ["jackson","jacques","jack","jack"];
    $regex = "/$consulta+[a-z0-9.\-\_]/i";
    
    $matriz = [];
    foreach( $arrayPrefi as $valores)
    {
        if(preg_match($regex, $valores))
        {
            array_push($matriz, 1);
        }  
    }
    return print_r( $matriz);
}


findCompletePrefixes("jack");