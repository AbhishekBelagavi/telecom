<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

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


// Step 2: Database Query
$sql = "SELECT * FROM airtel_prepaid"; // You can change the table name to the desired SIM's table

// Step 3: Execute Query
$result = $conn->query($sql);

// Step 4: Generate Cards
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Generate the card HTML here based on your data
        echo '<div class="card">';
        echo '<div>';
        echo '<img src="images/Airtel-Logo.png" alt="Your Image" style="max-width: 100px; display: block; margin: 0 auto;">';
        echo '<h2>Data</h2>';
        echo '<p>Price: ' . $row["price"] . '</p>';
        echo '<p>Validity: ' . $row["validity"] . '</p>';
        echo '<p>Data Per Day: ' . $row["dataperday"] . ' GB</p>';
        echo '<p>Additional Data: ' . $row["additionaldata"] . ' MB</p>';
        echo '<p>Data/Talktime: ' . $row["data_talktime"] . '</p>';
        echo '<p>Type: ' . $row["type"] . '</p>';
        echo '<div class="containers">';
        echo '<button onclick="toggleDescription(this)">See More</button>';
        echo '<div class="more-info" style="display: none;">';
        // Show all columns in a "See More" section
        foreach ($row as $column => $value) {
            echo "<p>$column: $value</p>";
        }
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo '<p>No data available</p>';
}

// Step 5: Close Database Connection
$conn->close();
?>
