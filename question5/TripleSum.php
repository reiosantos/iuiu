<?php
/**
 * Created by PhpStorm.
 * User: ronaldsekitto
 * Date: 19/09/2018
 * Time: 14:32
 */

class TripleSum
{
    /**
     * @param $one
     * @param $two
     * @return float|int
     */
    function add_two_numbers($one, $two){
        if ($one == $two) {
            return 3 * ($one + $two);
        }
        return $one + $two;
    }
}

$sum = new TripleSum();
echo $sum->add_two_numbers(2, 7) . "\n";
echo $sum->add_two_numbers(4, 4) . "\n";
echo $sum->add_two_numbers(3, 1) . "\n";