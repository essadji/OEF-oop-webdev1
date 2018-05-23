<?php


// displaying the balance which users inputs
for ($balnce = 0; $balnce < 4; $balnce++) {
    echo "<p><b>balance number $balance</p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
        echo "<li>" . $cars[$row][$col] . "</li>";
    }
    echo "</ul>";
}
?>


<form>
    <div>Enter your money</div>
    <input type="number" name="num1"/>
    <div>Withdrow Your Money:</div>
    <input type="number" name="num2"/>
    <div><br><input type="submit" value="current value"></div>
    <br>
</form>

<?php

// displaying the balance after withdrow
if (isset($_GET['num1']) && isset($_GET['num2'])) {

    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $sum = $num1 - $num2;
    echo $num1 . " - " . $num2 . " = " . $sum;
}
?>

<?php

/**Objecten van de klasse StandaardMethode implementeren EEN alfabetische methode om strings in een array te orderenen*/
class StandaardMethode
{
    public $arraytosort = array(5, 9, 3);

    function kleinerGroterGelijk($a, $b)
    {
        if ($a < $b) {
            echo "kleiner";
            return -1;
        } else if ($a > $b) {
            echo "groter";
            return 1;
        } else {
            echo "gelijk";
            return 0;
        }
    }

    function sort()
    {
        var_dump($this->arraytosort);
        usort($this->arraytosort, array($this, "kleinerGroterGelijk"));
        var_dump($this->arraytosort);
    }
}

?>






