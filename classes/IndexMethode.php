<?php

class IndexMethode extends Vergelijking
{
    private $_arrayToSort;
    private $_sortedArray;
    private $_charIndex;

    public function __construct($arrayToSort){
        $this->_arrayToSort=$arrayToSort;
    }

    /**
     * @param mixed $charIndex
     */
    public function setCharIndex($charIndex): void
    {
        $this->_charIndex = $charIndex;
    }


    function sorteer(){

        $sortedArray=$this->_arrayToSort;

        for ($i = 0; $i < sizeof($sortedArray); $i++)
        {
            for ($j = $i + 1; $j < sizeof($sortedArray); $j++)
            {
                $a=substr($sortedArray[$i],$this->_charIndex);
                $b=substr($sortedArray[$j],$this->_charIndex);
                if ($this->groter($a,$b))
                {
                    $temp =  $sortedArray[$i];
                    $sortedArray[$i] = $sortedArray[$j];
                    $sortedArray[$j] = $temp;
                }
            }
        }
        $this->_sortedArray=$sortedArray;
        return $this->_sortedArray;
    }

}

?>