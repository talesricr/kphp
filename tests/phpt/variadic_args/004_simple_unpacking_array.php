@ok
<?php

function fun(...$args) {
    var_dump($args);
}

$a = [];
fun(...$a);

$a = [1];
fun(...$a);

$a = [1, 2, 3, 4];
fun(...$a);
