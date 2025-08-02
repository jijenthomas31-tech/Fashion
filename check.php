<?php
session_start();
@include 'config.php';

$total_amount = 0;

// Check if the cart exists
if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    // Calculate total amount based on cart items
    foreach ($_SESSION['cart'] as $item) {
        $total_amount += $item['price'] * $item['quantity'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <style>
        body {
            font-family: Arial;
            background-color: #f2f2f2;
            padding: 20px;
        }

        .payment-container {
            max-width: 500px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .section {
            margin-bottom: 25px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .btn {
            display: block;
            width: 100%;
            background-color: #00c853;
            color: white;
            padding: 10px;
            margin-top: 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }

        .btn:hover {
            background-color: #00a846;
        }

        .cod-btn {
            background-color: #ffa726;
        }

        .cod-btn:hover {
            background-color: #fb8c00;
        }
    </style>
</head>
<body>

<div class="payment-container">
    <h2>Choose Payment Method</h2>

    <?php if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])): ?>
        <div class="section">
            <p><strong>Total Payment Amount:</strong> ₹<?= $total_amount; ?></p>
        </div>

        <!-- Google Pay Section -->
        <form action="checkout.php" method="POST">
            <input type="hidden" name="total_amount" value="<?= $total_amount; ?>">
            <input type="hidden" name="method" value="gpay">

            <label for="upi_id">Enter your UPI ID</label>
            <input type="text" name="upi_id" placeholder="yourupi@bank" required>

            <input onclick="alert('Payment Option Selected Successfully!')" type="submit" class="btn" value="Pay with Google Pay">
        </form>

        <!-- Cash on Delivery Section -->
        <form onsubmit="handleCOD(event)">
            <input type="hidden" name="total_amount" value="<?= $total_amount; ?>">
            <input type="hidden" name="method" value="cod">
            <button type="submit" class="btn cod-btn">Cash on Delivery</button>
        </form>

    <?php else: ?>
        <p>Your cart is empty. Please add items to your cart first.</p>
    <?php endif; ?>
</div>

<script>
    function handleCOD(event) {
        event.preventDefault();
        alert("Payment Option Selected Successfully!");
        window.location.href = "checkout.php";
    }
</script>

</body>
</html>
