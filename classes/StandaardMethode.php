<?php
/**
 * Created by PhpStorm.
 * User: abel
 * Date: 9/05/18
 * Time: 19:36
 */

include "interfaces/sequenceMethode.php";

abstract class StandaardMethode implements sequenceMethode
{
    function compare($a, $b)
    {
        if ($a==$b) return 0;
        return ($a<$b)?-1:1;
    }


}