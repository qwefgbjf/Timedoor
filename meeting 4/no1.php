<?php
    if (isset($_GET['number'])) {
        $number = intval(  value: $_GET['number']);
        $isPrime = true;
        if ($number == 1) {
            $isPrime = false;
        } else {
            for ($i = 2; $i <= $number / 2; $i++) {
                if ($number % $i == 0) {
                    $isPrime = false;
                    break;
                }
            }
        }
        echo $isPrime ? "$number adalah bilangan prima" : "$number bukan bilangan prima";
    }
    ?>

<!DOCTYPE html>
<html>
<head>
    <title>Check Prime Number</title>
</head>
<body>
    <form method="get" action="">
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" required>
        <input type="submit" value="Check">
    </form>

    
</body>
</html>