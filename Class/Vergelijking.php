<?php
/**
 * Created by PhpStorm.
 * User: steve
 * Date: 9-5-2018
 * Time: 19:53
 */

abstract class Vergelijking implements iSequenceMethode
{
    public function groter($param1, $param2)
    {

    }

    public function kleiner($param1, $param2)
    {

    }

    public function gelijk($param1, $param2)
    {

    }

    public static function vergelijk(string $param1, string $param2)
    {

        if ($param1 < $param2)
        {
            return -1;
        } elseif ($param1 > $param2)
        {
            return 1;
        }elseif ($param1 == $param2)
        {
            return 0;
        }
    }

    private static function comp(string $param1, string $param2)
    {}



}