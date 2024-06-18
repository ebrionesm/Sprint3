<?php

require_once("persona.php");

$persona = new Persona(new Cartera(), new LlaveCasa(), new LlaveVehiculo(TipoLlavesVehiculo::MOTO), NULL, new Movil());

echo $persona;

?>