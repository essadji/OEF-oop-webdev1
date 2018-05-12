<?php

/**
 * Objecten van deze Class implementeren EEN methode om een array met strings te ordenen op basis van een als argument meegegeven index.
 * De index bepaalt de hoeveelste letter van de te vergelijken strings gebruikt wordt als basis voor de vergelijking.
 *
 *
 * Class IndexMethode
 */
class IndexMethode
{

    public function __construct($myInput, $index)
    {
        return ksort($this->$myInput, $this->$index);
    }

}