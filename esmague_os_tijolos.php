<?php

/*
    Pergunta 4 -  Esmague os tijolos:
    Existem n tijolos dispostos em fila nas posições numeradas de 1 a n, inclusive. Existe um array, 
    newtons[n], que contém um inteiro indicando o número de newtons necessários para quebrar um tijolo.
    (Um newton é uma unidade de força).
    Há dois martelos, um grande e um pequeno. O grande martelo pode esmagar qualquer tijolo com um golpe. 
    O pequeno martelo reduz os newtons necessários em 1 para cada golpe em um tijolo. Por exemplo, um tijolo 
    requer 3 newtons de força. Serão necessários 1 golpe com martelo grande ou 3 golpes com o martelo pequeno
    para esmaga-lo. Há um limite de quantas vezes o martelo grande pode ser usado.

    Devolução: Retorne os valores como um array inteiro bidimensional. Se um martelo não for usado, sua matriz 
    de índice deve ser [-1].


*/
/*
    @Author:  ATTILA TABORY
    Utilizado class estaticas.
    class EsmagaTijolos : Responsabel por receber os dados do tijolo.
    Possui duas funções destroiTijoloSimples(), destroiTijoloForte()
    e devolve um array de quantas vezes foram utilizado o martelo simples e martelo forte.
*/
class EsmagaTijolos
{
    static $tijolosArray =[];
    static $atacadoPorSimples =0;
    static $atacadoPorForte =0;

    

    static function destroiTijoloSimples()
    {
       
        



        foreach(self::$tijolosArray as $indice => $valores)
        {
            if($indice == "Resistencia Tijolo" and self::$atacadoPorSimples != 3 and self::$atacadoPorForte != 1 )
            {
                

                self::$tijolosArray[$indice] -=1;
                self::$atacadoPorSimples +=1;
                

               
                
                
            }
            if($indice == "Resistencia Tijolo" and self::$atacadoPorSimples == 3 and self::$atacadoPorForte != 1 )
            {
                self::$tijolosArray[$indice] = "Destruido Pelo Martelo Simples";
               
                

            }

            if($indice == "Tijolo Status")
            {
                //self::$tijolosArray[$indice] = "Tijolo sendo atacado";
                
                if(self::$atacadoPorSimples > 0 and self::$atacadoPorSimples < 3 or self::$atacadoPorForte != 1)
                {
                    self::$tijolosArray[$indice] = "Tijolo sendo atacado";
                   
                }

               
               

            }
           
            if(self::$atacadoPorSimples == 3)
            {
                self::$tijolosArray["Tijolo Status"] = "Tijolo destruido";
                self::$tijolosArray["Quantidade"] = 0;
            }

         
            
            
        }
        print_r("<br>");
        //print_r(self::$atacadoPorSimples);


        print_r("<br>");
        print_r("<br>");
        print_r(self::$tijolosArray);
        print_r("<br>");
        print_r("<br>");
        return array(
            "Quantas vezes foi usado martelo simples: " => self::$atacadoPorSimples,
            "Quantas vezes foi usado martelo forte: " => self::$atacadoPorForte,

        );


      

    }
    static function destroiTijoloForte()
    {
        foreach(self::$tijolosArray as $indice => $valores)
        {
            
            if($indice == "Resistencia Tijolo" and self::$atacadoPorSimples == 0  and self::$atacadoPorForte == 0 )
            {
                if($valores == 3 )
                {
                   


                    self::$tijolosArray[$indice] -=3;
                    self::$atacadoPorForte +=1;
                    self::$tijolosArray[$indice] = "Destruido Pelo Martelo Forte";
                    print_r("<br>");
                    print("Destruido com sucesso pelo martelo forte!!!");

                }

                
                
            }
            if($indice == "Tijolo Status"  and   self::$atacadoPorSimples == 0 and self::$atacadoPorForte == 0)
            {
                self::$tijolosArray[$indice] = "Destruido Pelo Martelo Forte";
                


            } 
            

            if($indice == "Quantidade" and  self::$atacadoPorSimples == 0  and self::$atacadoPorForte == 0)
            {
                if($valores != 0)
                {
                    self::$tijolosArray[$indice] = 0;
                    
                

            }

        }
            
         
            
            
        }

        
        print_r("<br>");
        print_r(self::$tijolosArray);

        print_r("<br>");
        print_r("<br>");

        return array(
            "Quantas vezes foi usado martelo simples: " => self::$atacadoPorSimples,
            "Quantas vezes foi usado martelo forte: " => self::$atacadoPorForte,

        );


    }


}
print_r("<br>");
print_r("<br>");
EsmagaTijolos::$tijolosArray=   [
    "Tijolo Status" => "vivo",
    "Quantidade" => 1,
    "Resistencia Tijolo" => 3
];



print_r(EsmagaTijolos::destroiTijoloSimples());

print_r(EsmagaTijolos::destroiTijoloSimples());
print_r(EsmagaTijolos::destroiTijoloSimples());


print_r("<br>");
print_r("<br>");
