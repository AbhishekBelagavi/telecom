<?php
include './config/config.php';
// Function to validate login
function validateLogin($conn, $username, $password)
{
	$stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
	$stmt->bind_param("s", $username);
	$stmt->execute();

	$result = $stmt->get_result();
	$user = $result->fetch_assoc();

	if ($user && password_verify($password, $user['password'])) {
		return $user;
	} else {
		return false;
	}
}

session_start(); // Start a new session or resume the existing session

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (isset($_POST["login"])) {
		// Login validation
		$username = $_POST["username"];
		$password = $_POST["password"];

		$user = validateLogin($conn, $username, $password);

		if ($user) {
			// Set session variables
			$_SESSION["user_id"] = $user["id"];
			$_SESSION["username"] = $user["username"];

			// Redirect to a dashboard or home page
			header("Location: landing.php");
			exit();
		} else {
			// Invalid credentials
			echo "Invalid username or password";
		}
	}
}

$conn->close();
?>

<!doctype html>
<html lang="en">

<head>
	<title>Login </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="./login-form/css/style.css">
	<style>
		html,
		body {
			height: 100%;
			margin: 0;
			padding: 0;
		}

		body.img {
			background-image: url(./login-form/images/main.png);
			background-size: cover;
			height: 100%;
		}

		.ftco-section {
			background-size: cover;
		}

		.form-control {

			background: rgb(28 21 46 / 80%);
		}
	</style>
	</style>
</head>

<body class="img js-fullheight" ">
	<section class=" ftco-section">
	<div class="container">
		<!-- <div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login #10</h2>
				</div>
			</div> -->
		<div class="row justify-content-center">
			<div class="col-md-6 col-lg-4">
				<div class="login-wrap p-0">
					<h3 class="mb-4 text-center">Have an account?</h3>
					<form action="#" class="signin-form" method="post">
						<div class="form-group">
							<input type="text" class="form-control" name="username" placeholder="Email" required>
						</div>
						<div class="form-group">
							<input id="password-field" type="password" class="form-control" name="password" placeholder="Password" required>
							<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
						</div>
						<div class="form-group">
							<button type="submit" class="form-control btn btn-primary submit px-3" name="login">Sign In</button>
						</div>
						<div class="form-group d-md-flex">
							<div class="w-50">
								<label class="checkbox-wrap checkbox-primary">Remember Me
									<input type="checkbox" checked>
									<span class="checkmark"></span>
								</label>
							</div>

						</div>
					</form>
					<p class="w-100 text-center">&mdash; Don't have an account? &mdash;</p>
					<div class="social d-flex text-center">
						<a href="register.php" class="px-2 py-2 ml-md-1 rounded">Register</a>
						<!-- <a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Twitter</a> -->
					</div>
				</div>
			</div>
		</div>
	</div>
	</section>

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>