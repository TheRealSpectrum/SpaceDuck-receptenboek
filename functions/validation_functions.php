<?php
    function hello() {
        echo "Hello world";
    }

    // names pending

    function not_empty($value) {
        if(!empty(trim($value)) && strlen($value) > 0) {
            return true;
        } else {
            return false;
        }
    }

    function correct_string_length($value, $min, $max) {
        if(strlen($value) >= $min && strlen($value) <= $max) {
            return true;
        } else {
            return false;
        }
    }

    


?>