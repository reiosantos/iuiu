<?php
/**
 * Created by PhpStorm.
 * User: ronaldsekitto
 * Date: 19/09/2018
 * Time: 10:43
 */

class Reverse
{
    /**
     * @param string
     * uses the
     */
    function use_inbuilt($word="Hello") {
        echo strrev($word) . "\n";
    }

    /**
     * @param string $word
     */
    function custom_strrev($word="Africa/kampala") {
        $r = '';
        for ($i = mb_strlen($word); $i >= 0; $i--) {
            $r .= mb_substr($word, $i, 1);
        }
        echo $r . "\n";
    }

}

$obj = new Reverse();
$obj->use_inbuilt();
$obj->custom_strrev();
