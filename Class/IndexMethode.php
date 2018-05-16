<?php
/**
 * Created by PhpStorm.
 * User: steve
 * Date: 9-5-2018
 * Time: 19:54
 */


class IndexMethode extends Vergelijking
{
    private static $_index;

    public function __construct(int $pIndex)
    {
        if (is_numeric($pIndex)) {
            if ($pIndex >= 0){
                self::$_index = $pIndex;
            }else{
                self::$_index = 0;
            }

        } else{
            throw new Exception("Type mismatch. ". $pIndex." is not a number.",9000);
        }
    }



    private static function comp(string $param1, string $param2)
    {
        if (strlen($param1)<self::$_index){
            $value1 = " ";
        }else{
            $value1=substr($param1, self::$_index,1);
        }
        if (strlen($param2)<self::$_index){
            $value2 = " ";
        }else{
            $value2=substr($param2, self::$_index,1);
        }
        return parent::vergelijk($value1,$value2);
    }
    public function sortArray(array $pUnSorted)
    {
        usort($pUnSorted, array(get_class($this),"comp"));
        return $pUnSorted;
    }

}