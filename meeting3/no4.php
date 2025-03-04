<?php
$original_price = 100;
$discount_percentage = 20; 

$discount_amount = ($original_price * $discount_percentage) / 100;
$final_price = $original_price - $discount_amount;

echo "Original Price: $$original_price<br>";
echo "Discount Percentage: $discount_percentage%<br>";
echo "Discount Amount: $$discount_amount<br>";
echo "Final Price after Discount: $$final_price";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>