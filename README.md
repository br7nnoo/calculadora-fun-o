<?php


function calculadora($valor1, $valor2, $operação){
    
       if($operação == "soma"){
                $resultado = $valor1 + $valor2;
                return $resultado;
       }else if($operação == "subtração"){
                $resultado = $valor1 - $valor2;
                return $resultado;
       }else if($operação == "multiplicação"){
                $resultado = $valor1 * $valor2;
                return $resultado;
       }else if($operação == "divisão"){
                  if($valor2 == 0){
                      return "ERRO";
                    }
                $resultado = $valor1 / $valor2;
                return $resultado;
        }
        return 0;
       }
                
                

    


echo calculadora(33, 12, "multiplicação"). "\n";
echo calculadora(6, 5, "subtração"). "\n";
echo calculadora(30, 4, "soma"). "\n";
echo calculadora(25, 0, "divisão"). "\n";
echo calculadora(16, 3, "ddf"). "\n";


?>
