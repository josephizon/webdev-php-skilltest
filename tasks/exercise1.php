<?php
function createDiamond($width) {
    $space = "&nbsp;&nbsp;&nbsp;";
    $lines = [];

    // decrease leftspace while increasing right space
    $leftSpace = 3;
    $rightSpace = 2;

    // upper half
    for ($i = 0; $i < $width; $i++) {
        $line = "";
        $line .= str_repeat($space, $leftSpace--);
        $line .= "*";

        if ($i > 0) {
            $line .= str_repeat($space, $rightSpace);
            $line .= "*";
            $rightSpace += 2;
        }

        $lines[] = $line;
    }

    // increase leftspace while decreasing right space
    $leftSpace = 1;
    $rightSpace = 4;

    // lower half
    for ($i = $width - 2; $i >= 0; $i--) {
        $line = "";
        $line .= str_repeat($space, $leftSpace++);
        $line .= "*";

        if ($i > 0) {
            $line .= str_repeat($space, $rightSpace);
            $line .= "*";
            $rightSpace -= 2;
        }

        $lines[] = $line;
    }

    return $lines;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title> Joseph Raymund F. Izon | P1E1</title>    
    <link rel="stylesheet" href="../stylesheet.css">
</head>

<body>
    <?php include '../header.php';?>

    <h1>Part 1 Exercise 1</h1>

    <div class="container">
        <h2 style="display: inline; margin-right: 10px;">TASK 1:</h2>
        <p style="display: inline;">Create the given pattern.</p>
        <div>
            <p><pre>
            *
        *       *
    *               *
*                       *
    *              *
        *       *
            *
        *       *
    *               *
*                       *
    *              *
        *       *
            *
            </pre></p>
        </div>
    </div>

    <div class="container" style="font-family: monospace;">
        <h2> OUTPUT </h2>
        <div>
            <?php
            $diamond = createDiamond(4);

            // draw first diamond
            foreach ($diamond as $line) {
                echo $line . "<br>";
            }

            // draw second diamond but not the first asterisk
            for ($i = 1; $i < count($diamond); $i++) {
                echo $diamond[$i] . "<br>";
            }
            ?>
        </div>
    </div>  

</body>
</html>
