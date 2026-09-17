<?php

$size = $_POST['size'];

echo "<table border='1'>";

// Top row
echo "<tr>";
echo "<th></th>";

for ($i = 1; $i <= $size; $i++) {
    echo "<th>$i</th>";
}

echo "</tr>";

// Remaining rows
for ($i = 1; $i <= $size; $i++) {

    echo "<tr>";

    // First column
    echo "<th>$i</th>";

    // Multiplication values
    for ($j = 1; $j <= $size; $j++) {
        echo "<td>" . ($i * $j) . "</td>";
    }

    echo "</tr>";
}

echo "</table>";

?>
