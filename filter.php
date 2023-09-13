<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "telecom"; // Updated database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize filter variables
$filterSim = $_POST["sim"] ?? "All";
$filterPrice = $_POST["price"] ?? "";
$filterValidity = $_POST["validity"] ?? "";
$filterDataPerDay = $_POST["dataperday"] ?? "";
$filterAdditionalData = $_POST["additionaldata"] ?? "";
$filterType = $_POST["type"] ?? "";

// Construct the SQL query with filters
$sql = "";

// Define an array to map SIM names to table names
$simTableMapping = [
    "All" => ["airtel_prepaid", "jio_prepaid", "bsnl_prepaid", "vi_prepaid"],
    "Airtel" => ["airtel_prepaid"],
    "Jio" => ["jio_prepaid"],
    "BSNL" => ["bsnl_prepaid"],
    "Vi" => ["vi_prepaid"]
];

if (array_key_exists($filterSim, $simTableMapping)) {
    $tableNames = $simTableMapping[$filterSim];
    foreach ($tableNames as $tableName) {
        if (!empty($sql)) {
            $sql .= " UNION ALL ";
        }
        $sql .= "SELECT *, '$tableName' AS table_name FROM $tableName";
    }
}

if (!empty($filterPrice)) {
    // Map price range options to min-max values
    $priceRanges = [
        "0-100" => ["min" => 0, "max" => 100],
        "200-500" => ["min" => 200, "max" => 500],
        "500-1000" => ["min" => 500, "max" => 1000],
        "1000-above" => ["min" => 1000, "max" => PHP_INT_MAX], // Set a large max value
    ];

    if (array_key_exists($filterPrice, $priceRanges)) {
        $minPrice = $priceRanges[$filterPrice]["min"];
        $maxPrice = $priceRanges[$filterPrice]["max"];
        if (strpos($sql, "WHERE") !== false) {
            $sql .= " AND price >= $minPrice AND price <= $maxPrice";
        } else {
            $sql .= " WHERE price >= $minPrice AND price <= $maxPrice";
        }
    }
}

if (!empty($filterValidity)) {
    // Map validity options to values
    $validityValues = [
        "1-10" => ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10"],
        "30" => ["30", "28", "29"],
        "84" => ["84"],
        "365" => ["365"],
    ];

    if (array_key_exists($filterValidity, $validityValues)) {
        $validityOptions = $validityValues[$filterValidity];
        if (strpos($sql, "WHERE") !== false) {
            $validityConditions = implode(", ", $validityOptions);
            $sql .= " AND validity IN ($validityConditions)";
        } else {
            $validityConditions = implode(", ", $validityOptions);
            $sql .= " WHERE validity IN ($validityConditions)";
        }
    }
}

if (!empty($filterDataPerDay)) {
    if (strpos($sql, "WHERE") !== false) {
        $sql .= " AND dataperday = '$filterDataPerDay'";
    } else {
        $sql .= " WHERE dataperday = '$filterDataPerDay'";
    }
}

if (!empty($filterAdditionalData)) {
    if (strpos($sql, "WHERE") !== false) {
        $sql .= " AND additionaldata = '$filterAdditionalData'";
    } else {
        $sql .= " WHERE additionaldata = '$filterAdditionalData'";
    }
}

