<?php

/*
    Pergunta 3 –  Número binário em uma lista vinculada
    Um número binário é representado como uma série de 0’s e 1’s. Neste desafio, a série terá a forma de 
    uma lista encadeada. Cada instancia de nó, um LinkedListNode, tem um valor, data e um ponteiro para o 
    próximo nó, next. Dada uma referência ao cabeçalho de uma lista simples, converta o número binário 
    representado em um numero decimal.

    Devoluções: 
    Int: uma representação (inteiro longo)[10] do número binário.



*/
/*
    @Author:  ATTILA TABORY
    Função getNumber() : Devolução de um inteiro, converte binario em inteiro
*/

function getNumber($binarioArray)
{   
    if(count($binarioArray) > 0)
    {
        print_r("<br>");
        foreach($binarioArray as $valor)
        {
            $convert = bindec($valor);
            print_r("Número Inteiro é: ".$convert);

        }


    } else
    {
        print_r("Nenhum dados passado como parametro");
    }
    
    
    
}

$binaryArray =['010011'];
getNumber($binaryArray);
