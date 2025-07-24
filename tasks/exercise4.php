<?php
function createTask() {
    $rows = 6;
    $col = 5;
    $space = "&nbsp;&nbsp;&nbsp;";

    // per row computation
    for ($i = 1; $i <= $rows; $i++) {
        $multiplier = $i + 1; 
        $result = $i;

        // per column computation
        for ($j = 1; $j <= $col; $j++) {
            echo $result . $space;
            $result *= $multiplier;
        }

        echo "<br>";
    
    }
}
    
?>

<!DOCTYPE html>
<html>

<head>
    <title> Joseph Raymund F. Izon | P1E4</title>    
    <link rel="stylesheet" href="../stylesheet.css">
</head>

<body>
    <?php include '../header.php';?>

    <h1>Part 1 Exercise 4</h1>

    <div class="container">
        <h2 style="display: inline; margin-right: 10px;">TASK 4:</h2>
        <p style="display: inline;">Create the given pattern.</p>
        <div>
            <p><pre>
1 2  4   8    16
2 6  18  54   162
3 12 48  192  768
4 20 100 500  2500
5 30 180 1080 6480
6 42 294 2058 14406
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



