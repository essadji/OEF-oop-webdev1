<?php
// SIG :: vergeet de DocBlocks niet | ze zouden eigenlijk samen met de code moeten groeien, niet later als versiering toegevoegd worden

/**
 * Class Sequencer
 *
 * @property array $_inputArray -> ...
 * ...
 */
class Sequencer
{
    private $_inputArray;
    private $_outputArray;

    /**
     * Sequencer constructor.
     * @param $inputArray
     */
    function __construct(array $inputArray){ // SIG :: probeer type-hinting te gebruiken waar mogelijk

        /*Defensief programmeren : programma gaat in error indien geen array meegegeven*/
        // SIG :: probeer met throws te werken als je de defensieve weg neemt (reden is de 'catchbaarheid' ervan die ik later - waarschijnlijk bij unit testing - ergens zal bespreken)
        if(!is_array($inputArray)){
            exit('Error : Dit is geen array. We stoppen ermay');
        }
        $this->_inputArray=$inputArray;
    }

    /**
     * @return mixed
     */
    function sorteerStandaard(){
        $sorteerArray = New StandaardMethode($this->_inputArray);
        $this->_outputArray=$sorteerArray->sorteerArray();
        return $this->_outputArray;
    }

    /**
     * @return mixed -> beschrijf ook wat het resultaat dient te zijn  // SIG :: mixed is iets te algemeen hier; deze klasse in de toekomst uitbreiden naar ander soort collectie lijkt mij bovendien niet erg waarschijnlijk
     */
    function sorteerIndex(){
        $sorteerArray = New IndexMethode($this->_inputArray);
        $this->_outputArray=$sorteerArray->sorteerArray();
        return $this->_outputArray;
    }
}
?>

<!--
 dit is op zich een geldige en goede aanzet maar ik zou het liever meer in de modulaire, erfbare richting zien
reden : op deze manier zal je voor elke extra methode een nieuwe functie moeten bijmaken in deze klasse en dat kan snel uit de hand lopen
je ziet trouwens ook nu al dat die functies grote gelijkenissen zullen vertonen
-->