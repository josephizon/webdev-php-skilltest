<?php
function bubbleSort($lists) {
    $length = count($lists);
    for ($parent = 0; $parent < $length; $parent++) {
        for ($child = 0; $child < $length - $parent - 1; $child++) {
            if ($lists[$child] > $lists[$child + 1]) {
                $temp = $lists[$child];
                $lists[$child] = $lists[$child + 1];
                $lists[$child + 1] = $temp;
            }
        }
    }

    return $lists;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title> Joseph Raymund F. Izon | P2E6</title>    
    <link rel="stylesheet" href="../stylesheet.css">
</head>

<body>
    <?php include '../header.php';?>

    <h1>Part 2 Exercise 6</h1>

    <div class="container">
        <h2 style="display: inline; margin-right: 10px;">TASK 6:</h2>
        <p style="display: inline;">Fix the code function to output the correct result. Explain your answer.
    </div>

    <div class="container">
            
        <h2> OUTPUT </h2>

         <div>
            <form method="post">
                <label for="numbers">ENTER NUMBERS (separated by comma):</label>
                <input type="text" name="numbers" placeholder="e.g. 5, 10, 1, 30, 79, 24" style="width: 250px;">
                <button class="button-push" type="submit" >Sort</button>
            </form>
        </div>

        <div>
            <?php
            if (isset($_POST['numbers'])) {
                $input = $_POST['numbers'];

                // convert string into array of strings separated by commas then convert each string to int 
                $array = array_map('intval', explode(',', $input));

                if(count($array) > 1) {
                    $sortedArray = bubbleSort($array);
                    echo "<h2>". implode(", ", $sortedArray) . "</h2>";
                }

                else {
                    echo "<h2>". "Please input more than 1 number." . "</h2>";
                }

            } 
            
            else {
                echo "<h2>". "Please enter numbers to sort." . "</h2>";
            }
            ?>
        </div>
    </div>

    <div class="container">
        <h2> EXPLANATION </h2>
        <p> The first thing I noticed upon checking the code is that their is no return statement. This causes the function to return nothing
            which makes it unusable when called.
        </p>
        <p>
            Additionally, the swapping logic is faulty as the code stores the smaller number instead of the 
            larger number. With this, when the value in the right is duplicated to the left, we end up with the same value which was supposed to
            replace the value on the right as the original value was not stored. The fix here was simple as we just had to remove the + 1 in setting the value of 
            $temp in order to store the original value on the left. 
        </p>
    </div>

    

</body>
</html>



