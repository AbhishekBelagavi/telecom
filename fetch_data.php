<?php
 include './config/config.php';

// Fetch data based on the provided planId
$planId = isset($_GET['planId']) ? $_GET['planId'] : '';
$tableName = isset($_GET['tableName']) ? $_GET['tableName'] : '';

if (!empty($planId) && !empty($tableName)) {
    $sql = "SELECT * FROM $tableName WHERE id = '$planId'";
    $result = $conn->query($sql);

    if ($result) {
        if ($result->num_rows > 0) {
            $data = $result->fetch_assoc(); // Fetch a single row

            // Return data as JSON
            header('Content-Type: application/json');
            echo json_encode($data);
        } else {
            // No data found
            echo json_encode(array('message' => 'No data found for plan ID ' . $planId));
        }
    } else {
        // Query execution failed
        echo json_encode(array('error' => 'Query failed: ' . $conn->error));
    }
} else {
    // Plan ID or Table name not provided
    echo json_encode(array('error' => 'Plan ID or Table name not provided.'));
}

// Close the database connection
$conn->close();
?>
