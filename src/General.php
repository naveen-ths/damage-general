<?php

namespace Damage;

class General {

    /**
     * Function to return a formatted extension from the mime type
     */
    public static function ExtFromMime($mime) {
        if ($mime == 'image/jpeg') {
            return '.jpg';
        }
        elseif ($mime == 'image/png') {
            return '.png';
        }
        elseif ($mime == 'image/gif') {
            return '.gif';
        }
        elseif ($mime == 'application/pdf') {
            return '.pdf';
        }
        else {
            return false;
        }
    }

    /**
     * Function to check if a directory exists, if not simply make it
     */
    public static function DirCheck($dir) {
        if (!is_dir($dir)) {
          mkdir($dir, 0755, true);
        }
    }


    /**
     * Function to take a string and replace with asterisks based on length.
     */
    public static function Last4($value) {
        if(strlen($value) > 4) {
            switch (strlen($value)) {
                case 5:
                    $formatted = str_repeat('*', strlen($value) - 1) . substr($value, -1);
                    break;
                case 6:
                    $formatted = str_repeat('*', strlen($value) - 2) . substr($value, -2);
                    break;
                case 7:
                    $formatted = str_repeat('*', strlen($value) - 3) . substr($value, -3);
                    break;
                default:
                    $formatted = str_repeat('*', strlen($value) - 4) . substr($value, -4);
            }
        } else {
            $formatted = str_repeat('*', strlen($value));
        }

        return $formatted;
    }

    /**
     * Function to generate an Alphabet Array
     */
    public static function AlphaArray() {
        $alpha = range('a', 'z');

        $alphabet = [];

        foreach($alpha as $a) {
            $alphabet[$a] = [];
        }

        return $alphabet;
    }

}
