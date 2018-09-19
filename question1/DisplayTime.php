<?php
/**
 * Created by PhpStorm.
 * User: ronaldsekitto
 * Date: 19/09/2018
 * Time: 10:11
 */

class DisplayTime
{
    /**
     * @param string $timezone
     * Uses php date time class to create dates
     */
    function display_date_using_class($timezone="Africa/kampala") {

        echo "--------Using datetime class---------\n";

        $date = new DateTime($timezone);
        echo "Today is: " . $date->format("l") . "\n";
        echo "\n";
        echo "Current Time is: " . $date->format("H A: i : s.") . "\n";
    }

    /**
     * @param string $timezone
     * uses php date method to create date
     * sets the default time zone to Africa/Kampala
     */
    function display_date_using_methods($timezone="Africa/kampala") {

        echo "--------Using date method---------\n";
        date_default_timezone_set($timezone);

        echo "\nToday is: " . date("l") . "\n";
        echo "\n";
        echo "Current Time is: " . date("H A: i : s.") . "\n";
    }

}

$obj = new DisplayTime();
$obj->display_date_using_class();
$obj->display_date_using_methods();
