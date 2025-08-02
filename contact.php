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


	<div class="contact">
		<div class="contact1">
			<img src="images/contact.png">
			<div class="cpara">
				<div class="c">
					<i class="fa-solid fa-location-dot"></i>
					<h2>Address:-</h2>
					<p>Shop no 10, Washington blg, Evershine, Vasai East</p>
				</div>
				<div class="c">
					<i class="fa-solid fa-phone"></i>
					<h2>Phone No.:-</h2>
					<p>+91 0000000000</p>
				</div>
				<div class="c">
					<i class="fa-solid fa-envelope"></i>
					<h2>Email Id:-</h2>
					<p><a href="vesteria@gmail.com">vesteria@gmail.com</a></p>
				</div>
			</div>
		</div>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60220.97189718195!2d72.77970795100528!3d19.377345763671002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7ae956bc1587b%3A0x864f53a94baa5145!2sVasai-Virar%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1744886427447!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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