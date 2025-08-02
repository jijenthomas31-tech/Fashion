<?php
@include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $amount = $_POST['amount'];
    $method = $_POST['method'];
    $upi = isset($_POST['upi_id']) ? $_POST['upi_id'] : null;

    if ($method == "gpay" && empty($upi)) {
        echo "<script>alert('UPI ID is required for Google Pay payments.'); window.history.back();</script>";
        exit();
    }

    // Insert into database
    $insert = mysqli_query($conn, "INSERT INTO payments (name, amount, method, upi_id) VALUES ('$name', '$amount', '$method', '$upi')");

    if ($insert) {
        echo "<script>
            alert('Payment done successfully!');
            window.location.href = 'order_success.php';
        </script>";
    } else {
        echo "<script>
            alert('Error saving payment data.');
            window.history.back();
        </script>";
    }
} else {
    echo "<script>
        alert('No data submitted.');
        window.history.back();
    </script>";
}
?>
