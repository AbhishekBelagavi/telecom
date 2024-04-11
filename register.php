<?php
include './config/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["register"])) {
    $email = $_POST["Email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $fullname = $_POST["Fullname"];
    $phone = $_POST["phone"];
    $telecomProvider = isset($_POST["telecomProvider"]) ? $_POST["telecomProvider"] : "";

    $stmt = $conn->prepare("INSERT INTO users (username, password, full_name, phone, telecom_provider) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $email, $password, $fullname, $phone, $telecomProvider);

    if ($stmt->execute()) {
        header("Location: login.php");
        exit();
    } else {
        echo "Registration failed: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>



<!doctype html>
<html lang="en">

<head>
    <title>Register</title>
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

        .ftco-section {
            padding: 1em 0;
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
        .form-group input[type="password"],
        .form-group input[type="tel"] {
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
                        <h3 class="mb-4">Create an account</h3>
                        <form action="#" class="signup-form" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" name="Email" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="Fullname" placeholder="Full Name" required>
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" name="phone" placeholder="Phone Number" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="address" placeholder="Location" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="telecomProvider" placeholder="Telecom Provider">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Register</button>
                            </div>
                        </form>
                        <p class="text-center">Already have an account? <a href="login.php">Login</a></p>
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
