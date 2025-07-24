<?php
function createTask() {
    $rows = 4;
    $col = 5;
    $letters = range('a', 'k');

    $mapping = [
        'a' => 0,
        'b' => 1,
        'c' => 2,
        'd' => 3,
        'e' => 4,
        'f' => 5,
        'g' => 6,
        'h' => 7,
        'i' => 8,
        'j' => 9,
        'k' => 10
    ];

    echo "<table>";
        
        //per row 
        for ($i = 0; $i < $rows; $i++) {
            echo "<tr>";

            //per column
            for ($j = 0; $j < $col; $j++) {
                $char = $letters[array_rand($letters)];
                $mappedNum = $mapping[$char];
                //checks if mappedNum is even, if even its classname becomes highlight 
                $class = ($mappedNum % 2 == 0) ? "highlight" : ""; 
                echo "<td class='$class'>" . $char . "</td>";
            }

            echo "</tr>";
        }

    echo "</table>";

}
?>

<!DOCTYPE html>
<html>

<head>
    <title> Joseph Raymund F. Izon | P2E1</title>    
    <link rel="stylesheet" href="../stylesheet.css">
</head>

<body>
    <?php include '../header.php';?>

    <h1>Part 2 Exercise 1</h1>

    <div class="container">
        <h2 style="display: inline; margin-right: 10px;">TASK 1:</h2>
        <p style="display: inline;">Generate a random character from a -k.
        <p> ○ Create a 4 x 5 table. </p>
        <p> ○ Display all the random characters inside the table. </p>
        <p> ○ Highlight all the character that belongs to the even column. </p>
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
