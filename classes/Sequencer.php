<?php
/**
 * @property $_InArray -> array die binnen komt
 * @property $_OutArray -> output van de sorteer functie
 */

class Sequencer
{

    private $_InArray;
    private $_OutArray;

    /**
     * Sequencer constructor.
     * // SIG :: WARNING: op dit moment ben je een constructor aan het gebruiken in een klasse die niet geïnstantieerd wordt.
     * Dat kan maar dan moet je daar een goede reden/gebruik bij hebben
     * @param array $array -> de te sorteren...
    */
    public function __construct(array $array)
    {
        $this->_InArray = $array;
    }


    /**
     * @return mixed
     */
    function sorteerStandaard(){
        $sorteerArray = New StandaardMethode($this->_InArray);
        $this->_OutArray = $sorteerArray->sorteerArray();
        return $this->_OutArray;
    }
    /*
    function sorteerIndex(){
        $sorteerArray = New IndexMethode($this->_InArray);
        $this->_outputArray=$sorteerArray->sorteerArray();
        return $this->_outputArray;
    }
    */
}