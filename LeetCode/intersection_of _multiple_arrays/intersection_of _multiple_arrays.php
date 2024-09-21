<?php

function intersection($nums)
{
    $array = call_user_func_array('array_intersect', $nums);
    sort($array);
    return $array;
}
