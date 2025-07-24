<?php
// straightforward
// first loop refers to the row and inner loop refers to the per column
function createTask() {
    $rows = 5;
    $space = "&nbsp;&nbsp;";

    for ($i = 1; $i <= $rows; $i++) {
        // mutiply row number by incrementing number based on the number of rows
        for ($j = 1; $j <= $i; $j++) {
            echo $i * $j . $space;
        }
        echo "<br>";
    }

    // reversed version
    for ($i = $rows - 1; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo $i * $j . $space;
        }
        echo "<br>";
    }
}
    
?>

<!DOCTYPE html>
<html>

<head>
    <title> Joseph Raymund F. Izon | P1E3</title>    
    <link rel="stylesheet" href="../stylesheet.css">
</head>

<body>
    <?php include '../header.php';?>

    <h1>Part 1 Exercise 3</h1>

    <div class="container">
        <h2 style="display: inline; margin-right: 10px;">TASK 3:</h2>
        <p style="display: inline;">Create the given pattern.</p>
        <div>
            <p><pre>
1
2 4
3 6 9
4 8 12 16
5 10 15 20 25
4 8 12 16
3 6 9
2 4
1 
            </pre></p>
        </div>
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



