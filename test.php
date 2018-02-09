<!DOCTYPE html>
<html>
<body>

<h1>PHP Test Page</h1>

<?php
/*
 * Write a function:
 * - accepts a single variable as a parameter with default value 10
 * - prints "Hellow World!" by number of times passed
 * - returns the value "Hello World!"
 */
function nHellowWorld($num = 10) {
    for ($x = 0; $x < $num; $x++) {
        echo "Hello World! <br>";
    }
    return "Hello World!";
}

$someString = nHelloWorld();

echo "Return value: $someString";

?>

</body>
</html>