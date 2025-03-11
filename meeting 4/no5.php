<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>combine array</h2>
    <form method="post" action="">
        <label for="numbers1">Enter numbers 1 (comma separated):</label>
        <input type="text" id="numbers1" name="numbers1" required>
        <label for="numbers2">Enter numbers 2 (comma separated):</label>
        <input type="text" id="numbers2" name="numbers2" required>
        <input type="submit" value="Calculate">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numbers1 = explode(",", $_POST['numbers1']);
        $numbers2 = explode(",", $_POST['numbers2']);
        $combined = array_merge($numbers1, $numbers2);
        echo "Combined: ";
        foreach ($combined as $number) {
            echo $number . " ";
        }
    }
    ?>
</body>
</html>