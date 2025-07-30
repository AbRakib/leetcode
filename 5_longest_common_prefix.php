<?php 
class solution {
    function longestCommonPrefix($strs) {
        if (count($strs) == 1) {
            return $strs[0];
        }
        $result = "";
        $min_lenght = $strs[0];
        for ($i=1; $i < count($strs); $i++) { 
            $length = strlen($strs[$i]);
            if($length < $min_lenght) {
                $min_lenght = $length;
            }
        }

        $contunue_loop = true;
        for ($j=0; $j < $min_lenght; $j++) {
            $matched = $strs[0][$j];
            for ($k=1; $k < count($strs); $k++) {
                if ($matched != $strs[$k][$j]) {
                    $contunue_loop = false;
                    break;
                }elseif($k == count($strs) - 1) {
                    $result .= $strs[$k][$j];
                }
            }
            if ($contunue_loop == false) {
                break;
            }
        }
        return $result;
    }
}

$strs = ["flower","flow","flight"];
$solution = new Solution();
var_dump($solution->longestCommonPrefix($strs));
?>