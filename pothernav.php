<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./styles/othnav.css">
    
    <style>
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
                <form class="searchForm" onsubmit="return performSearch()">
                    <input type="text" class="search-box" id="searchInput" name="search" placeholder="search">
                    <button type="submit" class="search-button"><i class="fa fa-search" style="font-size:24px"></i></button>
                </form>
            </div>
            <ul class="nav-links2">
                <li class="nav-items"><a href="airtel.php">Prepaid</a></li>
                <li class="nav-items"><a href="pfilter_result.php">Postpaid</a></li>
            </ul>

        </nav>
    </header>

    <script src="search.js"></script>
</body>

</html>