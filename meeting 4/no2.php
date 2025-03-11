<?php

?>
<!DOCTYPE html>
<html>
    <head>
        <title>average</title>
    </head>
    <body>
        <form method="post" action="">
            <label for="numbers">Enter numbers (comma separated):</label>
            <input type="text" id="numbers" name="numbers" required>
            <input type="submit" value="Calculate">
        </form>
        <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numbers = explode( separator: ",", string: $_POST['numbers']);
            $sum = 0;
            $count = 0;
            foreach ($numbers as $number) {
                $sum += $number;
                $count++;
            }
            $average = $sum / $count;
            echo "Average: $average";
        }
        ?>
    </body>