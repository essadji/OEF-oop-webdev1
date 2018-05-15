<?php
/**
 * Created by PhpStorm.
 * User: steve
 * Date: 9-5-2018
 * Time: 19:53
 */

include_once "iSequenceMethode.php";

class Vergelijking implements iSequenceMethode
{



    public function groter($param1, $param2)
    {
        return ($param1 < $param2);
    }

    public function kleiner($param1, $param2)
    {
        return ($param1 > $param2);
    }

    public function gelijk($param1, $param2)
    {

        return ($param1 == $param2);
    }

    public function vergelijk(string $param1, string $param2)
    {

        if ($this->groter($param1,$param2))
        {
            return -1;
        } elseif ($this->kleiner($param1,$param2))
        {
            return 1;
        }elseif ($this->gelijk($param1,$param2))
        {
            return 0;
        }
    }
}