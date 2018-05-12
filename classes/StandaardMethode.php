<?php

/**
 * Objecten van deze Class implementeren EEN alfabetische methode om strings in een array te ordenen.
 * Class StandaardMethode
 */
class StandaardMethode
{
    public function __construct($myInput)
    {
        return sort($this->$myInput);
    }


}