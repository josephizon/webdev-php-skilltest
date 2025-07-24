<?php
session_start();

//stack initialization
if (!isset($_SESSION['stack'])) {
    $_SESSION['stack'] = [];
}

// push value into stack
function push($value) {
    $_SESSION['stack'][] = $value;
}

// manual pop function to remove most recent value from stack
function pop() {
    $lastIndex = count($_SESSION['stack']) - 1;
    if ($lastIndex >= 0) {
        unset($_SESSION['stack'][$lastIndex]);
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
    <title> Joseph Raymund F. Izon | P2E3</title>    
    <link rel="stylesheet" href="../stylesheet.css">
</head>

<body>
    <?php include '../header.php';?>

    <h1>Part 2 Exercise 3</h1>

    <div class="container">
        <h2 style="display: inline; margin-right: 10px;">TASK 3:</h2>
        <p style="display: inline;">Create a stack of integers using arrays( First in last out ).
        <p> ○ Create input fields and push a button to insert a new value. </p>
        <p> ○ Create a pop button to remove the top value. </p>
        <p> ○ Always display the existing stack content. </p>
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
            <h3>Current Stack (Last In First Out - LIFO Simulation):</h3>
            <?php
            // prints out each item on the stack of the currente session
            foreach (array_reverse($_SESSION['stack']) as $item) {
                echo "<div>$item</div>";
            }
            
            if (empty($_SESSION['stack'])) {
                echo "<div>Stack is empty</div>";
            }
            ?>
        </div>

    </div>

    

</body>
</html>



