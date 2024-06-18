<?php

require_once("poultry.php");

class TurkeyAdapter extends Duck
{
    private Turkey $turkey;

    public function __construct(Turkey $turkey)
    {
        $this->turkey = $turkey;
    }

    public function quack()
    {
        $this->turkey->gobble();
    }

    public function fly()
    {
        for($i = 0; $i < 5; $i++)
        {
            $this->turkey->fly();
        }
    }
}

?>