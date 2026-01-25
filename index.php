<?php
echo "Hello from my PHP App!";
echo "<br>";
echo "Today is: " . date('Y-m-d H:i:s');

// Simple function
function add($a, $b) {
    return $a + $b;
}

$result = add(5, 3);
echo "<br>5 + 3 = " . $result;
?>