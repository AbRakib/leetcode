<?php

class Solution {
    function romanToInt($s) {
        $romans = [
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000,
        ];

        $sum = 0;
        $len = strlen($s);

        for ($i = 0; $i < $len; $i++) {
            $current = $romans[$s[$i]];
            $next = ($i + 1 < $len) ? $romans[$s[$i + 1]] : 0;

            if ($current < $next) {
                $sum -= $current;
            } else {
                $sum += $current;
            }
        }
        return $sum;
    }
}

$value = "MCMXCIV";
$obj = new Solution();
$result = $obj->romanToInt($value);
echo $result;