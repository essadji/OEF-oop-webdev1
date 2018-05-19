<?php
include "webPage.php";
/**
 * Created by PhpStorm.
 * User: metin
 * Date: 09/05/2018
 * Time: 20:06
 */

class Motoren
{


    /**
     * @param $a
     * @param $b
     * @return bool
     */
    public function kleiner($a, $b)
    {

        if ($a < $b) {
            return true;
        }
        echo "audi";
    }

    /**
     * @param $a
     * @param $b
     * @return bool
     */
    public function groter($a, $b)
    {

        if ($a > $b) {

            return true;
        }
        echo "bmw";
    }


    /**
     * @param $a
     * @param $b
     * @return bool
     */
    public function gelijk($a, $b)
    {

        if ($a == $b) {

            return false;
        }
        echo "volvo";
    }


}


