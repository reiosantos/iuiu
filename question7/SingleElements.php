<?php
/**
 * Created by PhpStorm.
 * User: ronaldsekitto
 * Date: 19/09/2018
 * Time: 14:51
 */

class SingleElements
{

    /**
     * @param $arr
     */
    function get_single_element($arr){

        $res = $arr[0];
        for ($x = 0; $x < sizeof($arr); $x++) {
            $res = $res ^ $arr[$x];
        }
        echo $res;

    }
}

$s = new SingleElements();
$n = [3, 3, 3, 5, 5, 5, 1];
$s->get_single_element($n);