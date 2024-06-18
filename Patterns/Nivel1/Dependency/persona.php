<?php

require_once("Objetos/cartera.php");
require_once("Objetos/llavesCasa.php");
require_once("Objetos/llavesVehiculo.php");
require_once("Objetos/tarjetaTransporte.php");
require_once("Objetos/movil.php");


class Persona
{
    private Cartera $cartera;
    private LlaveCasa $llaveCasa;
    private ? LlaveVehiculo $llaveVehiculo;
    private ? TarjetaTransporte $tarjetaTransporte;
    private Movil $movil;
    
    public function __construct(Cartera $cartera, LlaveCasa $llaveCasa, ? LlaveVehiculo $llaveVehiculo = NULL, ? TarjetaTransporte $tarjetaTransporte = NULL, Movil $movil )
    {
        $this->cartera = $cartera;
        $this->llaveCasa = $llaveCasa;
        $this->llaveVehiculo = $llaveVehiculo;
        $this->tarjetaTransporte = $tarjetaTransporte;
        $this->movil = $movil;
    }

    public function getCartera() : Cartera
    {
        return $this->cartera;
    }

    public function getLlaveCasa() : LlaveCasa
    {
        return $this->llaveCasa;
    }

    public function getLlaveVehiculo() : LlaveVehiculo|NULL
    {
        return $this->llaveVehiculo;
    }

    public function getTarjetaTransporte() : TarjetaTransporte|NULL
    {
        return $this->tarjetaTransporte;
    }

    public function getMovil() : Movil
    {
        return $this->movil;
    }

    public function __toString() : string
    {
        $texto = "Llevo encima la " . $this->cartera . ", las " . $this->llaveCasa;
        if($this->llaveCasa != NULL)
        {
            $texto .= ", las " . $this->llaveVehiculo;
        }

        if($this->tarjetaTransporte != NULL)
        {
            $texto .= ", la " . $this->tarjetaTransporte;
        }

        $texto .= " y el " . $this->movil;
        
        return $texto;
    }
    
}

?>