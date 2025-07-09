<?php

class Solution {
    function isPalindrome($x) {
        $x = array_map('intval', str_split($x));
        if (array_reverse($x) == $x) {
            return true;
        } else {
            return false;
        }
    }
}
$x = 121;
$obj = new Solution();
$result = $obj->isPalindrome($x);
var_dump($result);