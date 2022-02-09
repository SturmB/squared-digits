<?php

function squared_digits(int $input): int
{
    // Convert the number input into an array of its constituent digits
    $digits = array_map("intval", str_split($input));

    // Square each digit and add them all together
    return array_reduce(
        $digits,
        function ($acc, $item) {
            return $acc + $item ** 2;
        },
        0
    );
}

function get_repeater(int $start): int
{
    // Initialize the history of numbers
    $history = [$start];

    // Begin the loop of squaring digits
    do {
        $currentNum = squared_digits(end($history));
        if (in_array($currentNum, $history)) {
            break;
        }
        $history[] = $currentNum;
    } while (true);

    // The duplicated number has been found; return it
    return $currentNum;
}

var_dump(get_repeater(85));
