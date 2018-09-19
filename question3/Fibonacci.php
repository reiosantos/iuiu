<?php
/**
 * Created by PhpStorm.
 * User: ronaldsekitto
 * Date: 19/09/2018
 * Time: 10:54
 */

class Fibonacci
{

    /**
     * @param int $number
     * @return int
     */
    function fibonacci_series_with_recursion($number = 50)
    {
        if ($number == 0) return 1;
        if ($number == 1) return 1;
        if ($number == 2) return 2;
        return ($this->fibonacci_series_with_recursion($number - 2) + $this->fibonacci_series_with_recursion($number - 1));
    }

    /**
     * @param $n
     */
    function fibonacci_series_without_recursion($n)
    {
        $f1 = 0;
        $f2 = 1;
        if ($n < 1)
            return;

        for ($i = 1; $i <= $n; $i++) {
            echo($f2);
            echo(" ");
            $next = $f1 + $f2;
            $f1 = $f2;
            $f2 = $next;
        }
    }

}

$fib = new Fibonacci();

# print only the first 10 fibonacci numbers
$n = 10;

$fib->fibonacci_series_without_recursion($n);

echo "\n";

for ($i = 0; $i < $n; $i++) {
    echo $fib->fibonacci_series_with_recursion($i) . " ";
}