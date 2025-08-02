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


	<div class="about">
		<div class="about1">
		<div class="aimg"><img src="images/about.png"></div>
		<p>Welcome to Vesteria Fashion Store, where fashion meets individuality. At Vesteria, we believe that style is more than just the clothes you wear – it’s a reflection of who you are. Our mission is simple: to help you express your unique personality through carefully curated fashion that blends quality, comfort, and trend.Founded with a passion for self-expression and creativity, Vesteria offers a wide range of styles to suit every mood, moment, and season. Whether you're dressing up for a special event or keeping it casual for everyday wear, we’re here to make sure you always look and feel your best.We handpick each item in our collection with love and attention to detail, focusing on the latest trends, timeless classics, and wardrobe essentials. From chic dresses and stylish tops to cozy loungewear and elegant accessories, our goal is to provide fashion that fits effortlessly into your life.At Vesteria, customer happiness is at the heart of everything we do. We’re committed to offering not just great products, but a seamless shopping experience – from browsing our website to receiving your order at your doorstep. Our team is always here to help with any questions, styling advice, or support you need.We are more than just a fashion store – we’re a community of style lovers, trendsetters, and confident individuals who know that fashion is a journey, not a destination. Join us as we continue to grow, evolve, and inspire confidence through clothing.</p>
	    <h4>Thank you for choosing Vesteria Fashion Store. Let’s make every day a stylish one.</h4>
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