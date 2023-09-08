<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telecom Plans</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header class="header">
        <nav class="navbar">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Prepaid</a></li>
                <li><a href="#">Postpaid</a></li>
                <li><a href="#">Search</a></li>
                <li><a href="#">Filter</a></li>
            </ul>
        </nav>
    </header>

    <div class="main-content">
    <div class="filter-form">
    <h2>Filter Plans</h2>
    <form action="filter.php" method="POST">
        <div class="form-group">
            <label for="sim">Select SIM:</label>
            <select name="sim" id="sim">
                <option value="">All</option>
                <option value="Airtel">Airtel</option>
                <option value="Jio">Jio</option>
                <option value="BSNL">BSNL</option>
                <option value="Vi">Vi</option>
            </select>
        </div>
        <div class="form-group">
            <label for="price">Price Range:</label>
            <select name="price" id="price">
                <option value="">All</option>
                <option value="0-100">0 - 100</option>
                <option value="101-200">101 - 200</option>
                <option value="201-300">201 - 300</option>
                <!-- Add more price ranges as needed -->
            </select>
        </div>
        <div class="form-group">
            <label for="validity">Validity:</label>
            <select name="validity" id="validity">
                <option value="">All</option>
                <option value="7 Days">7 Days</option>
                <option value="28 Days">28 Days</option>
                <option value="84 Days">84 Days</option>
                <!-- Add more validity options as needed -->
            </select>
        </div>
        <div class="form-group">
            <label for="dataperday">Data Per Day:</label>
            <input type="number" name="dataperday" id="dataperday" min="0">
        </div>
        <div class="form-group">
            <label for="additionaldata">Additional Data:</label>
            <input type="number" name="additionaldata" id="additionaldata" min="0">
        </div>
        <div class="form-group">
            <label for="type">Type:</label>
            <select name="type" id="type">
                <option value="">All</option>
                <option value="3G">3G</option>
                <option value="4G">4G</option>
                <option value="5G">5G</option>
                <!-- Add more type options as needed -->
            </select>
        </div>
        <div class="form-group">
            <button type="submit">Apply Filter</button>
        </div>
    </form>
</div>

    </div>

    <footer class="footer">
        <p>&copy; <?php echo date("Y"); ?> All rights reserved.</p>
    </footer>
</body>
</html>
