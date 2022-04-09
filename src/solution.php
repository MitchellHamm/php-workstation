<?php

class Solution {

    function isPalindrome($s) {
        $s = preg_replace("/[^A-Za-z0-9 ]/", '', $s);
        $s = str_replace(" ", "", $s);

        $stringLength = strlen($s);
        $j = $stringLength-1;
        
        for($i=0; $i < floor($stringLength/2); $i++) {
            if(strtolower($s[$i]) != strtolower($s[$j])) {
                return false;
            } else {
                $j--;
            }
        }

        return true;
    }
}
?>