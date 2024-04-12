<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Plans</title>
    <!-- <link rel="stylesheet" href="./styles/block.css"> -->
    

<style>
    body {
        margin: 0;
        font-family: 'Arial', sans-serif;
        display: flex;
    }
    element.sidebar {
    height: 610px;
}
    .sidebar {
        width: 304px;
        height: 500px;
        padding: 20px;
        background-color: black;
        color: #ecf0f1;
        overflow-y: auto;
        position: fixed;
        height: 709px;
        padding-top: 8%;
        margin-left: 0px;
    }

    .main-content {
        flex: 1;
        padding: 20px;
        overflow-y: auto;
        margin-left: 320px;
        /* Adjust the margin to match the width of the sidebar */
    }

    /* Style your filter form */
    .filter-form {
        margin-bottom: 20px;
    }

    .filter-form label {
        display: block;
        margin-bottom: 5px;
        color: #ecf0f1;
    }

    .filter-form select,
    .filter-form input {
        width: 100%;
        margin-bottom: 10px;
        padding: 8px;
    }

    /* Updated style for the filter button */
    .filter-form input[type="submit"] {
        background-color: #e74c3c;
        /* Red color */
        color: white;
        cursor: pointer;
    }

    .filter-form input[type="text"] {
        box-sizing: border-box;
    }

    .feactures {
        padding: 50px;
        font-size: 22px;
    }

    .row {
        display: flex;
        width: 100%;
        /* Allow the row to take up the entire width */
        align-items: center;
        flex-wrap: wrap;
        padding: 50px 0;
    }


    .card {
        position: relative;
        width: 220px;
        height: 280px;
        border-radius: 10px;
        box-shadow: 0px 15px 25px rgba(0, 0, 0, .2);
        background-color: #fff;
        margin: 20px;
        overflow: hidden;
        transition: .5s;
    }

    .card:hover {
        transform: scale(1.1);
        opacity: 1;
    }

    .card .circle {
        position: relative;
        width: 9%0%;
        height: 100%;
        background-color: #000;
        clip-path: circle(120px at center 0);
        text-align: center;
    }

    .card .content {
        position: absolute;
        bottom: 25px;
        text-align: center;
        padding: 20px;
        height: 150px;
        width: 230px;
    }

    .card .content a {
        position: relative;
        display: inline-block;
        background-color: #000;
        color: #fff;
        padding: 5px 10px;
        border-radius: 5px;
        margin-top: 15px;
        text-decoration: none;
        margin-bottom: 18px;
    }

    .grid-container {
        display: grid;
        font-size: 15px;
        font-weight: bolder;
        text-align: left;
        grid-template-columns: repeat(2, 1fr);
        grid-template-rows: repeat(2, 1fr);
        gap: 9px;
    }

    grid-item {
        text-transform: capitalize;
    }

    .data {
        font-weight: lighter;
        font-size: 14px;
    }

    .circle img {
        height: 25%;
        width: 25%;
        border-radius: 50%;
        position: relative;
        top: 20px;
        left: 10px;
        clip-path: circle(120px at center 0);
    }

    .circle h2 {
        color: #fff;
        margin: 0px;
        display: inline;
        font-size: 40px;
        margin-right: 15px;
    }

    .circle .type {

        margin: 0px;
        font-size: small;
        color: yellow;
        font-weight: bold;
        margin-top: 10px;
        background-color: #303dbc;
        /* display: inline; */
        border-radius: 30%;
        width: 50%;

        margin-left: 50px;
    }

    .popup-container {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        justify-content: center;
        align-items: center;
        z-index: 1000;
    }

    .popup-content {
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        text-align: center;
    }

    .popup-content table {
        width: 100%;
        margin-bottom: 15px;
    }

    .overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: transparent;
        align-items: center;
        justify-content: center;
        backdrop-filter: blur(10px);
        text-align: center;

    }

    .popup {
        background: #fff;
        margin-top: 7%;
        height: 80%;
        padding: 50px 30px;
        width: 314px;
        max-width: 100%;
        border-radius: 5px;
        box-shadow: transparent;
        text-align: center;
        position: relative;
    }


    .close-btn {
        cursor: pointer;
        position: absolute;
        top: 10px;
        right: 10px;
        font-size: 20px;
    }

    table {

        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;

    }

    th,
    td {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    th {
        background-color: #f2f2f2;
    }

    .pop {
        border: 2px solid;
        border-collapse: collapse;

    }

    .pop th,
    td {
        border: 2px solid black;

    }

    .compare-container {
        position: fixed;
        bottom: 20px;
        right: 70px;
        text-align: center;
        z-index: 1001;
        /* Ensure a higher z-index than other elements */
    }

    /* Style for the compare button inside compare-container */
    .compare-button {
        background-color: #3498db;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        z-index: 1002;
        /* Ensure a higher z-index than other elements */
    }

    .main-content {
        /* border: 2px solid red; */
        margin-top: 5%;
    }

    .details {
        margin-top: 15px;
        margin-bottom: 15px;
        height: 60px;
        /* Adjust the height as needed */

        white-space: nowrap;
    }

    .vimoreew- {
        margin: 2px;
    }

    .small-font {
        font-size: smaller;
        /* Adjust the size as needed */
    }

</style>
</head>

<body style="padding: 5%;">
    <?php
    include './config/config.php';
    include 'othernav.php';

    // Include your block.css file
    // echo '<link rel="stylesheet" type="text/css" href="./styles/block.css">';

    function formatValidity($validity)
    {
        // Check if validity is a string (Pascal case)
        if (is_string($validity)) {
            return ucfirst(strtolower($validity));
        } else {
            // Concatenate "Days" for numeric validity
            return $validity . 'Days';
        }
    }

    function displayCard($row, $logoPath)
    {
        echo '<div class="container">
            <div class="card">
                <div class="circle">
                    <h2>₹' . $row['price'] . '</h2>
                    <img src="' . $logoPath . '">
                    <div class="type">
                        <p>' . $row['type'] . '</p>
                    </div>
                </div>

                <div class="content">
                    <hr>
                    <div class="grid-container">
                        <div class="grid-item">Validity</div>
                        <div class="grid-item">Data/Talktime</div>
                        <div class="grid-item data">' . formatValidity($row['validity']) . '</div>
                        <div class="grid-item data">' . $row['data_talktime'] . '</div>
                    </div>
                    <a href="#" class="view-more" onclick="showPopup()">More Details</a>
                    <hr>
                    <input type="checkbox" id="checkbox">Add to Compare</input>
                </div>
            </div>
        </div>';
    }

    echo '<div class="features">
        <div class="row">';

    $dataFound = false; // Flag to check if any data is found

    if (isset($_GET['search'])) {
        $search = $_GET['search'];

        // Query for airtel_prepaid
        $sql_airtel = "SELECT * FROM airtel_prepaid 
                  WHERE id LIKE '$search%' OR price LIKE '$search%' OR data_talktime LIKE '$search%' OR validity LIKE '$search%' OR type LIKE '$search%'";

        $result_airtel = mysqli_query($conn, $sql_airtel);

        // Function to display card for Airtel
        function displayAirtelCard($row)
        {
            displayCard($row, './images/airtellogo.jpg');
        }

        if ($result_airtel && mysqli_num_rows($result_airtel) > 0) {
            $dataFound = true;
            while ($row = mysqli_fetch_assoc($result_airtel)) {
                displayAirtelCard($row);
            }
            // Add horizontal rule after Airtel cards
            // echo ''; 
        }

        // Query for jio_prepaid
        $sql_jio = "SELECT * FROM jio_prepaid 
                  WHERE id LIKE '$search%' OR price LIKE '$search%' OR data_talktime LIKE '$search%' OR validity LIKE '$search%' OR type LIKE '$search%'";

        $result_jio = mysqli_query($conn, $sql_jio);

        // Function to display card for Jio
        function displayJioCard($row)
        {
            displayCard($row, './images/jiologo.jpg');
        }

        if ($result_jio && mysqli_num_rows($result_jio) > 0) {
            $dataFound = true;
            echo '<div class="row">';
            while ($row = mysqli_fetch_assoc($result_jio)) {
                displayJioCard($row);
            }
            // Add horizontal rule after Jio cards
            echo '<hr>';
            echo '</div>';
        }

        // Query for bsnl_prepaid
        $sql_bsnl = "SELECT * FROM bsnl_prepaid 
                  WHERE id LIKE '$search%' OR price LIKE '$search%' OR data_talktime LIKE '$search%' OR validity LIKE '$search%' OR type LIKE '$search%'";

        $result_bsnl = mysqli_query($conn, $sql_bsnl);

        // Function to display card for BSNL
        function displayBSNLCard($row)
        {
            displayCard($row, './images/bsnllogo1.jpg');
        }

        if ($result_bsnl && mysqli_num_rows($result_bsnl) > 0) {
            $dataFound = true;
            echo '<div class="row">';
            while ($row = mysqli_fetch_assoc($result_bsnl)) {
                displayBSNLCard($row);
            }
            // Add horizontal rule after BSNL cards
            echo '<hr>';
            echo '</div>';
        }

        // Query for vi_prepaid
        $sql_vi = "SELECT * FROM vi_prepaid 
                  WHERE id LIKE '$search%' OR price LIKE '$search%' OR data_talktime LIKE '$search%' OR validity LIKE '$search%' OR type LIKE '$search%'";

        $result_vi = mysqli_query($conn, $sql_vi);

        // Function to display card for VI
        function displayVICard($row)
        {
            displayCard($row, './images/vilogo.webp');
        }

        if ($result_vi && mysqli_num_rows($result_vi) > 0) {
            $dataFound = true;
            echo '<div class="row">';
            while ($row = mysqli_fetch_assoc($result_vi)) {
                displayVICard($row);
            }
            // No horizontal rule after VI cards (last section)
            echo '</div>';
        }
    }

    if (!$dataFound) {
        echo '<div class="container my-5">
            <h2 class="text-danger">No Data Found</h2>
          </div>';
    }

    echo '</div></div></body></html>';
    ?>

<div class="overlay" id="overlay">
                <div class="popup">
                    <span class="close-btn" onclick="closePopup()">&times;</span>

                    <!-- Dynamically set the image source based on SIM name -->
                    <?php

                    $popupSimImage = "";
                    switch (strtolower($tableName)) {
                        case "airtel_prepaid":
                            $popupSimImage = "./images/Airtel-Logo.png";
                            break;
                        case "jio_prepaid":
                            $popupSimImage = "./images/Jio_logo.png";
                            break;
                        case "bsnl_prepaid":
                            $popupSimImage = "./images/bsnl.png";
                            break;
                        case "vi_prepaid":
                            $popupSimImage = "./images/vodafone-logo.webp";
                            break;
                            // Add more cases for other SIMs if needed
                        default:
                            // Handle cases not covered above, if necessary
                            break;
                    }
                    ?>
                    <img src="<?php echo $popupSimImage; ?>" width="90" height="80" alt="<?php echo $tableName; ?> Logo">

                    <h1 id="popup-price-heading" style="text-align: left;"></h1>

                    <hr />
                    <div>
                        <h2 style="padding:10px;text-align: left;">Details</h2>

                        <table class="pop">

                            <tr>
                                <td>ID</td>
                                <td id="popup-id"></td>
                            </tr>
                            <tr>
                                <td>Price</td>
                                <td id="popup-price-value"></td>
                            </tr>
                            <tr>
                                <td>Validity</td>
                                <td id="popup-validity"></td>
                            </tr>
                            <tr>
                                <td>Data Per Day</td>
                                <td id="popup-dataperday"></td>
                            </tr>
                            <tr>
                                <td>Additional Data</td>
                                <td id="popup-additionaldata"></td>
                            </tr>
                            <tr>
                                <td>Data/Talktime</td>
                                <td id="popup-data_talktime"></td>
                            </tr>
                            <tr>
                                <td>Type</td>
                                <td id="popup-type"></td>
                            </tr>
                            <tr>
                                <td>Description</td>
                                <td id="popup-description"></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>


    <script>
        function openPopup(planId, tableName) {
                    // Display the popup container
                    console.log('Opening popup for plan ID:', planId, tableName);
                    document.getElementById('overlay').style.display = 'flex';

                    // Make an AJAX request to fetch detailed information
                    var xhr = new XMLHttpRequest();
                    xhr.open('GET', 'fetch_data.php?planId=' + planId + '&tableName=' + tableName, true); // Corrected parameter names

                    xhr.onload = function() {
                        if (xhr.status === 200) {
                            // Parse the JSON response
                            var planDetails = JSON.parse(xhr.responseText);

                            // Populate the popup content with fetched details
                            document.getElementById('popup-id').innerText = planDetails.id;
                            document.getElementById('popup-price-value').innerText = '₹' + planDetails.price;

                            document.getElementById('popup-validity').innerText = planDetails.validity + ' days';
                            document.getElementById('popup-dataperday').innerText = planDetails.dataperday + ' GB';
                            document.getElementById('popup-additionaldata').innerText = planDetails.additionaldata + ' GB';
                            document.getElementById('popup-data_talktime').innerText = planDetails.data_talktime;
                            document.getElementById('popup-type').innerText = planDetails.type;
                            document.getElementById('popup-description').innerText = planDetails.description;
                        } else {
                            console.error('Failed to fetch plan details');
                        }
                    };

                    xhr.send();
                }



                function closePopup() {
                    document.getElementById('overlay').style.display = 'none';
                }

                function compareSelectedPlans() {
                    // Fetch selected plans from local storage
                    const selectedPlans = JSON.parse(localStorage.getItem('selectedPlans')) || {};

                    // Count the total number of selected plans
                    let totalSelected = 0;

                    // Iterate through selected plans and count them
                    for (const tableName in selectedPlans) {
                        totalSelected += selectedPlans[tableName].length;
                    }

                    if (totalSelected > 4) {
                        alert('You can only compare up to 4 plans. Please unselect some plans.');
                    } else {
                        // Redirect to compare.php with selected plan details as parameters
                        const queryString = Object.keys(selectedPlans).map(tableName => {
                            const planIds = selectedPlans[tableName].join(',');
                            return `${tableName}=${planIds}`;
                        }).join('&');

                        if (queryString !== '') {
                            window.location.href = `compare.php?${queryString}`;
                        } else {
                            alert('Please select plans to compare.');
                        }
                    }
                }
                // Listen for checkbox changes
                const checkboxes = document.querySelectorAll('.compare-checkbox');

                checkboxes.forEach(checkbox => {
                    checkbox.addEventListener('change', function() {
                        const selectedPlans = JSON.parse(localStorage.getItem('selectedPlans')) || {};

                        const tableName = this.dataset.table;
                        const planId = this.dataset.id;

                        if (this.checked) {
                            // Plan is selected, add to the selectedPlans object
                            if (!selectedPlans[tableName]) {
                                selectedPlans[tableName] = [];
                            }
                            selectedPlans[tableName].push(planId);
                        } else {
                            // Plan is unselected, remove from the selectedPlans object
                            const index = selectedPlans[tableName].indexOf(planId);
                            if (index !== -1) {
                                selectedPlans[tableName].splice(index, 1);
                            }
                        }

                        // Save the updated selectedPlans to local storage
                        localStorage.setItem('selectedPlans', JSON.stringify(selectedPlans));

                        // You can use selectedPlans for further comparison functionality
                        console.log(selectedPlans);
                    });
                });

                // Function to fetch data from the server and store it in local storage
                function fetchDataAndStore() {
                    // Array to store the data from each table
                    var allData = [];

                    // Array of table names
                    var tableNames = ['airtel_prepaid', 'bsnl_prepaid', 'jio_prepaid', 'vi_prepaid'];

                    // Loop through each table
                    tableNames.forEach(function(tableName) {
                        // AJAX request to fetch data from the server
                        var xhr = new XMLHttpRequest();
                        xhr.open('GET', 'fetch_data.php?table=' + tableName, true);

                        // Set the callback function when the request is complete
                        xhr.onload = function() {
                            if (xhr.status === 200) {
                                // Parse the JSON response
                                var responseData = JSON.parse(xhr.responseText);

                                // Store the data in the array
                                allData[tableName] = responseData;

                                // Check if data from all tables is fetched
                                if (Object.keys(allData).length === tableNames.length) {
                                    // Store the combined data in local storage
                                    localStorage.setItem('tablesData', JSON.stringify(allData));
                                    console.log('Data stored in local storage:', allData);
                                }
                            } else {
                                console.error('Failed to fetch data from ' + tableName);
                            }
                        };

                        // Send the request
                        xhr.send();
                    });
                }

                // Set sidebar height dynamically based on main content height
                function setSidebarHeight() {
                    const sidebar = document.getElementById('sidebar');
                    const mainContent = document.getElementById('main-content');
                    sidebar.style.height = mainContent.offsetHeight + 'px';
                }

                // Run setSidebarHeight initially and on window resize
                setSidebarHeight();
                window.addEventListener('resize', setSidebarHeight);

                function showAllData(card) {
                    const additionalData = card.querySelector('.additional-data');
                    additionalData.style.display = 'block';
                }

                function hideAllData(card) {
                    const additionalData = card.querySelector('.additional-data');
                    additionalData.style.display = 'none';
                }


                // Call the function to fetch data and store it in local storage
                fetchDataAndStore();

                function clearStoredDataAndCheckboxes() {
                    // Clear locally stored selected plans data
                    localStorage.removeItem('selectedPlans');

                    // Uncheck all checkboxes
                    const checkboxes = document.querySelectorAll('.compare-checkbox');
                    checkboxes.forEach(checkbox => {
                        checkbox.checked = false;
                    });
                }
                window.addEventListener('load', clearStoredDataAndCheckboxes);

                
    </script>

</html>