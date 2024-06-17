<?php

class Tigger {
    private static $instance;
    private static int $roarCounter = 0;

    protected function __construct() {
        echo "Building character..." . PHP_EOL;
        //self::$roarCounter = 0;
    }

    public static function roar() : void
    {
        echo "Grrr!" . PHP_EOL;
        self::$roarCounter++;
    }

    protected function __clone() {}

    public static function getCounter() : int
    {
        return self::$roarCounter;
    }

    public static function getInstance() : Tigger
    {
        //$tiggerInstance = new self;
        if(self::$instance === NULL)
        {
            self::$instance = new self;
        }

        return self::$instance;
    }

}

?>