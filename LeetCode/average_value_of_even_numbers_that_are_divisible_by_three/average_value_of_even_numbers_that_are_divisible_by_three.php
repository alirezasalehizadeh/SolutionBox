<?php

function averageValue($nums)
{
    $arr = array_filter($nums, fn($n) => $n % 3 === 0 && $n % 2 === 0);

    if (!empty($arr)) {
        $average = array_sum($arr) / count($arr);
        return floor($average);
    }

    return 0;
}
