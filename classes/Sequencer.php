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
    private $_sortMethod;
    private $_charIndex;

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
     * @param mixed $sortMethod
     */
    public function setSortMethod($sortMethod): void
    {
        $this->_sortMethod = $sortMethod;
    }

    /**
     * @param mixed $charIndex
     */
    public function setCharIndex($charIndex): void
    {
        $this->_charIndex = $charIndex;
    }



    function sorteer(){

        switch ($this->_sortMethod) {
            case 1:
                $sorteerArray = New StandaardMethode($this->_inputArray);
                break;
            case 2:
                $sorteerArray = New IndexMethode($this->_inputArray);
                $sorteerArray->setCharIndex($this->_charIndex);
                break;
        }

        $this->_outputArray=$sorteerArray->sorteer();
        return $this->_outputArray;

    }

}
?>

<!--
 dit is op zich een geldige en goede aanzet maar ik zou het liever meer in de modulaire, erfbare richting zien
reden : op deze manier zal je voor elke extra methode een nieuwe functie moeten bijmaken in deze klasse en dat kan snel uit de hand lopen
je ziet trouwens ook nu al dat die functies grote gelijkenissen zullen vertonen
-->