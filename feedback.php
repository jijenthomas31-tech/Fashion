<?php include 'session.php'; ?>
<?php
include 'config.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $experience = $_POST["experience"];
    $comments = trim($_POST["comments"]);

    // Prepare insert
    $stmt = $conn->prepare("INSERT INTO feedback (name, email, experience, comments) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $experience, $comments);

    if ($stmt->execute()) {
        echo "<script>alert('Thanks for your feedback! 😊'); window.location.href='feedback.php';</script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>

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


	<div class="feed"><div class="feedback-container">
    <h2>💬 Feedback Form</h2>
    <form method="POST" action="feedback.php">
  <label for="name">Name</label>
  <input type="text" id="name" name="name" placeholder="Your Name" required>

  <label for="email">Email</label>
  <input type="email" id="email" name="email" placeholder="Your Email" required>

  <label for="experience">How was your shopping experience?</label>
  <select id="experience" name="experience" required>
    <option value="">Select</option>
    <option value="Excellent">Excellent 👍</option>
    <option value="Good">Good 🙂</option>
    <option value="Average">Average 😐</option>
    <option value="Poor">Poor 😞</option>
  </select>

  <label for="comments">Comments</label>
  <textarea id="comments" name="comments" rows="4" placeholder="We’d love to hear your thoughts..."></textarea>

  <button type="submit">Submit Feedback</button>
</form>

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