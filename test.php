<?php
$a = log(5, 25);
echo $a . PHP_EOL;
require_once __DIR__ . '/Calculate.php';
echo "Input expression: ";
$input = readline();
echo PHP_EOL;
$calc = new Calculate($input);
if ($calc->postfixString) {
    echo PHP_EOL;
    echo 'Postfix (~ - unary minus): ' . $calc->postfixString . PHP_EOL . PHP_EOL;
    echo 'Result: ' . $calc->result . PHP_EOL . PHP_EOL;
} else {
    echo $calc->result . PHP_EOL;
}

#3*((-25-10*-2^2/4)*(4+5))/2
#result = -472.5