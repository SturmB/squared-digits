<?php

function squared_digits(int $input): int
{
    // Convert the number input into an array of its constituent digits
    $digits = array_map('intval', str_split($input));

    // Square each digit and add them all together
    return array_reduce($digits, function ($acc, $item) {
        return $acc + $item ** 2;
    }, 0);
}

var_dump(squared_digits(23));
