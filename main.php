<?php

$operations = [
    '(' => 1,
    ')' => 1,
    '+' => 2,
    '-' => 2,
    '*' => 3,
    '/' => 3,
    '^' => 4
];

echo "input: ";
$input = readline();
$stack = [];
$output = [];
for ($i = 0; $i < strlen($input); $i++)
{
    foreach ($operations as $operation => $priority)
    {
        if ($input[$i] == $operations)
        {
            foreach ($stack as $symbol) {
                $stack += $input[$i];
            }

        }
    }
}