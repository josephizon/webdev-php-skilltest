<?php
session_start();

//queue initialization
if (!isset($_SESSION['queue'])) {
    $_SESSION['queue'] = [];
}

// push value into queue
function push($value) {
    $_SESSION['queue'][] = $value;
}

// manual pop function to remove first value placed
function pop() {
    if (!empty($_SESSION['queue'])) {

    // shift to the left by changing the value of the 1st number with the value of the number to its right
    for ($i = 0; $i < count($_SESSION['queue']) - 1; $i++) {
        $_SESSION['queue'][$i] = $_SESSION['queue'][$i + 1];
    }
    // remove most recent value placed as it has alr been duplicated
    unset($_SESSION['queue'][count($_SESSION['queue']) - 1]);
}
}

// check for post request via forms (similar to how react useEffect)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['push']) && $_POST['value'] !== '') {
        push($_POST['value']);
    } 
    
    elseif (isset($_POST['pop'])) {
        pop();
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title> Joseph Raymund F. Izon | P2E4</title>    
    <link rel="stylesheet" href="../stylesheet.css">
</head>

<body>
    <?php include '../header.php';?>

    <h1>Part 2 Exercise 4</h1>

    <div class="container">
        <h2 style="display: inline; margin-right: 10px;">TASK 4:</h2>
        <p style="display: inline;">Create a queue of integers using arrays (first in first out ).
        <p> ○ Create input fields and push a button to insert a new value. </p>
        <p> ○ Create a pop button to remove the old value. </p>
        <p> ○ Always display the existing queue content. </p>
        <p> ○ Do not use pre-defined PHP array functions like array_pop. </p>
    </div>

    <div class="container">
            
        <h2> OUTPUT </h2>
        <div>
            <form method="post">
                <input type="number" name="value" placeholder="ENTER VALUE">
                <button class="button-push" type="submit" name="push">PUSH</button>
                <button class="button-pop" type="submit" name="pop">POP</button>
            </form>
        </div>

        <div class="stack">
            <h3>Current queue (First In First Out - FIFO Simulation):</h3>
            <?php
            // prints out each item on the queue of the currente session
            foreach ($_SESSION['queue'] as $item) {
                echo "<div>$item</div>";
            }
            
            if (empty($_SESSION['queue'])) {
                echo "<div>Queue is empty</div>";
            }
            ?>
        </div>

    </div>

    

</body>
</html>



