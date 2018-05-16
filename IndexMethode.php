<?php
/**
 * Created by PhpStorm.
 * User: vanda
 * Date: 09/05/2018
 * Time: 19:31
 */

class IndexMethode
{


    public function AlfabetichsOpBasisVanIndex(array $array, int $index){
        $tempArray = [];
        for($i = 0; $i < count($array); $i ++){
            $indexChar = substr($array[$i], $index, 1);
            $tempArray[$i] = [
                $indexChar => $array[$i],
            ];

        }
        ksort($tempArray);
        return $tempArray;
    }
}