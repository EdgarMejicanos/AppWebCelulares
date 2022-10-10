<?php

namespace App\Libraries;

class Calculos{
    public function calcular($resul,$formulario){
      
        foreach($formulario as $usuariol):
            
             $usuariol["usuario"];
             $usuariol["password"];
             if(($resul["usuario"]==$usuariol["usuario"])&&($resul["password"]==$usuariol["password"])){
                
                $valor=1;
                return $valor;
             }
             
        endforeach;
        $valor =0;
        return $valor;
    }
}