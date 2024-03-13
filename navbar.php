<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="./styles/navbar.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./styles/navbar1.css">
    <style>
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
            font-size: 14px;
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
            
        }

        .searchForm {
            background-color: rgb(230, 225, 225);
            padding: 8px;
            border-radius: 25px;
            margin-left: 49%;

        }
        a{
            text-decoration: none;
            color: white;

        }
    </style>
</head>

<body>
    <header class="header">
        <nav class="navbar">
            <ul class="nav-links">
                <li class="nav-items"><a href="#airtel">Airtel</a></li>
                <li class="nav-items"><a href="#jio">Jio</a></li>
                <li class="nav-items"><a href="#vi">VI</a></li>
                <li class="nav-items"><a href="#bsnl">Bsnl</a></li>
            </ul>
            <form class="searchForm" onsubmit="return performSearch()">
                <input type="text" class="search-box" id="searchInput" name="search" placeholder="search">
                <button type="submit" class="search-button"><i class="fa fa-search" style="font-size:24px"></i></button>
            </form>
            <div class="right-container">

                <button type="button" class="custom-btn"><a href="login.php">Sign In</a></button>


            </div>

        </nav>
    </header>

</body>

</html>