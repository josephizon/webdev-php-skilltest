<?php
function createTask() {
    $rows = 4;
    $col = 4;
    $uniqueNum = [];

    // while loop to randomize 16 unique numbers
    while (count($uniqueNum) < 16) {
        $num = rand(1, 100);
        if (!in_array($num, $uniqueNum)) {
            $uniqueNum[] = $num;
        }
    }

    // populate table
    $tableArray = [];
    $index = 0;

    for ($r = 0; $r < $rows; $r++) {
        for ($c = 0; $c < $col; $c++) {
            $tableArray[$r][$c] = $uniqueNum[$index++];
        }
    }

    // initialize with 0 sum arrays
    $rowSum = array_fill(0, $rows, 0);
    $colSum = array_fill(0, $col, 0);

    echo "<table>";

        // per row
        for ($i = 0; $i < $rows; $i++) {
            echo "<tr>";
                // per column
                for ($j = 0; $j < $col; $j++) {
                    $cellValue = $tableArray[$i][$j];
                    echo "<td>$cellValue</td>";
                    $rowSum[$i] += $cellValue;
                    $colSum[$j] += $cellValue;
                }

                echo "<td class='sum'>{$rowSum[$i]}</td>";
            echo "</tr>";
        }

        // per column sums
        echo "<tr>";
            for ($j = 0; $j < $col; $j++) {
                echo "<td class='sum'>{$colSum[$j]}</td>";
            }
        echo "</tr>";

    echo "</table>";
}
?>

<!DOCTYPE html>
<html>

<head>
    <title> Joseph Raymund F. Izon | P2E2</title>    
    <link rel="stylesheet" href="../stylesheet.css">
</head>

<body>
    <?php include '../header.php';?>

    <h1>Part 2 Exercise 2</h1>

    <div class="container">
        <h2 style="display: inline; margin-right: 10px;">TASK 2:</h2>
        <p style="display: inline;">Manipulation of multidimensional array.
        <p> ○ Create a 4x4 table. </p>
        <p> ○ Generate a random number from 1 - 100. </p>
        <p> ○ The number generated should always be unique. </p>
        <p> ○ Sum up the number per column and row. </p>
    </div>

    <div class="container">
        <h2> OUTPUT </h2>
        <div>
            <?php
            createTask();
            ?>
        </div>

    </div>

    

</body>
</html>
