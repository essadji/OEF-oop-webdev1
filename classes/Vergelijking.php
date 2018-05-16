<?php
// SIG :: vergeet de DocBlocks niet; liefst TIJDENS het codekloppen en niet als versiering achteraf...
//abstract
abstract class Vergelijking implements ISequenceMethode
{
    private $_a;

    public function __construct(array $denarray)
    {
        $this->_a = $denarray;
    }
    /**
    +     * @param  $a
    +     * @param  $b
    +     * @return bool|int
    +     */
    function kleiner($a, $b)
    {
        if ($a==$b) return 0;
        return ($a<$b)?-1:1;
    }

    function groter($a, $b)
    {
        if ($a==$b) return 0;
        return ($a>$b)?-1:1;
    }

    /*
    function gelijk($a, $b)
    {
        if ($a==$b) return 0;
        return ($a<$b)?-1:1;
    }
    */
    // SIG :: niet echt elegant die identieke functies (OK, toegegeven, de opdracht zelf is ook niet de meest elegante implementatie)

}