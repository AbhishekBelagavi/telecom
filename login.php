<?php
include './config/config.php';

function validateLogin($conn, $username, $password) {
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

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $user = validateLogin($conn, $username, $password);

    if ($user) {
        $_SESSION["user_id"] = $user["id"];
        $_SESSION["username"] = $user["username"];
        header("Location: landing.php");
        exit();
    } else {
        echo "Invalid username or password";
    }
}

$conn->close();
?>


<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./login-form/css/style.css">

    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('./login-form/images/main.png');
            background-size: cover;
            font-family: 'Lato', sans-serif;
        }
		.bg-image {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('./login-form/images/main.png');
            background-size: cover;
            filter: blur(3px); /* Adjust the blur amount as needed */
            z-index: -1; /* Ensure the background image is behind other content */
        }

        .ftco-section {
            padding: 10em 0;
        }

        .login-wrap {
            background: rgba(28, 21, 46, 0.8);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
        }

        .login-wrap h3 {
            color: #fff;
            text-align: center;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group input[type="text"],
        .form-group input[type="password"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background: rgba(255, 255, 255, 0.2);
            color: #fff;
            outline: none;
        }

        .form-group input::placeholder {
            color: #ddd;
        }

        .form-group .btn-primary {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background: #3d6deb;
            color: #fff;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .form-group .btn-primary:hover {
            background: #345ec3;
        }

        .text-center {
            text-align: center;
            color: #fff;
        }

        .social {
            margin-top: 20px;
        }

        .social a {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .social a:hover {
            color: #345ec3;
        }
		
    </style>
</head>

<body>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap">
                        <h3 class="mb-4">Have an account?</h3>
                        <form action="#" class="signin-form" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" name="username" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Sign In</button>
                            </div>
                        </form>
                        <p class="text-center">&mdash; Don't have an account? &mdash;</p>
                        <div class="social d-flex text-center">
                            <a href="register.php" class="px-2 py-2 ml-md-1 rounded">Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="./login-form/js/jquery.min.js"></script>
    <script src="./login-form/js/popper.js"></script>
    <script src="./login-form/js/bootstrap.min.js"></script>
    <script src="./login-form/js/main.js"></script>
</body>

</html>