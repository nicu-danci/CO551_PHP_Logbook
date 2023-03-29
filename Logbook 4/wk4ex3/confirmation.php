<?php
  $qty = $_POST['selqty'];
  $size = $_POST['selsize'];
  $colour = $_POST['selcolour'];

  // Calculate price based on size
  switch($size)
   {
    case 'small':
      $price = 15.75;
      break;
    case 'medium':
      $price = 16.75;
      break;
    case 'large':
      $price = 17.75;
      break;
    case 'extra-large':
      $price = 18.75;
      break;
    default:
      $price = 0;
  }

  // Calculate total cost
  $total_cost = $qty * $price;
?>

<html>
<head>
   <title>Order Confirmation</title>
</head>
<body>
   <h2>Your order details:</h2>
   <p>Qty: <?php echo $qty; ?></p>
   <p>Size: <?php echo $size; ?></p>
   <p>Colour: <?php echo $colour; ?></p>
   <p>Total cost:<?php echo $total_cost; ?>
</body>
</html>