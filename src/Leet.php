<?php
    class Leet
    {
        function e_check($input)
        {
            if ($input == "e") {
                $input = "3";
            }
            return $input;
        }

        function o_check($input)
        {
            $chars = str_split($input);
            $char_replace = [];
            foreach( $chars as $letter) {
                if ($letter == "o") {
                    $letter = "0";
                    array_push($char_replace, $letter);
                } else {
                    array_push($char_replace, $letter);
                }
            }
            return implode($char_replace);
        }
    }
 ?>
