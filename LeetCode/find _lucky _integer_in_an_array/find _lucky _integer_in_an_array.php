<?php

function findLucky($arr)
{
    $values = array_count_values($arr);

    $array = [];

    foreach ($values as $key => $value) {
        if ($key == $value) {
            $array[] = $value;
        }
    }

    return empty($array) ? -1 : max($array);
}
