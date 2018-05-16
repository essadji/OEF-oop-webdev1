<?php

/**
 * Objecten van deze Class implementeren EEN alfabetische methode om strings in een array te ordenen.
 * Class StandaardMethode
 */
class StandaardMethode
{


    private $_sortArray;

    /**
     * StandaardMethode constructor.
     * @param $sortArray
     */
    public function __construct($sortArray)
    {

        $this->_sortArray = $sortArray;

    }

    /**
     * @return bool
     */
    public function sorteerStandaard() {

        return sort($this->_sortArray);

    }


}