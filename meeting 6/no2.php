<?php 
class vehicle{
    private $name;
    private $price;
    private $quantity;

    public function __construct($name = "Unknown", $price = 0, $quantity = 0){
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function setQuantity($quantity){
        $this->quantity = $quantity;
    }

    public function getQuantity(){
        return "The product quantity is {$this->quantity}";
    }

    public function setName($name){
        $this->name = $name;
    }

}
class car extends vehicle{

    public
    public function intro(){
        return "The car name is {$this->name}";
    }
}
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