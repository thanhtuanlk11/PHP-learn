<?php
    $test1 = 1.2;
    $test2 = 1 . 2;
    echo gettype($test1); //double
    echo gettype($test2); // string

    substr('abcdef', 3);
?>