<?php
class Solution {
    function addTwoNumbers($l1, $l2) {
        $first = array_reverse($l1);
        $first = intval(implode('', $first));

        $second = array_reverse($l2);
        $second = intval(implode('', $second));
        
        $result = $first+$second;
        $result = array_map('intval', str_split($result));
        $result = array_reverse($result);
        return $result;
    }
}

$l1 = [9,9,9,9,9,9,9];
$l2 = [9,9,9,9];
$object = new Solution();
$result = $object->addTwoNumbers($l1, $l2);
print_r($result);