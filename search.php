<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Plans</title>
    <link rel="stylesheet" href="./styles/block.css">
    <!-- <link rel="stylesheet" href="./styles/indi_style.css"> -->
    <style>
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

        .overlay {
            display: flex;
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
            height: 70%;
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

        .pop {
            border: 2px solid;
            border-collapse: collapse;
            width: 250px;
            height: 200px;

        }

        .pop th,
        td {
            border: 2px solid black;

        }
    </style>
</head>

<body style="padding: 5%;">
    <?php
    include './config/config.php';
    include 'othernav.php';

    echo '<link rel="stylesheet" type="text/css" href="./styles/block.css">';
    echo '<script>';
echo 'var currentTableName = "";'; // Add this line to define the variable
echo '</script>';
    function executeSearchQuery($tableName, $search)
    {
        global $conn;

        $sql = "SELECT * FROM $tableName 
            WHERE id LIKE '$search%' OR price LIKE '$search%' OR data_talktime LIKE '$search%' OR validity LIKE '$search%' OR type LIKE '$search%'";

        $result = mysqli_query($conn, $sql);

        if ($result && mysqli_num_rows($result) > 0) {
            $dataFound = true;
            echo '<div class="row">';
            while ($row = mysqli_fetch_assoc($result)) {
                displayCard($row, getLogoPath($tableName), $tableName);
            }
            echo '<hr>';
            echo '</div>';
        }
    }

    function getLogoPath($tableName)
    {
        switch (strtolower($tableName)) {
            case "airtel_prepaid":
                return "images/airtellogo.jpg";
            case "jio_prepaid":
                return "images/jiologo.jpg";
            case "bsnl_prepaid":
                return "images/bsnllogo1.jpg";
            case "vi_prepaid":
                return "images/vilogo.webp";
            default:
                return "";
        }
    }

    function displayCard($row, $logoPath, $tableName)
    {
        echo '<div class="container">
            <div class="card" id="card1">
                <div class="circle">
                    <h2>' . "₹" . $row['price'] . '</h2>
                    <img src="' . $logoPath . '">
                    <div class="type">
                        <p>' . $row['type'] . '</p>
                    </div>
                </div>

                <div class="content">
                    <hr>
                    <div class="grid-container">
                        <div class="grid-item"> Validity </div>
                        <div class="grid-item">Data/Talktime</div>
                        <div class="grid-item data">' . formatValidity($row['validity']) . '</div>
                        <div class="grid-item data">' . $row['dataperday'] . '</div>
                    </div>
                    <div class="details">
                        <a href="#" class="vimoreew-" onclick="openPopup(\'' . $row['id'] . '\', \'' . $tableName . '\')" data-table="' . $tableName . '" data-id="' . $row['id'] . '">More Details</a>';

        echo '<script>';
        echo 'console.log(' . json_encode($row) . ');';
        echo '</script>';

        echo '<hr>
                        <input type="checkbox" class="compare-checkbox" data-table="' . $tableName . '" data-id="' . $row['id'] . '" style="margin-top: 5px;"></input>
                        Add to Compare
                    </div>
                </div>
            </div>
        </div>';
    }

    function formatValidity($validity)
    {
        if ($validity == "EXISTING PLAN") {
            return '<span class="small-font">' . ucfirst(strtolower($validity)) . '</span>';
        } else {
            return $validity . " Days";
        }
    }

    echo '<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Plans</title>
    <link rel="stylesheet" href="./styles/block.css">
    
</head>

<body style="padding: 5%;">';

    

    if (isset($_GET['search'])) {
        $search = $_GET['search'];

        executeSearchQuery('airtel_prepaid', $search);
        executeSearchQuery('jio_prepaid', $search);
        executeSearchQuery('bsnl_prepaid', $search);
        executeSearchQuery('vi_prepaid', $search);
        $dataFound = true;
    }

    // if (!$dataFound) {
    //     echo '<div class="container my-5">
    //     <h2 class="text-danger">No Data Found</h2>
    // </div>';
    // }

    echo '</body></html>';
    ?>

    <div class="overlay" id="overlay">
        <div class="popup">
            <span class="close-btn" onclick="closePopup()">&times;</span>

            <!-- Dynamically set the image source based on SIM name -->
            <?php
            $tableName = "";
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
                // default:
                //     // Handle cases where $tableName is undefined or doesn't match any known case
                //     $popupSimImage = ""; // Set a default value or handle accordingly
                //     break;
            }
            ?>
            
            <img id="popup-sim-image" src="<?php echo $popupSimImage; ?>" width="140" height="100" alt="<?php echo $tableName; ?> Logo">

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
            currentTableName = tableName;

            // Make an AJAX request to fetch detailed information
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'fetch_data.php?planId=' + planId + '&tableName=' + tableName, true);
            xhr.onload = function() {
                if (xhr.status === 200) {
                    // Parse the JSON response
                    var planDetails = JSON.parse(xhr.responseText);
                    console.log('inside doc');
                    console.log(currentTableName);
                    // Populate the popup content with fetched details
                    document.getElementById('popup-id').innerText = planDetails.id;
                    document.getElementById('popup-price-value').innerText = '₹' + planDetails.price;
                    document.getElementById('popup-validity').innerText = +planDetails.validity + ' days';
                    document.getElementById('popup-dataperday').innerText = planDetails.dataperday + ' GB';
                    document.getElementById('popup-additionaldata').innerText = planDetails.additionaldata + ' GB';
                    document.getElementById('popup-data_talktime').innerText = planDetails.data_talktime;
                    document.getElementById('popup-type').innerText = planDetails.type;
                    document.getElementById('popup-description').innerText = planDetails.description;

                    // Set the popupSimImage based on the currentTableName
                    var popupSimImage = "";
                    <?php echo 'var tableName = "' . $tableName . '";'; ?>
                    switch (currentTableName) {
                        case "airtel_prepaid":
                            popupSimImage = "./images/Airtel-Logo.png";
                            break;
                        case "jio_prepaid":
                            popupSimImage = "./images/Jio_logo.png";
                            break;
                        case "bsnl_prepaid":
                            popupSimImage = "./images/bsnl.png";
                            break;
                        case "vi_prepaid":
                            popupSimImage = "./images/vodafone-logo.webp";
                            break;
                        default:
                            // Handle cases where $tableName is undefined or doesn't match any known case
                            popupSimImage = ""; // Set a default value or handle accordingly
                            break;
                    }

                    // Set the src attribute of the popup-sim-image element
                    var popupSimImageElement = document.getElementById('popup-sim-image');
                    if (popupSimImageElement) {
                        popupSimImageElement.src = popupSimImage;
                    } else {
                        console.error('Element with ID "popup-sim-image" not found');
                    }
                } else {
                    console.error('Failed to fetch plan details');
                }
            };

            // Send the AJAX request
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
                        var planDetails = JSON.parse(xhr.responseText);
                        document.getElementById('popup-id').innerText = planDetails.id;
                        document.getElementById('popup-price-value').innerText = '₹' + planDetails.price;
                        document.getElementById('popup-validity').innerText = planDetails.validity + ' days';
                        document.getElementById('popup-dataperday').innerText = +planDetails.dataperday + ' GB';
                        document.getElementById('popup-additionaldata').innerText = +planDetails.additionaldata + ' GB';
                        document.getElementById('popup-data_talktime').innerText = +planDetails.data_talktime;
                        document.getElementById('popup-type').innerText = planDetails.type;
                        document.getElementById('popup-description').innerText = planDetails.description;


                        // Store the planDetails in the allData array
                        allData.push({
                            tableName: tableName,
                            details: planDetails
                        });

                        // You can perform further processing or update other elements here
                    } else {
                        console.error('Failed to fetch plan details for table:', tableName);
                    }
                };

                // Send the request
                xhr.send();
            });

            // Note: The allData array now contains details for each table
            console.log(allData);
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

        window.addEventListener('load', closePopup());
    </script>


</body>

</html>