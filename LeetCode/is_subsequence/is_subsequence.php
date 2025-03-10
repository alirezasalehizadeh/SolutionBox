<?php

function isSubsequence($s, $t)
{
    $i = 0;
    $n = 0;
    $sl = strlen($s);
    $tl = strlen($t);

    while ($i < $sl && $n < $tl) {
        if ($s[$i] == $t[$n]) $i++;
        $n++;
    }

    return $i == $sl;
}