if (!empty($filterType)) {
    if (strpos($sql, "WHERE") !== false) {
        $sql .= " AND type = '$filterType'";
    } else {
        $sql .= " WHERE type = '$filterType'";
    }
}

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtered Plans</title>
    <style>

    .sim {
        color: #fff;
        opacity: 0.9;
        padding-left: 4%;
        text-transform: capitalize;
        font-size: 18px;
        font-weight: 500;
    }

    .container {
        width: 100%;
        min-height: 220px;
        position: relative;
        margin: 10px 0 20px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .sim-list {
        position: relative;
        width: 100%;
        display: flex;
        margin: 0 auto;
        align-items: center;
        overflow-x: auto;
        overflow-y: visible;
        gap: 20px;
        scroll-behavior: smooth;
        padding: 0 10px;
    }

    .sim-list::-webkit-scrollbar {
        display: none;
    }

    .card {
        position: relative;
        min-width: 120px;
        width: 120px;
        height: 220px;
        border-radius: 5px;
        overflow: hidden;
        transition: 0.5s;
        background: #7b6d8d;
        float: left;
        margin-right: 20px;
        padding-top: 10px;
        padding-bottom: 10px;
        margin-bottom: 20px;
    }

    .card img {
        max-width: 100px;
        display: block;
        margin: 20px auto 10px;
    }

    .sim-list div h3 {
        font-size: 24px;
        font-weight: 500;
        margin-bottom: 10px;
        text-align: center;
        color: #0b0707;
    }

    .sim-list div h2 {
        text-align: center;
        color: #0b0707;
        font-size: 14px;
    }

    .sim-list div p {
        color: #080404;
        text-align: center;
        font-size: 12px;
    }

    .sim-list div a {
        text-decoration: none;
        color: #0d0909;
        font-size: 10px;
        margin-top: 10px;
        text-align: center;
        display: block;
        margin: 0 auto;
    }

    .sim-list div a:hover {
        color: #060304;
    }

    .card:hover {
        transform: scale(1.1);
        transition: transform 0.3s ease-in-out;
    }

    /* .card:not(:hover) {
        filter: blur(0.5px); /* Apply blur effect to non-hovered cards */
    */

    .pre-btn,
    .nxt-btn {
        position: absolute;
        top: 0;
        width: 5%;
        height: 100%;
        z-index: 2;
        border: none;
        cursor: pointer;
        outline: none;
    }

    .pre-btn {
        left: 0;
        background: linear-gradient(to right, #0c111b 0%, #0c111b00);
    }

    .nxt-btn {
        right: 0;
        background: linear-gradient(to left, #0c111b 0%, #0c111b00);
    }

    .pre-btn img,
    .nxt-btn img {
        width: 15px;
        height: 20px;
        opacity: 0;
    }

    .pre-btn:hover img,
    .nxt-btn:hover img {
        opacity: 1;
    }

    button {
        border: none;
        font-size: 12px;
        color: #030b17;
        padding: 6px 12px;
        background-color: #fff;
        border-radius: 24px;
        cursor: pointer;
        margin: 10px;
    }

    .containers {
        text-align: center;
    }
</style>


</head>
<body>
    <div class="main-content">
        <form method="POST">
            <label for="sim">SIM:</label>
            <select name="sim" id="sim">
                <option value="All">All</option>
                <option value="Airtel">Airtel</option>
                <option value="Jio">Jio</option>
                <option value="BSNL">BSNL</option>
                <option value="Vi">Vi</option>
            </select>
            <label for="price">Price Range:</label>
            <select name="price" id="price">
                <option value="">Any</option>
                <option value="0-100">0-100</option>
                <option value="200-500">200-500</option>
                <option value="500-1000">500-1000</option>
                <option value="1000-above">1000 above</option>
            </select>
            <label for="validity">Validity:</label>
            <select name="validity" id="validity">
                <option value="">Any</option>
                <option value="1-10">1-10</option>
                <option value="30">30</option>
                <option value="84">84</option>
                <option value="365">365</option>
            </select>
            <label for="dataperday">Data Per Day:</label>
            <select name="dataperday" id="dataperday">
                <option value="">Any</option>
                <option value="1">1 GB per day</option>
                <option value="1.5">1.5 GB per day</option>
                <option value="2">2 GB per day</option>
            </select>
            <label for="additionaldata">Additional Data:</label>
            <input type="text" name="additionaldata" id="additionaldata" placeholder="Enter additional data">
            <label for="type">Type:</label>
            <input type="text" name="type" id="type" placeholder="Enter type">
            <input type="submit" value="Filter">
        </form>
        <div class="main-content">
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // Get the table name from the row
            $tableName = $row["table_name"];

            // Display the table name as a heading
          

            // Determine the SIM image based on the SIM name
            $simImage = "";
            switch ($tableName) {
                case "airtel_prepaid":
                    $simImage = "images/Airtel-Logo.png";
                    break;
                case "jio_prepaid":
                    $simImage = "images/Jio_logo.png";
                    break;
                case "bsnl_prepaid":
                    $simImage = "images/bsnl.png";
                    break;
                case "vi_prepaid":
                    $simImage = "images/vodafone-logo.webp";
                    break;
                // Add more cases for other SIMs if needed
            }
            echo "<div class='card' onmouseover='showAllData(this)' onmouseout='hideAllData(this)'>"; // Opening <div> for card with hover events
echo "<div class='card-content'>"; // Opening <div> for card content
// Add the SIM logo image here with inline style
echo "<img src='$simImage' alt='SIM Image' style='max-width: 100px; display: block; margin: 0 auto;'>";

// Display initial data in the card
// echo "<h2 style='font-size: 18px; margin-top: 10px;'>Plan Details</h2>";
echo "<p style='font-size: 14px; margin: 5px 0;'>Price: {$row['price']}</p>";
echo "<p style='font-size: 14px; margin: 5px 0;'>Data Per Day: {$row['dataperday']}</p>";
echo "<p style='font-size: 14px; margin: 5px 0;'>Validity: {$row['validity']}</p>";

// Display all other columns' data here (hidden by default)
echo "<div class='additional-data' style='display: none;'>";
foreach ($row as $columnName => $columnValue) {
    if ($columnName !== 'price' && $columnName !== 'dataperday' && $columnName !== 'validity') {
        echo "<p style='font-size: 14px; margin: 5px 0;'>$columnName: $columnValue</p>";
    }
}
echo "</div>"; // Closing </div> for additional data

echo "</div>"; // Closing </div> for card content
echo "</div>"; // Closing </div> for card
 // Closing </div> for card

            // Generate the popup card for each result row (hidden by default)
            echo "<div class='popup-card' style='display: none;'>"; // Opening <div> for popup card
            echo "<div class='header1'>";
            // Use the same SIM image for the popup card
            echo "<img src='$simImage' alt='SIM Image' style='max-width: 150px; display: block; margin: 0 auto;'>";
            echo "</div>";
            // Add more content for the popup card as needed
            echo "<p>Description: " . $row["description"] . "</p>";
            echo "<div class='line'></div>";
            echo "<button class='close-button' onclick='hidePopup(this)'>Close</button>";
            echo "</div>"; // Closing </div> for popup card
        }
    } else {
        echo "<p>No data available</p>";
    }
    ?>
    <script>
function showAllData(card) {
    const additionalData = card.querySelector('.additional-data');
    additionalData.style.display = 'block';
}

function hideAllData(card) {
    const additionalData = card.querySelector('.additional-data');
    additionalData.style.display = 'none';
}
</script>
</div>
</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
