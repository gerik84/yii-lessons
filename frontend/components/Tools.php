<?php

namespace app\components;

/**
 * Created by PhpStorm.
 * User: Valya
 * Date: 13.12.2016
 * Time: 13:55
 */
class Tools
{
    static public function debug($array)
    {
        echo "<pre>";
        print_r($array);
        echo "</pre>";
        exit;
    }
}