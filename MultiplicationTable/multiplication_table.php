<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Multiplication Table</title>

    <style>
        table {
            border-collapse: collapse;
        }

        th, td {
            padding: 8px 12px;
            text-align: center;
            border: 1px solid black;
        }

        th {
            background-color: #eee;
        }
    </style>
</head>

<body>

<?php

$size = $_POST['size'];

echo "<h2>Multiplication Table ($size x $size)</h2>";

echo "<table>";

// Top-left corner
echo "<tr>";
echo "<th></th>";

// Top row: 1, 2, 3, ... size
for ($i = 1; $i <= $size; $i++) {
    echo "<th>$i</th>";
}

echo "</tr>";

// Table rows
for ($i = 1; $i <= $size; $i++) {

    echo "<tr>";

    // Left column
    echo "<th>$i</th>";

    // Multiplication values
    for ($j = 1; $j <= $size; $j++) {
        echo "<td>" . ($i * $j) . "</td>";
    }

    echo "</tr>";
}

echo "</table>";

?>

</body>
</html>
