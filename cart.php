<?php
session_start();
@include 'config.php';

// Add product to cart
if (isset($_POST['add_to_cart'])) {
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];

    $cart_item = [
        'id' => $product_id,
        'name' => $product_name,
        'price' => $product_price,
        'image' => $product_image,
        'quantity' => 1
    ];

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }
    
    $found = false;
    foreach ($_SESSION['cart'] as &$item) {
        if ($item['id'] == $product_id) {
            $item['quantity']++;
            $found = true;
            break;
        }
    }
    
    if (!$found) {
        $_SESSION['cart'][] = $cart_item;
    }
}

// Remove item from cart
if (isset($_GET['remove'])) {
    $remove_id = $_GET['remove'];
    foreach ($_SESSION['cart'] as $key => $item) {
        if ($item['id'] == $remove_id) {
            unset($_SESSION['cart'][$key]);
        }
    }
    $_SESSION['cart'] = array_values($_SESSION['cart']);
}

// Update quantity
if (isset($_POST['update_quantity'])) {
    $updated_quantity = $_POST['quantity'];
    $product_id = $_POST['product_id'];
    foreach ($_SESSION['cart'] as &$item) {
        if ($item['id'] == $product_id) {
            $item['quantity'] = $updated_quantity;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f8f8f8;
        }
        .cart-container {
            width: 80%;
            margin: 20px auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        .checkout-btn {
            display: inline-block;
            padding: 10px 20px;
            background: #28a745;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h1>Your Shopping Cart</h1>
    <div class="cart-container">
        <table>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Action</th>
            </tr>
            <?php
            $total = 0;
            if (!empty($_SESSION['cart'])) {
                foreach ($_SESSION['cart'] as $item) {
                    echo "<tr>
                        <td><img src='uploaded_img/{$item['image']}' width='50'></td>
                        <td>{$item['name']}</td>
                        <td>₹{$item['price']}</td>
                        <td>
                            <form action='' method='POST'>
                                <input type='number' name='quantity' value='{$item['quantity']}' min='1'>
                                <input type='hidden' name='product_id' value='{$item['id']}'>
                                <input type='submit' name='update_quantity' value='Update'>
                            </form>
                        </td>
                        <td><a href='cart.php?remove={$item['id']}'>Remove</a></td>
                    </tr>";
                    $total += $item['price'] * $item['quantity'];
                }
                echo "<tr>
                        <td colspan='3'><strong>Total:</strong></td>
                        <td colspan='2'><strong>₹$total</strong></td>
                    </tr>";
            } else {
                echo "<tr><td colspan='5'>Your cart is empty</td></tr>";
            }
            ?>
        </table>
        <br>
        <?php if (!empty($_SESSION['cart'])) { ?>
            <a href="check.php" class="checkout-btn">Proceed to Checkout</a>
        <?php } ?>
    </div>
</body>
</html>
