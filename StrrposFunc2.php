<?php
$foo = "0123456789a123456789b123456789c";

var_dump(strrpos($foo, '7', -5));  // Starts looking backwards five positions
                                   // from the end. Result: int(17)

var_dump(strrpos($foo, '8'));  // Starts searching 20 positions into the
                                   // string. Result: int(27)

var_dump(strrpos($foo, '7', 28));  
?>