<?php

$x = 10;
echo $x;
function test()
{
    global $x;
    echo $x;
}

test();
