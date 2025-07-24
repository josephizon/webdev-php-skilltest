<?php
function createX($size) {
    $space = "&nbsp;&nbsp;";
    $increase = 6; 
    $decrease = 6;
    $lines = []; 

    for ($i = $size ; $i >= 1; $i--) {
        // left side space increase
        $line = str_repeat($space, $increase++ * 3);

        // print 1 when i is 1 since only one 1 yes
        if ($i == 1) {
            $line .= str_repeat($space, 4) . $i;
        } 
        
        else {
            $line .= ($i == 5 || $i == 3) ? $i : "*";
            // right side space decrease
            $line .= str_repeat($space, $decrease-- * 6);
            $line .= ($i == 5 || $i == 3) ? $i : "*";
        }

        $lines[] = $line;
    }

    // print top half
    foreach ($lines as $line) {
        echo $line . "<br>";
    }

    // print bottom half (mirror) but w/o the 1
    for ($j = count($lines) - 2; $j >= 0; $j--) {
        echo $lines[$j] . "<br>";
    }
}


?>

<!DOCTYPE html>
<html>

<head>
    <title> Joseph Raymund F. Izon | P1E2</title>    
    <link rel="stylesheet" href="../stylesheet.css">
</head>

<body>
    <?php include '../header.php';?>

    <h1>Part 1 Exercise 2</h1>

    <div class="container">
        <h2 style="display: inline; margin-right: 10px;">TASK 2:</h2>
        <p style="display: inline;">Create the given pattern (x).</p>
        <div>
            <p><pre>
*                                                                       *
        5                                                       5
            *                                           *
                    3                           3
                        *               *
                                1
                        *               *
                    3                            3
            *                                           *
        5                                                        5
*                                                                       *
            </pre></p>
        </div>
    </div>

    <div class="container">
        <h2> OUTPUT </h2>
        <div style="margin-right: 15rem">
            <?php
            createX(6);
            ?>
        </div>

    </div>  

</body>
</html>



