<?php

/**
 * Takes a number and returns the squares each of its digits added together
 *
 * @param int $input
 * @return int
 */
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

/**
 * Runs the `squared_digits` function with a starting value
 * until it returns a duplicated value
 *
 * @param int $start
 * @return int
 */
function get_repeating_val(int $start): int
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

/**
 * Runs the `squared_digits` function with a starting value
 * until it returns either a '1' or '89'
 *
 * @param int $start
 * @return int
 */
function get_looping_val(int $start): int
{
    // Initialize the history of numbers
    $history = [$start];

    // Begin the loop of squaring digits
    do {
        $currentNum = squared_digits(end($history));
        if ($currentNum === 1 || $currentNum === 89) {
            break;
        }
        if (in_array($currentNum, $history)) {
            break;
        }
        $history[] = $currentNum;
    } while (true);

    // The duplicated number has been found; return it
    return $currentNum;
}

/**
 * Runs the specified `squared_digits` algorithm for the specified
 * number of $cycles, then returns the number of 89s that were returned
 *
 * @param int $cycles
 * @param callable $callback
 * @return int
 */
function count_eighty_nines(int $cycles, callable $callback): int
{
    // Initialize the counter
    $count = 0;

    // Loop through the repeater for each number in $cycles
    for ($i = 1; $i <= $cycles; $i++) {
        if ($callback($i) === 89) {
            $count++;
        }
    }

    // Return the final count of 89s
    return $count;
}

// Specify the number of loops to run through the counter
$numLoops = 100000;

// Specify which algorithm to use for finding the 89s,
// either "get_looping_val" or "get_repeating_val"
$algorithm = "get_looping_val";

// Print the number of times 89 is the final value
var_dump(
    "The number of 89s that occur under " .
        number_format($numLoops) .
        " using the '" .
        $algorithm .
        "' algorithm is " .
        number_format(count_eighty_nines($numLoops, $algorithm)) .
        "."
);
