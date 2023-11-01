<?php
/**
 * A readable and maintainable PHP code to print the pattern:
 * *****
 * ****
 * ***
 * **
 * *
 */

$rows = 5; // Number of rows in the pattern

for ($i = $rows; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo '*';
    }
    echo "\n"; // Move to the next line after each row
}
?>

