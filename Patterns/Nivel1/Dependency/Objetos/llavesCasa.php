<?php

require_once("llaves.php");

class LlaveCasa extends Llave
{
    public function __toString() : string
    {
        return "llaves de casa";
    }
    
}

?>