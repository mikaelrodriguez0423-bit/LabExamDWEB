<?php
include "includes/header.php"; //For inclue
//Variables
$username = 'Mikael Rodriguez';
$greeting = 'Hello, '. $username . '!';
$offer = [
    [$Item = 'Bibingka'],
    [$Quantity = 7],
    [$Price = 60],
    [$discount = 45]
];
$usual_price = $Quantity * $Price;
$offer_price = $Quantity * $discount;
$saving = $usual_price - $offer_price;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta a href>
    <title>Mang Gusting Product</title>
</head>
<body>
    <h2><?php echo 'Paskong Pinoy Special Offer';?></h2>
    <p><?php echo $greeting;?></p>
    <p>We have a new offer for our BIBINGKA NI MANG GUSTING! <br>If you get <?php echo $Quantity ?> pieces of <?php echo $Item ?> it will now be discounted to $<?php echo $offer_price ?>!!</p>
    <p>Time is running out! Buy now! (ususal price <?php echo $usual_price?>)</p>
    <div class = "button">You can save <?php echo $saving?></div>

</body>
</html>
<?php include "includes/footer.php";?>