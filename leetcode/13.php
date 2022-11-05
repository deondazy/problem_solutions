<?php

class Solution {
    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $romanCharacters = [
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000,
        ];

        $result = 0;

        for ($i = 0; $i < strlen($s); $i++) {
            if ($i > 0 && $romanCharacters[$s[$i]] > $romanCharacters[$s[$i - 1]]) {
                $result += $romanCharacters[$s[$i]] - 2 * $romanCharacters[$s[$i - 1]];
            } else {
                $result += $romanCharacters[$s[$i]];
            }
        }

        return $result;
    }
}
