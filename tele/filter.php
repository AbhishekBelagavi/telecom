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
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .table-name {
            font-weight: bold;
            font-size: 18px;
            margin-top: 20px;
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

        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // Get the table name from the row
                $tableName = $row["table_name"];

                // Display the table name as a heading
                if (!empty($tableName)) {
                    echo "<div class='table-name'>$tableName Prepaid Plans</div>";
                }

                echo "<table>";
                echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>Price</th>";
                echo "<th>Validity</th>";
                echo "<th>Data Per Day</th>";
                echo "<th>Additional Data</th>";
                echo "<th>Data/Talktime</th>";
                echo "<th>Type</th>";
                echo "<th>Description</th>";
                echo "</tr>";

                do {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["price"] . "</td>";
                    echo "<td>" . $row["validity"] . "</td>";
                    echo "<td>" . $row["dataperday"] . "</td>";
                    echo "<td>" . $row["additionaldata"] . "</td>";
                    echo "<td>" . $row["data_talktime"] . "</td>";
                    echo "<td>" . $row["type"] . "</td>";
                    echo "<td>" . $row["description"] . "</td>";
                    echo "</tr>";
                } while (($row = $result->fetch_assoc()) && $row["table_name"] === $tableName);

                echo "</table>";
            }
        } else {
            echo "<p>No data available</p>";
        }
        ?>
    </div>
</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
