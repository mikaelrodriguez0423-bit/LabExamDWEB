<?php
require "includes/header.php";
$name = "Mikael Rodriguez";
$greeting = "Welcome back to Mang Gusting KAKANIN, ". $name . "!";
$product = "Bibingka";
$cost = 45;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mang Gusting Product</title>
</head>
<body>
    <p><?php echo $greeting ?></p>
    <h2><?php echo $product?> DISCOUNTS</h2>
    <table>
        <tr>
            <th>Bibingka</th>
            <th>Price</th>
        </tr>
        <tr>
            <td>1 pieces</td>
            <td><?php echo $cost?></td>
        </tr>
        <tr>
            <td>2 pieces</td>
            <td><?php echo $cost * 2?></td>
        </tr>
        <tr>
            <td>3 pieces</td>
            <td><?php echo $cost * 3?></td>
        </tr>
        <tr>
            <td>4 pieces</td>
            <td><?php echo $cost * 4?></td>
        </tr>
        <tr>
            <td>5 pieces</td>
            <td><?php echo $cost * 5?></td>
        </tr>
        <tr>
            <td>6 pieces</td>
            <td><?php echo $cost * 6?></td>
        </tr><tr>
            <td>7 pieces</td>
            <td><?php echo $cost * 7?></td>
        </tr>
        <tr>
            <td>8 pieces</td>
            <td><?php echo $cost * 8?></td>
        </tr>
        <tr>
            <td>9 pieces</td>
            <td><?php echo $cost * 9?></td>
        </tr>
        <tr>
            <td>10 pieces</td>
            <td><?php echo $cost * 10?></td>
        </tr>

    </table>
</body>
</html>
<?php include "includes/footer.php";?>