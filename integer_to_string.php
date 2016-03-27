<?php
function int_to_string($int) {
    //define an array with our matching strings for each int, based on index
    $digits = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
    //empty string to start
    $string = '';
    //loop over $int until it doesn't exist
    while ($int) {
        //lop off the right most digit of our int
        $digit = $int % 10;
        //build our new string, keeping in mind the digits work right to left as we progress
        $string = $digits[$digit] . $string;
        //reduce $int such that the digit we lopped off is gone, need to floor it or it will fail
        $int = floor($int / 10);
    }
    return $string;
}
//define constants
CONST MIN_INT = 1000;
CONST MAX_INT = 10000;

//get our random int for conversion
$int = rand(MIN_INT, MAX_INT);
//convert!
$string = int_to_string($int);
if ($string == strval($int)) {
    echo 'Conversion Successful!';
}
else {
    echo "Conversion failed!";
}
var_dump($int);
var_dump($string);