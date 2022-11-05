<?php

class Solution {
    /**
     * @param Integer $num
     * @return String
     */
    function intToRoman($num) {
        $romanCharacters = [
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000,
        ];

        $result = '';

        foreach (array_reverse($romanCharacters) as $romanCharacter => $value) {
            $result .= str_repeat($romanCharacter, intdiv($num, $value));
            $num %= $value;
        }

        $result = str_replace('IIIII', 'V', $result);
        $result = str_replace('IIII', 'IV', $result);
        $result = str_replace('VV', 'X', $result);
        $result = str_replace('VIV', 'IX', $result);
        $result = str_replace('XXXXX', 'L', $result);
        $result = str_replace('XXXX', 'XL', $result);
        $result = str_replace('LL', 'C', $result);
        $result = str_replace('LXL', 'XC', $result);
        $result = str_replace('CCCCC', 'D', $result);
        $result = str_replace('CCCC', 'CD', $result);
        $result = str_replace('DD', 'M', $result);
        $result = str_replace('DCD', 'CM', $result);

        return $result;
    }
}

