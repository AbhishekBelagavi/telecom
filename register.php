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
        // echo "Registration successful";
        header("Location: login.php");

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
        .ftco-section {
            padding: 1em 0;
        }

        .form-control {

            background: rgb(28 21 46 / 80%);
        }
    </style>
</head>

<body class="img js-fullheight" style="background-image: url(./login-form/images/main.png); background-size: cover;">
    <section class="ftco-section">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <h3 class="mb-4 text-center">Create an account</h3>
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
                                <button type="submit" class="form-control btn btn-primary submit px-3" name="register">Register</button>
                            </div>
                        </form>
                        <p class="w-100 text-center">&mdash; Already have an account? &mdash;</p>
                        <div class="social d-flex text-center">
                            <a href="login.php" class="px-2 py-2 ml-md-1 rounded">Login</a>
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