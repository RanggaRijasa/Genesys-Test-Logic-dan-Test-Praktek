<?php
$x = 5;
for ($i = 0; $i < $x; $i++) {
    $spaces = $x - $i - 1;
    $stars = 2 * $i + 1;
    echo str_repeat(' ', $spaces) . str_repeat('*', $stars) . PHP_EOL;
}
?>