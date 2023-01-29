
<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="index.css">
<link rel="stylesheet"
	href="https://fonts.googleapis.com/css?family=play">
<link rel="stylesheet"
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script
	src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script
	src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <a class="navbar-brand" href="cbithack.html"><img src="https://www.vhv.rs/dpng/d/592-5926368_anti-no-ragging-png-logo-design-free-downloads.png" style="width: 40mm"></a>
</head>
<body>
	<nav class="navbar navbar-light">
		<a class="navbar-brand" href="Home.html"><img
			src="images/atp3.jpg" style="width: 20mm"></a>
	</nav>

	<section id="welcome">
		<div class="container">
			<div class="welcome text-center wow fadeInUp ">
				<h1>Anti Ragging Portal</h1>
                <h1>sign-in Form</h1>
			</div>
		</div>
	</section>
	<br><br>
	
	<div class="signup">
		<form method="post" action="signup.php">
			<h2 style="color: white;">Sign Up</h2>
			<input id=name type="text" name="name" placeholder="Student Name" required><br>
			<br> +91<input id="phone_number" type="number" name="phone_number"
				placeholder="Student Phone Number" required><br> <br> <input
				id="email_ID" type="email" name="email_ID" placeholder="Email Address" required><br>
			<br> <input id="roll_number" type="number" name="roll_number" placeholder="Roll no 	" required><br>
			<br> <input id = "section" type="text" name="section" placeholder="section"
				required><br> <br> 
				
			 <input id ="password" type="password"
				name="password" placeholder="Password" required><br> <br>
			<input id ="confirm_password"type="password" name="confirm_password" placeholder="Confirm Password"
				required><br><br> <input type="submit" name="b1"
				value="signup"><br> <br> Already have account?<a
				href="login.html"
                

				style="text-decoration: none; font-family: 'play', san-serif; color: rgb(255, 255, 255);">Login</a>
		</form>
	</div>
</body>
</html>