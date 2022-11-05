<?php

// Function to convert a number to words
class Solution {

    /**
     * @param Integer $num
     * @return String
     */
    function numberToWords($num)
    {
        $words = array(
            0 => 'Zero',
            1 => 'One',
            2 => 'Two',
            3 => 'Three',
            4 => 'Four',
            5 => 'Five',
            6 => 'Six',
            7 => 'Seven',
            8 => 'Eight',
            9 => 'Nine',
            10 => 'Ten',
            11 => 'Eleven',
            12 => 'Twelve',
            13 => 'Thirteen',
            14 => 'Fourteen',
            15 => 'Fifteen',
            16 => 'Sixteen',
            17 => 'Seventeen',
            18 => 'Eighteen',
            19 => 'Nineteen',
            20 => 'Twenty',
            30 => 'Thirty',
            40 => 'Forty',
            50 => 'Fifty',
            60 => 'Sixty',
            70 => 'Seventy',
            80 => 'Eighty',
            90 => 'Ninety',
            100 => 'Hundred',
            1000 => 'Thousand',
            1000000 => 'Million',
            1000000000 => 'Billion',
        );

        if ($num < 20) {
            return $words[$num];
        }

        if ($num < 100) {
            $tens = floor($num / 10) * 10;
            $units = $num % 10;
            return $words[$tens] . ($units ? ' ' . $words[$units] : '');
        }

        if ($num < 1000) {
            $hundreds = floor($num / 100);
            $remainder = $num % 100;
            return $words[$hundreds] . ' ' . $words[100] . ($remainder ? ' ' . $this->numberToWords($remainder) : '');
        }

        if ($num < 1000000) {
            $thousands = floor($num / 1000);
            $remainder = $num % 1000;
            return $this->numberToWords($thousands) . ' ' . $words[1000] . ($remainder ? ' ' . $this->numberToWords($remainder) : '');
        }

        if ($num < 1000000000) {
            $millions = floor($num / 1000000);
            $remainder = $num % 1000000;
            return $this->numberToWords($millions) . ' ' . $words[1000000] . ($remainder ? ' ' . $this->numberToWords($remainder) : '');
        }

        if ($num < 1000000000000) {
            $billions = floor($num / 1000000000);
            $remainder = $num % 1000000000;
            return $this->numberToWords($billions) . ' ' . $words[1000000000] . ($remainder ? ' ' . $this->numberToWords($remainder) : '');
        }

        return $num;
    }
}
