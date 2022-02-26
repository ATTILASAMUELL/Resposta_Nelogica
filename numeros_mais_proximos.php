<?php


 
/*
    Pergunta 1-	Números mais Próximos:

    Dada uma matriz de inteiros distintos ( matriz = [6,2,4,10] ) , determine a diferença absoluta mínima entre
    quaisquer dois elementos com essa diferença em ordem crescente.

    Impressões:  Pares de elementos distintos que compartilham a diferença absoluta mínima, exibidos em ordem
    crescente com cada par separado por um espaço em uma única linha.


*/

/*


    @Author:  ATTILA TABORY
    Função closerNumbers() : Responsável por apresentar pares de elementos distintos que compartilham 
    a diferença absoluta mínima.


*/
function closerNumbers($array)
{
    // Verfica se existe um array de dados.
    if(count($array)> 0)
    {

        // insere o array de dados em uma variavel(valores)
        $valores = $array;
        // Com a função sort , ordena de forma crescente
        sort($valores, SORT_NATURAL);
        // array para guardar a diferença absoluta.
        $diferençaArray = [];
        

        // Faz  iteração na matriz 
        for($x=0, $y=1; $x<count($valores), $y<count($valores); $x++, $y++)
        {

            // Insere a diferença  absoluta no array $diferençaArray = [].
            array_push($diferençaArray, ($valores[$y] - $valores[$x] ));
            // variavel $DiferençaAbsMin para apresentar na tela.
            $DiferençaAbsMin = ($valores[$y] - $valores[$x] );
            print_r("<br>");
            print_r("{".$valores[$x]." ".$valores[$y]."}"."  Diferença: ".$DiferençaAbsMin);
            
            
        

        }

        
        print_r("<br>");

        // Apresenta a a diferença absoluta mínima entre quaisquer dois elementos.
        print_r("Diferença absoluta mínima:".min($diferençaArray ));
    

    }else{
        print_r("Nenhum dados informado!!!");
    }


    

  
 }

 //Matriz de inteiros distintos. 
 $array = [6,2,4,10 ];

 closerNumbers($array);