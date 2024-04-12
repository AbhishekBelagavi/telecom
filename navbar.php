<?php
session_start(); // Start a new session or resume the existing session

// Check if the user is logged in
if (isset($_SESSION['user_id'])) {
    $username = $_SESSION['username'];
    $loginButtonText = "Welcome, $username";
    $loginButtonLink = "#"; // Link to the user profile or dashboard page
} else {
    $loginButtonText = "Sign In";
    $loginButtonLink = "login.php";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="./styles/othnav.css"> -->
    
    <style>
     
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            width: 100%;
            background: white;
            position: relative;
            font-family: roboto, sans-serif;
            margin: 0;
            /* height: 180vh; */
        }

        nav {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .navbar {
            width: 100%;
            height: 80px;
            position: fixed;
            top: 0;
            left: 0;
            padding: 0 4%;
            background: #0f1a31;
            z-index: 9;
            display: flex;
            align-items: center;
        }

        .nav-links {
            margin-top: 10px;
            display: flex;
            list-style: none;
        }

        .nav-items {
            text-decoration: none;
            margin-left: 20px;
            text-transform: capitalize;
            color: crimson;
            opacity: 0.9;
        }

        .right-container {
            display: block;
            margin-left: auto;

        }

        nav ul li {
            display: inline-block;
            list-style: none;
            margin: 10px 20px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 18px;
            position: relative;
        }

        nav ul li a::after {
            content: '';
            width: 0;
            height: 3px;
            background: #ff004f;
            position: absolute;
            left: 0;
            bottom: -6px;
            transition: 0.5s;
        }

        nav ul li a:hover::after {
            width: 100%;
        }

        .search-box {
            border: none;
            border-bottom: 1px solid #aaa;
            background: transparent;
            outline: none;
            color: black;
            width: 250px;
            text-transform: capitalize;
            font-size: 16px;
            font-weight: 500;
            transition: 0.5s;

        }

        .search-box:focus {
            width: 300px;
            border-color: #1f80e0;
        }

        .search-button {
            background-color: rgb(230, 225, 225);
            color: #161010;
            border: none;
            padding: 1px 4px;
            cursor: pointer;
            font-size: 14px;
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;

        }

        .searchForm {
            background-color: rgb(230, 225, 225);
            padding: 8px;
            border-radius: 25px;

        }

        .dropdown {
            position: relative;
            display: inline-block;

        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .show {
            display: block;
        }
    
        .nav-links2 {
            margin-top: 10px;
            margin-left: 1%;
            display: flex;
            list-style: none;
        }

        .navbar {
            width: 100%;
            height: 80px;
            position: fixed;
            top: 0;
            left: 0;
            padding: 0 2%;
            background: #0f1a31;
            z-index: 9;
            display: flex;
            align-items: center;
            border-bottom: 2px solid red;
        }
        .nav-items.active {
            color: red; /* Change color as per your preference */
            /* Add other styles to highlight the active button */
            /* Example: background-color, border, etc. */
        }
    </style>
</head>

<body>
    <header class="header">
        <nav class="navbar">
            <ul class="nav-links">
                <li class="menu_item"><a class="menu_link" href="landing.php"><i class="fa fa-home"></i></a></li>
                <li class="nav-items"><a href="airtel.php">Airtel</a></li>
                <li class="nav-items"><a href="jio.php">Jio</a></li>
                <li class="nav-items"><a href="vi.php">VI</a></li>
                <li class="nav-items"><a href="bsnl.php">Bsnl</a></li>
            </ul>
            <div class="right-container">
                <div class="dropdown" onclick="toggleDropdown()">
                    <form class="searchForm" onsubmit="return performSearch()">
                        <input type="text" class="search-box" id="searchInput" name="search" placeholder="search">
                        <button type="submit" class="search-button"><i class="fa fa-search" style="font-size:24px"></i></button>
                    </form>
                    <div id="dropdownContent" class="dropdown-content">
                        <a href="#" onclick="selectOption('Data')">Data</a>
                        <a href="#" onclick="selectOption('Truly Unlimited')">Truly Unlimited</a>
                        <a href="#" onclick="selectOption('Talktime')">Talktime</a>
                        <a href="#" onclick="selectOption('International')">International Roaming</a>
                        <a href="#" onclick="selectOption('Plan')">Plan Vouchers</a>
                        <a href="#" onclick="selectOption('Voice')">Voice Vouchers</a>
                        <a href="#" onclick="selectOption('TopUp')">TopUp</a>
                        <a href="#" onclick="selectOption('Popular Plans')">Popular Plans</a>
                        <a href="#" onclick="selectOption('JioPhone')">Jio Phone</a>
                    </div>
                </div>
            </div>
            <ul class="nav-links2">
            <li class="nav-items"><a href="<?php echo $loginButtonLink; ?>"><?php echo $loginButtonText; ?></a></li>
            </ul>

        </nav>
    </header>

    <script src="search.js"></script>
    <script>
        function toggleDropdown() {
            var dropdownContent = document.getElementById("dropdownContent");
            dropdownContent.classList.toggle("show");
        }

        function selectOption(option) {
            document.getElementById("searchInput").value = option;
            var dropdownContent = document.getElementById("dropdownContent");
            dropdownContent.style.display = "none";
        }

    </script>
</body>

</html>