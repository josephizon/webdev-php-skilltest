<?php
// function generates grid based from input of rows and cols
// randomizer uses the array $consonants to choose a random one
function generateGrid($rows, $cols) {
    $consonants = str_split('bcdfghjklmnpqrstvwxyz');

    echo "<table style='margin-top:50px;'>";
    
    for ($i = 0; $i < $rows; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $cols; $j++) {
            $char = $consonants[array_rand($consonants)];
            echo "<td>$char</td>";
        }   
        echo "</tr>";
    }

    echo "</table>";
}
?>

<!DOCTYPE html>
<html>

<head>
    <title> Joseph Raymund F. Izon | P2E5</title>    
    <link rel="stylesheet" href="../stylesheet.css">
</head>

<body>
    <?php include '../header.php';?>

    <h1>Part 2 Exercise 5</h1>

    <div class="container">
        <h2 style="display: inline; margin-right: 10px;">TASK 5:</h2>
        <p style="display: inline;">Using a PHP POST method, ask the user to input 2 numbers.
        <p> ○ Create a Grid using 2 inputs as the length and width. </p>
        <p> ○ Insert random CONSONANT letters into the grid. </p>
        <p> ○ Display the grid in table. </p>
    </div>

    <div class="container">
            
        <h2> OUTPUT </h2>

        <div>
            <form method="post">
                <label>Rows:</label>
                <input type="number" name="rows" min="1" style="width:4rem;">
                <label>Columns:</label>
                <input type="number" name="cols" min="1" style="width:4rem;">
                <button class="button-push" type="submit" name="generate">Generate Grid</button>
                <button class="button-pop" type="submit" name="reset">Clear Grid</button>
            </form>
        </div>

        <div>
            <?php
        
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['generate'])  && isset($_POST['cols'])) {
                $rows = (int)$_POST['rows'];
                $cols = (int)$_POST['cols'];
                generateGrid($rows, $cols);

                if ($rows == 0 && $cols == 0) {
                    echo "<h2 style='margin-top:50px;'> You did not input a number! </h2>";
                }
            }
            elseif (isset($_POST['reset'])) {
                $rows = 0;
                $cols = 0;
                echo "<h2 style='margin-top:50px;'> You have cleared the grid! </h2>";
            }
            ?>
        </div>
        

    

    </div>

    

</body>
</html>



