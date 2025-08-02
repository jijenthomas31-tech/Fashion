<?php include 'session.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>VESTERIA FASHION STORE</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
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


	<div class="services">
		<div class="sbox">
			<div class="box">
				<h1>👗</h1>
				<h2>Personal Styling Help</h2>
				<p>Expert advice to help you choose the perfect outfit for any occasion.</p>
			</div>

			<div class="box">
				<h1>🔁</h1>
				<h2>Easy Returns & Exchanges</h2>
				<p>Not happy with your order? No worries – simple and hassle-free return process. </p>
			</div>

			<div class="box">
				<h1>🛍️</h1>
				<h2>Curated Collections</h2>
				<p>Trendy and timeless pieces, handpicked to match your unique style. </p>
			</div>

			<div class="box">
				<h1>🚚</h1>
				<h2>Fast & Reliable Delivery</h2>
				<p>Get your fashion favorites delivered quickly and safely to your doorstep.</p>
			</div>

			<div class="box">
				<h1>💳</h1>
				<h2>Secure Online Payments</h2>
				<p>Shop with confidence using our safe and encrypted payment options. </p>
			</div>

			<div class="box">
				<h1>🎁</h1>
				<h2>Gift Cards & Offers</h2>
				<p>Surprise someone special or treat yourself with exclusive deals and gift cards. </p>
			</div>
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
            logoutBtn.style.opacity = "1"; // Show logout button if logged in
        }
    });
</script>

</body>
</html>