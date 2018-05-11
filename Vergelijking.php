<?php
/**
 * Created by PhpStorm.
 * User: steve
 * Date: 9-5-2018
 * Time: 19:53
 */

include "sequenceMethode.php";

class Vergelijking implements sequenceMethode
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

    public function vergelijk($param1, $param2)
    {

        if (groter($param1,$param2))
        {
            return -1;
        } elseif (kleiner($param1,$param2))
        {
            return 1;
        }elseif (gelijk($param1,$param2))
        {
            return 0;
        }
    }
}