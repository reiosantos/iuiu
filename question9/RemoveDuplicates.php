<?php
/**
 * Created by PhpStorm.
 * User: ronaldsekitto
 * Date: 19/09/2018
 * Time: 15:25
 */

class RemoveDuplicates
{
    /**
     * @param $sentence
     */
    function remove($sentence){
        $sentence = str_replace(".", " ", $sentence);
        $ar = array_unique(explode(" ", $sentence));
        echo trim(implode(" ", $ar)) . ".";
    }

}

$st = new RemoveDuplicates();

$s = "The boy boy is going to school school.";

$st->remove($s);