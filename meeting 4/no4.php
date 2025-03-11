<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>big number</h2>
    <form method="post" action="">
            <label for="numbers">Enter numbers (comma separated):</label>
            <input type="text" id="numbers" name="numbers" required>
            <input type="submit" value="Calculate">
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numbers = explode(",", $_POST['numbers']);
            $max = $numbers[0];
            foreach ($numbers as $number) {
                if ($number > $max) {
                    $max = $number;
                }
            }
            echo "Max: $max";
        }
    ?>
</body>
</html>