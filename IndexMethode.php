<?php
/**
 * Created by PhpStorm.
 * User: steve
 * Date: 9-5-2018
 * Time: 19:54
 */

include_once "StandaardMethode.php";

class IndexMethode extends StandaardMethode
{
    private $_vergelijk;

    private $_index;

    public function __construct(int $pIndex)
    {
        if (is_numeric($pIndex)) {
            if ($pIndex >= 0){
                $this->_index = $pIndex;
            }else{
                $this->_index = 0;
            }
            $this->_vergelijk = new Vergelijking();
        } else{
            throw new Exception("Type mismatch. ". $pIndex." is not a number.",9000);
        }
    }



    public function comp(string $param1, string $param2)
    {
        if (strlen($param1)<$this->_index){
            $value1 = " ";
        }else{
            $value1=substr($param1, $this->_index,1);
        }
        if (strlen($param2)<$this->_index){
            $value2 = " ";
        }else{
            $value2=substr($param1, $this->_index,1);
        }
        return $this->_vergelijk->vergelijk($value1,$value2);
    }

}