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


	<div class="blog">
		<div class="bg1">
			<div class="bg">
				<div class="bgimg">
				<img src="images/b1.jpg" alt=""></div>
				<div class="bgpara">
				<div class="bgi">
					<p><i class="fa-solid fa-user"></i> Style</p>
					<p><i class="fa-solid fa-calendar"></i> February 28, 2025</p>
				</div>
				<h2><a href="https://vo-theblogger.medium.com/12-most-popular-fashion-blogs-to-follow-in-2024-8ab0d552eb7b">In The Frow</a></h2>
				<p>Victoria Magrath's blog, In The Frow, showcases a blend of high-end and high-street fashion. She provides readers with in-depth reviews of designer collections, styling tips, and travel diaries. Her content is known for its polished photography and thoughtful commentary on fashion trends.​</p>
			</div>
			</div>

			<div class="bg">
				<div class="bgimg">
				<img src="images/b2.jpg" alt=""></div>
				<div class="bgpara">
				<div class="bgi">
					<p><i class="fa-solid fa-user"></i> Family</p>
					<p><i class="fa-solid fa-calendar"></i> January 15, 2025</p>
				</div>
				<h2><a href="https://vo-theblogger.medium.com/12-most-popular-fashion-blogs-to-follow-in-2024-8ab0d552eb7b">We Wore What</a></h2>
				<p>Danielle Bernstein's We Wore What offers a glimpse into contemporary fashion through her daily outfits, brand collaborations, and lifestyle content. Her blog is a go-to source for those looking to stay updated on the latest street style trends and fashion-forward looks.</p>
			</div>
			</div>

			<div class="bg">
				<div class="bgimg">
				<img src="images/b3.jpg" alt=""></div>
				<div class="bgpara">
				<div class="bgi">
					<p><i class="fa-solid fa-user"></i> Fashion</p>
					<p><i class="fa-solid fa-calendar"></i> February 10, 2025</p>
				</div>
				<h2><a href="https://vo-theblogger.medium.com/12-most-popular-fashion-blogs-to-follow-in-2024-8ab0d552eb7b">Hello Fashion</a></h2>
				<p>Christine Andrew's Hello Fashion combines personal style with family life, presenting readers with relatable fashion content. Her blog features outfit ideas, shopping guides, and insights into balancing fashion with everyday responsibilities.</p>
			</div>
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