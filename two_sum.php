<?php 
class Solution {
    function twoSum($nums, $target) {
        for ($i=0; $i < count($nums); $i++) { 
            for($j=1; $j < count($nums); $j++) {
                if ($nums[$i] + $nums[$j] == $target) {
                    $values = [$i, $j];
                    return $values;
                }
            }
        }
    }
}
$nums = [2,7,11,15];
$target = 9;
$object = new Solution();
$result = $object->twoSum($nums, $target);
print_r($result);