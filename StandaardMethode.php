<?php
/**
 * Created by PhpStorm.
 * User: vanda
 * Date: 09/05/2018
 * Time: 19:30
 */


class StandaardMethode
{
    /**
     * @param array $array
     * @return array
     */
    public function Alfabetisch(array $array){

        for($j = 0; $j < count($array); $j ++) {
            for($i = 0; $i < count($array)-1; $i ++){

                if($array[$i] > $array[$i+1]) {
                    $temp = $array[$i+1];
                    $array[$i+1]=$array[$i];
                    $array[$i]=$temp;

                }
            }
        }

        return $array;
    }
}