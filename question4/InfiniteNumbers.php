<?php
/**
 * Created by PhpStorm.
 * User: ronaldsekitto
 * Date: 19/09/2018
 * Time: 14:25
 */

class InfiniteNumbers
{
    /**
     * @param array $numbers
     */
    function add_numbers_with_array_sum($numbers=[]) {
        echo array_sum($numbers) . "\n";
    }

    /**
     * @param array $numbers
     */
    function add_numbers_the_normal_way($numbers=[]) {
        $counter = 0;
        $sum = 0;
        while ($counter <= sizeof($numbers)){
            $sum += $numbers[$counter];
            $counter++;
        }
        echo $sum;
    }

}

$n = new InfiniteNumbers();
$no = [2,3,4,5];
$no_1 = [1, 3, 3, 9, 4, 5];

$n->add_numbers_with_array_sum($no);
$n->add_numbers_the_normal_way($no_1);