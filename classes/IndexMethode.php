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

    private $_sortArray;
    private $_index;

    /**
     * IndexMethode constructor.
     * @param $sortArray
     * @param $index
     */
    public function __construct($sortArray, $index)
    {

        $this->_sortArray = $sortArray;
        $this->_index = $index;

    }

    /**
     * @return bool
     */
    public function sortIndex() {

        return ksort($this->_sortArray, $this->_index);

    }

}