<?php
    class Leet
    {
        function e_check($input)
        {
            $chars = str_split($input);
            $char_replace = [];

            foreach( $chars as $letter) {
                if ($letter == "e") {
                    $letter = "3";
                    array_push($char_replace, $letter);
                } else {
                    array_push($char_replace, $letter);
                }
            }
            return implode($char_replace);
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

        function i_check($input)
        {
            $chars = str_split($input);
            $char_replace = [];

            foreach( $chars as $letter) {
                if ($letter == "I") {
                    $letter = "1";
                    array_push($char_replace, $letter);
                } else {
                    array_push($char_replace, $letter);
                }
            }
            return implode($char_replace);
        }

        function s_check($input)
        {
            $letters = str_split($input);
            $output = [];

            foreach($letters as $letter) {
                if ($letter == 's') {
                    $letter = 'z';
                    array_push($output, $letter);
                } else {
                    array_push($output, $letter);
                }
            }
            return implode($output);
        }
    }
 ?>
