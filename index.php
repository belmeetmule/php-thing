<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP tutorial</title>
</head>
<body>
<div>
    <h2> Pizza order calculator app</h2>
    <form action="index.php" method="post">
        <label for="quantity">Quantity</label> <br>
        <input type="text" name="quantity"> <br>
        <input type="submit" value="Order">
    </form>
</div>
    
</body>
</html>

<?php

$item= "pizza";
$price= 10;


if(empty($_POST["quantity"]))
    echo "Please enter a quantity"; 
else
{
    $quantity= (int)$_POST["quantity"];
    $total= $price * $quantity;
    echo "You ordered " . $quantity . " " . $item . "s <br>";
    echo "Total cost is " . " <strong>$ {$total} </strong> ". " <br>";
    echo "Thank you for ordering from us";
}
     
?>
