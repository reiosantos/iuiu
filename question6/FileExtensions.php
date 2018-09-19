<?php
/**
 * Created by PhpStorm.
 * User: ronaldsekitto
 * Date: 19/09/2018
 * Time: 14:38
 */

class FileExtensions
{

    /**
     * @param $filename
     */
    function get_extension($filename) {
        $arr = preg_split("/\./", $filename);
        if (sizeof($arr) == 1) {
            echo "`$filename` has no extension \n";
        }else {
            echo $arr[sizeof($arr) - 1] . "\n";
        }
    }
}

$f = new FileExtensions();
$f->get_extension("index");
$f->get_extension("index.html");
$f->get_extension("image.jpg");
$f->get_extension("index.html.php");