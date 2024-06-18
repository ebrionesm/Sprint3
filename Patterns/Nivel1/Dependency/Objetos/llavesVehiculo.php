<?php
require_once("llaves.php");

enum TipoLlavesVehiculo : string
{
    case COCHE = 'coche';
    case MOTO = 'moto';
}

class LlaveVehiculo extends Llave
{
    private TipoLlavesVehiculo $tipoLlaves;

    public function __construct(TipoLlavesVehiculo $tipoLlaves)
    {
        $this->tipoLlaves = $tipoLlaves;
    }

    public function getTipoLlaves() : TipoLlavesVehiculo
    {
        return $this->tipoLlaves;
    }

    public function __toString() : string
    {
        return "llaves de " . $this->getTipoLlaves()->value;
    }
}

?>