<?php
/**
 * Created by PhpStorm.
 * User: vanda
 * Date: 16/05/2018
 * Time: 21:12
 */

class ArrayLoader
{
    private static $newArray;

    /**
     * @param string $element
     */
    public static function FillArray(string $element){
        if (self::$newArray == null){
            self::$newArray = array();
        }
        self::$newArray =  array_push(self::$newArray, $element);
    }

    public static function GetArray(){
        return self::$newArray;
    }
}