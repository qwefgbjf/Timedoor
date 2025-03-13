<?php
session_start();

class Person {
    public $name;
    public $age;

    public function __construct($name = "Unknown", $age = 0) {
        $this->name = $name;
        $this->age = $age;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function getName() {
        return "My name is {$this->name}";
    }

    public function getAge() {
        return "I am {$this->age} years old.";
    }

    public function intro() {
        return "My name is {$this->name} and I am {$this->age} years old.";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["person_submit"])) {
    $_SESSION["person"] = new Person(htmlspecialchars($_POST["name"]), (int)$_POST["age"]);
}

$person = isset($_SESSION["person"]) ? $_SESSION["person"] : new Person();

class Product {
    public $name;
    public $price;
    public $quantity;

    public function __construct($name = "Unknown", $price = 0, $quantity = 0) {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function setQuantity($quantity) {
        $this->quantity = $quantity;
    }

    public function getQuantity() {
        return "The product quantity is {$this->quantity}";
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function getName() {
        return "The product name is {$this->name}";
    }

    public function getPrice() {
        return "The product price is Rp" . number_format($this->price, 0, ',', '.');
    }

    public function calculateTotalPrice() {
        return "Total price: Rp" . number_format($this->price * $this->quantity, 0, ',', '.');
    }
}

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["pname"]) && isset($_GET["price"]) && isset($_GET["quantity"])) {
    $_SESSION["product"] = new Product(
        htmlspecialchars($_GET["pname"]),
        (float)$_GET["price"],
        (int)$_GET["quantity"]
    );
}

$product = isset($_SESSION["product"]) ? $_SESSION["product"] : new Product();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customizable Person & Product</title>
</head>
<body>
    <h2>Enter Your Details (Person)</h2>
    <form method="POST" action="">
        <label>Name:</label>
        <input type="text" name="name" value="<?php echo $person->name; ?>" required><br><br>

        <label>Age:</label>
        <input type="number" name="age" value="<?php echo $person->age; ?>" required><br><br>

        <input type="submit" name="person_submit" value="Update Person">
    </form>

    <h3>Person Details</h3>
    <p><?php echo $person->intro(); ?></p>

    <hr>

    <h2>Enter Product Details</h2>
    <form method="GET" action="">
        <label>Product Name:</label>
        <input type="text" name="pname" value="<?php echo $product->name; ?>" required><br><br>

        <label>Price:</label>
        <input type="number" name="price" step="0.01" value="<?php echo $product->price; ?>" required><br><br>

        <label>Quantity:</label>
        <input type="number" name="quantity" value="<?php echo $product->quantity; ?>" required><br><br>

        <input type="submit" value="Update Product">
    </form>

    <h3>Product Information</h3>
    <p><?php echo $product->getName(); ?></p>
    <p><?php echo $product->getPrice(); ?></p>
    <p><?php echo $product->getQuantity(); ?></p>
    <p><strong><?php echo $product->calculateTotalPrice(); ?></strong></p>

</body>
</html>
122