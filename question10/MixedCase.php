<?php
/**
 * Created by PhpStorm.
 * User: ronaldsekitto
 * Date: 19/09/2018
 * Time: 15:53
 */

class MixedCase
{
    /**
     * @param $str
     * @return mixed
     */
    function transform_case($str){
        if (strlen($str) < 3){
            echo strtoupper($str) . "\n";
            return $str;
        }
        $sub = strtolower(substr($str, 0, 3));
        $str = $sub . substr($str, 3);
        echo $str . "\n";
        return $str;
    }

}

$st = new MixedCase();

$st->transform_case("san");
$st->transform_case("sa");
$st->transform_case("sAnTos");
$st->transform_case("SANTOS");