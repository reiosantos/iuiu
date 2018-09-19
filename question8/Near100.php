<?php
/**
 * Created by PhpStorm.
 * User: ronaldsekitto
 * Date: 19/09/2018
 * Time: 15:14
 */

class Near100
{
    /**
     * @param $one
     * @param $two
     */
    function get_nearest_100($one, $two){
        echo $this->nearest($one, $two) . "\n";
    }

    /**
     * @param $one
     * @param $two
     * @return string
     */
    function nearest($one, $two){
        if ($one == $two) return $one;

        $x = abs($one - 100);
        $y = abs($two - 100);
        if ($x > $y) return $two;
        if ($x < $y) return $one;
        return "Both `$one` and `$two` are very close.";
    }
}

$n100 = new Near100();
$n100->get_nearest_100(9, 90);
$n100->get_nearest_100(91, 91.5);
$n100->get_nearest_100(-1, -99);
$n100->get_nearest_100(99, 101);
$n100->get_nearest_100(99, 100);