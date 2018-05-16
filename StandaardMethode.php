<?php
/**Objecten van de klasse StandaardMethode implementeren EEN alfabetische methode om strings in een array te orderenen*/

class StandaardMethode


{
public $arraytosort = array(5,9,3);

    function kleinerGroterGelijk ($a, $b)
    {
        if ($a < $b) {
            echo "kleiner";
            return -1;
        }else if ($a > $b){
            echo "groter";
            return 1;
        }else{
            echo "gelijk";
            return 0;
        }
    }

    function sort() {
        var_dump($this->arraytosort);
        usort($this->arraytosort, array ($this,"kleinerGroterGelijk"));
        var_dump($this->arraytosort);
    }
}

#is de function kleinerGroterGelijk correct? OK
#waarom moet de array in een function staan? nee, global
#functie sort is toch niet aangeroepen?
#moet function "kleinergrotergelijk niet aangeroepen worden als volgt: kleinerGroterGelijk();
#$a is een array, wat is $b? wat wordt er met elkaar vergeleken?
#is het de bedoeling dat function KleinerGroterGelijk in de file "Vergelijking.php" komt te staan? Usort in "StandaardMethode?
