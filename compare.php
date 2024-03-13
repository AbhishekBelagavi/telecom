<?php
// Your existing database connection code

include './config/config.php';
// Get selected plan details from the URL parameters
$selectedPlans = [];
foreach ($_GET as $tableName => $planIds) {
    $planIdsArray = explode(',', $planIds);
    foreach ($planIdsArray as $planId) {
        // Fetch plan details from the database based on $tableName and $planId
        $sql = "SELECT * FROM $tableName WHERE id = '$planId'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // Add the plan details to $selectedPlans array
                $selectedPlans[$tableName][] = $row;
            }
        } else {
            // If not found in the database, check in local storage (if available)
            $localStorageData = json_decode($_COOKIE["tablesData"], true); // Change this based on your actual method of storing tablesData in localStorage
            if (isset($localStorageData[$tableName])) {
                foreach ($localStorageData[$tableName] as $localStorageRow) {
                    if ($localStorageRow['id'] == $planId) {
                        $selectedPlans[$tableName][] = $localStorageRow;
                    }
                }
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compare Plans</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <?php

    include 'othernav.php';
    ?>
    <style>
        /* Add your CSS styles here */
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 5%;
            margin-top: 34px;

        }

        table {

            border-collapse: collapse;
            margin-top: 20px;
            border: 2px solid #ddd;
            width: 80%;
            overflow-x: auto;
            margin-bottom: 20px;

        }

        h1 {
            font-weight: bold;

        }

        table,
        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
            width: 20%;
            border-collapse: collapse;
        }

        .static-headers {
            border: 1px solid #ddd;
            font-family: 'Arial', sans-serif;
            /* Change font family as needed */
        }

        .dynamic-headers {
            border: 1px solid #ddd;
        }

        .table {
            width: 75%;
            margin: 18px auto;
        }

        .table th {
            font-size: 25px;
        }

        .table tr {
            height: 10%;
        }

        .table td {
            font-family: 'Arial', sans-serif;
            /* Change font family as needed */
            text-align: center;
            /* Center align text in cells */
            margin-left: 20%;
        }


        .back-button-container {
            position: fixed;
            bottom: 20px;
            right: 70px;
            text-align: center;
            z-index: 1001;
            /* Ensure a higher z-index than other elements */
        }

        /* Style for the compare button inside compare-container */
        .back-button {
            background-color: red;
            border: 5px white;
            border-style: double;
            height: 60px;
            width: 150px;
            color: black;
            font-size: large;
            font-weight: bold;
            padding: 10px 20px;
            /* border: none; */
            border-radius: 5px;
            cursor: pointer;
            z-index: 1002;
            /* Ensure a higher z-index than other elements */
        }
    </style>
</head>

<body>

    <script>
        // Clear selectedPlans in local storage when coming back from compare.php
        localStorage.removeItem('selectedPlans');
    </script>
    <h1>Compare Plans</h1>
    <?php if (!empty($selectedPlans)) : ?>



        <table class="table table-striped">
            <!-- Static Headers Row -->


            <tr>
                <th class="static-headers">Price</th>
                <?php foreach ($selectedPlans as $plans) : ?>
                    <?php foreach ($plans as $plan) : ?>
                        <td class="dynamic-data">
                            <?php echo "₹" . $plan['price']; ?>
                        </td>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </tr>
            <tr>
                <th class="static-headers">Validity</th>
                <?php foreach ($selectedPlans as $plans) : ?>
                    <?php foreach ($plans as $plan) : ?>
                        <td class="dynamic-data">
                            <?php echo $plan['validity']; ?>
                        </td>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </tr>
            <tr>
                <th class="static-headers">Data Per Day</th>
                <?php foreach ($selectedPlans as $plans) : ?>
                    <?php foreach ($plans as $plan) : ?>
                        <td class="dynamic-data"><?php echo $plan['dataperday']; ?></td>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </tr>
            <tr>
                <th class="static-headers">Additional Data</th>
                <?php foreach ($selectedPlans as $plans) : ?>
                    <?php foreach ($plans as $plan) : ?>
                        <td class="dynamic-data"><?php echo $plan['additionaldata']; ?></td>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </tr>
            <tr>
                <th class="static-headers">Data/Talktime</th>
                <?php foreach ($selectedPlans as $plans) : ?>
                    <?php foreach ($plans as $plan) : ?>
                        <td class="dynamic-data">
                            <?php echo $plan['data/talktime']; ?>
                        </td>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </tr>
            <tr>
                <th class="static-headers">Type</th>
                <?php foreach ($selectedPlans as $plans) : ?>
                    <?php foreach ($plans as $plan) : ?>
                        <td class="dynamic-data">
                            <?php echo $plan['type']; ?>
                        </td>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </tr>
            <tr>
                <th class="static-headers">Description</th>
                <?php foreach ($selectedPlans as $plans) : ?>
                    <?php foreach ($plans as $plan) : ?>
                        <td class="dynamic-data">
                            <?php echo $plan['description']; ?>
                        </td>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </tr>


        </table>
        <button class="back-button" onclick="goBack()">Back</button>
    <?php else : ?>
        <p>No plans selected for comparison.</p>
    <?php endif; ?>
    <script>
        function goBack() {
            // Implement the logic to go back
            window.history.back();
        }
    </script>
</body>

</html>
<?php
// Close the database connection
$conn->close();
?>