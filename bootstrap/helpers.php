<?php

if (!function_exists('formatDecBin')) {
    function formatDecBin() {
        $biggerLength = 0;

        foreach ($numbers = func_get_args() as $key => &$number) {
            if (($length = strlen($number = decbin($number))) > $biggerLength) {
                $biggerLength = $length;
            }
        }

        foreach ($numbers as &$number) {
            if (($length = strlen($number)) < $biggerLength) {
                $number = str_repeat('0', $biggerLength - $length) . $number;
            }
            $number .= '<br/>';
        }
        unset($number);

        return implode('', $numbers);
    }
}
