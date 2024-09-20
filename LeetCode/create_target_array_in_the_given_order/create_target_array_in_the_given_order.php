<?php

function createTargetArray($nums, $index)
{
    $array = [];
    for ($i = 0; $i < count($nums); $i++) {
        array_splice($array, $index[$i], 0, $nums[$i]);
    }
    return $array;
}
