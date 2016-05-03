<?php

/**
 * Created by PhpStorm.
 * User: Jan
 * Date: 26.04.2016
 * Time: 08:42
 */
class functions
{

    public $test="0";
    public $test1="2";
    public $test3="5";

    public static function foo ($test1, $test2, $test)
    {
        echo "Beispielfunktion.\n";
        $test=$test1+$test2;
        return $test;
    }
}