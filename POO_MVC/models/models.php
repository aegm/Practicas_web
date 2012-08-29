<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ModeloUno
 *
 * @author gonzalezan
 */
class ModeloUno {
    //put your code here
    var $propiedad = 25;
    
    function a($paremetro)
    {
        $this->propiedad = $paremetro;
    }
    
    
}

class ModeloDos{
    var $propiedad_1 = 25;
    var $propiedad_2 = 40;
    
    function b($param1, $param2)
    {
        $this->propiedad_1 = $param1;
        $this->propiedad_2 = $param2;
    }
}

?>
