<?php
$radius = 25;
$pi = 3.14;
$area = $pi * $radius ** 2;
$celcius = 32;
$fahrenheit = ($celcius * 9/5) + 32;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduction</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h1 {
            margin-bottom: 20px;
        }
        p {
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="container"></div>
        <h1>Introduction</h1>
        <p><strong>Radius:</strong> <?php echo $radius; ?></p>
        <p><strong>Area:</strong> <?php echo $area; ?></p>
    </div>
</body>
</html>