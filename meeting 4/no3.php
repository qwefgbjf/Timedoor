<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Fibonaci</h2>
    <form method="post" action="">
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" required>
        <input type="submit" value="Check">
    </form>
    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = intval($_POST['number']);
        
        function fibonacci($n) {
            if ($n <= 1) {
                return $n;
            }
            return fibonacci($n - 1) + fibonacci($n - 2);
        }
        
        echo "Fibonacci: ";
        for ($i = 0; $i < $number; $i++) {
            echo fibonacci($i) . " ";
        }
    }
    ?>
</body>
</html>