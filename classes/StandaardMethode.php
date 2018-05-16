<?php

class StandaardMethode extends Vergelijking
{
    private $_arrayToSort;
    private $_sortedArray;

    public function __construct($arrayToSort){
        $this->_arrayToSort=$arrayToSort;
    }


   /***************************************************************/
   /*V1 : VIA USORT - MET GEBRUIK VAN VERGELIJKINGSFUNCTIE sorteer*/
   /***************************************************************/

    // SIG :: waar/hoe gebruik je deze functie?
    private static function sorteerV1($a, $b)
    {

        /*Werkt wel via parent en self, maar niet zuiver : gewone functie op statische manier aangeroepen - alternatief ???*/
        if (parent::gelijk($a,$b)) {
            return 0;
        }
        return (parent::kleiner($a,$b)) ? -1 : 1;
    }

    function sorteerArrayV1(){
        usort($this->_arrayToSort,array('StandaardMethode','sorteerV1'));
// SIG :: knap gevonden, die array als tweede argument; slechts 1 tweedejaars heeft iets dergelijks gevonden/gebruikt vorig jaar
        return $this->_arrayToSort;
    }

    /*******************************/
    /*V2 : VIA EIGEN SORTEERMETHODE*/
    /*******************************/

    function sorteer(){

        $sortedArray=$this->_arrayToSort;

         for ($i = 0; $i < sizeof($sortedArray); $i++)
            {
                for ($j = $i + 1; $j < sizeof($sortedArray); $j++)
                {
                    if ($this->groter($sortedArray[$i],$sortedArray[$j]))
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