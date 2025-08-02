<?php include 'session.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

<div class="navbar">
        <div class="navicon">
        <img src="images/logo.png" alt="logo">
        <h1><span>VESTERIA </span><br>FASHION STORE<br></h1>
        </div>
        <button class="toggle-btn" id="toggleBtn">
            <i class="fa-solid fa-bars"></i>
        </button>


    <div class="nav" id="navLinks">
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="service.php">Services</a></li>
                <li><a href="catalogue.php">Catalogue</a></li>
                <li><a href="owner.php">Owner</a></li>
                <li><a href="blog.php">Blogs</a></li>
                <li><a href="feedback.php">Feedback</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="signup.php">Signup</a></li>
                <li id="logout-btn" style="opacity: 0;">
            <a href="logout.php">Logout</a>
        </li>
            </ul>
        </nav>
    </div>
    </div>

<div class="pro">
    <h1>Our Products</h1>
    <div class="product-container">
        <?php
        @include 'config.php';
        $select_products = mysqli_query($conn, "SELECT * FROM products");

        // Check if there are products in the database
        if (mysqli_num_rows($select_products) > 0) {
            while ($row = mysqli_fetch_assoc($select_products)) {
        ?>
        <div class="product-box">
            <!-- Display product image with alt attribute -->
            <img src="uploaded_img/<?php echo htmlspecialchars($row['image']); ?>" alt="<?php echo htmlspecialchars($row['name']); ?>">

            <!-- Display product name and description if available -->
            <h2><?php echo htmlspecialchars($row['name']); ?></h2>
            <p><?php echo isset($row['description']) ? htmlspecialchars($row['description']) : 'No description available'; ?></p>
            <p>Price: ₹<?php echo number_format($row['price'], 2); ?></p>

            <!-- Add to Cart Form -->
            <form action="cart.php" method="POST">
                <input type="hidden" name="product_id" value="<?php echo $row['id']; ?>">
                <input type="hidden" name="product_name" value="<?php echo htmlspecialchars($row['name']); ?>">
                <input type="hidden" name="product_price" value="<?php echo $row['price']; ?>">
                <input type="hidden" name="product_image" value="<?php echo $row['image']; ?>">
                <button type="submit" class="add-to-cart" name="add_to_cart">Add to Cart</button>
            </form>
        </div>
        <?php 
            }
        } else { 
            echo "<p>No products available</p>";
        } 
        ?>
    </div>
</div>



<div class="footer">
        <div class="fpara1">
            <p>Welcome to Vesteria Fashion Store – your destination for timeless fashion and modern trends 👗✨. We believe style is a way to express your personality with confidence. Whether you're dressing up or keeping it casual, our curated collections are made to make you feel your best. Thank you for choosing Vesteria to be part of your fashion journey. For any support or queries, feel free to contact us 📩. Follow us on social media for the latest drops, styling tips, and exclusive offers. Stay stylish, stay original – stay Vesteria 🛍️.</p>
            <p><i class="fa-solid fa-location-dot"></i> Maharashtra, India</p>
            <p><i class="fa-solid fa-phone"></i> +(91) 0000000000</p>
        </div>

        <div class="fpara2">
            <h3>Usefull Links</h3>
            <li><a href="home.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="service.php">Services</a></li>
                <li><a href="catalogue.php">Catalogue</a></li>
                <li><a href="owner.php">Owner</a></li>
                <li><a href="blog.php">Blogs</a></li>
                <li><a href="feedback.php">Feedback</a></li>
                <li><a href="contact.php">Contact</a></li>
        </div>

        <div class="fpara3">
            <h3>Explore</h3>
            <li><a href="#">Our Products</a></li>
            <li><a href="#">Our Services</a></li>
            <li><a href="#">Owner</a></li>
        </div>

        <div class="fpara4">
            <h3>Contact</h3>
            <p><i class="fa-solid fa-location-dot"></i> Maharashtra, India</p>
            <p><i class="fa-solid fa-phone"></i> +(91) 0000000000</p>
        </div>

        
    </div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const userLoggedIn = sessionStorage.getItem("loggedIn");
        const logoutBtn = document.getElementById("logout-btn");

        if (userLoggedIn) {
            logoutBtn.style.opacity = "1";
        }

        document.getElementById("toggleBtn").addEventListener("click", () => {
            const navLinks = document.getElementById("navLinks");
            navLinks.querySelector("ul").classList.toggle("show");
        });
    });


    
    

</script>
</body>
</html>