<?php

require_once("aclarador.php");
require_once("enjabonador.php");
require_once("secador.php");

class Facade
{
    private Aclarador $aclarador;
    private Enjabonador $enjabonador;
    private Secador $secador;

    public function __construct()
    {
        $this->aclarador = new Aclarador();
        $this->enjabonador = new Enjabonador();
        $this->secador = new Secador();
    }

    public function encender() : void
    {
        $this->iniciar();
        $this->llenarAgua();
        $this->enjabonador->enjabonar();
        $this->drenarAgua();
        $this->llenarAgua();
        $this->aclarador->aclarar();
        $this->drenarAgua();
        $this->secador->secar();
        $this->finalizarProceso();

    }

    public function iniciar() : void
    {
        echo "Encendiendo...<br>";
        echo "Bloqueando puerta...<br>";
    }

    public function llenarAgua() : void
    {
        echo "Llenando de agua...<br>";
    }

    public function drenarAgua() : void
    {
        echo "Vaciando agua...<br>";
    }

    public function finalizarProceso() : void
    {
        echo "Desbloqueando puerta...<br>";
        echo "Proceso finalizado.<br>";
    }

}

?>