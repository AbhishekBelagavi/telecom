<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./styles/othernav.css">

</head>

<body>
    <header class="header">
        <nav class="navbar">
            <ul class="nav-links">
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

        </nav>
    </header>
</body>

</html>