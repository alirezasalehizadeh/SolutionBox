<?php

function vowelStrings($words, $left, $right)
{
    $vowelChars = ['a', 'e', 'i', 'o', 'u'];

    $c = 0;

    for ($i = $left; $i <= $right; $i++) {
        if (in_array($words[$i][0], $vowelChars) && in_array($words[$i][-1], $vowelChars)) {
            $c++;
        }
    }

    return $c;
}
