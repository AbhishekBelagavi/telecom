<?php

include './config/config.php';
include 'filter.php';
include 'othernav.php';
// Fetch data from the 'airtel_prepaid' table
$tableName = 'jio_prepaid';
$sql = "SELECT * FROM $tableName";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlU4jz6p+Jz5jp5e6LdL+5SNghdu2eYAZG7CkMPs2N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <title>Jio Recharge Plans</title>
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
    z-index: 1001; /* Set a higher z-index value */
}

.popup-content {
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    text-align: center;
    z-index: 1002; /* Set a higher z-index value */
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
    padding: 50px 30px;
    width: 300px;
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
    right: 20px;
    text-align: center;
}

/* Style for the compare button inside compare-container */
.compare-button {
    background-color: #3498db;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}
/* Add a higher specificity to override Owl Carousel styles */
.owl-carousel .owl-item .card .circle img {
    height: 25%;
    width: 25%;
    border-radius: 50%;
    position: absolute;
    top: 5px;
    left: 145px;
    clip-path: circle(120px at center 0);
}

.owl-carousel .owl-item .card .circle h2 {
    color: #fff;
    margin: 0;
    display: inline;
    font-size: 40px;
    margin-right: 15px;
    position: relative;
    top: 15px; /* Adjust the top value to change the vertical position */
}

.owl-carousel .owl-item .card .circle .type {
    margin: 0px;
    font-size: small;
    color: yellow;
    font-weight: bold;
    margin-top: 35px;
    background-color: #303dbc;
    border-radius: 30%;
    width: 50%;
    margin-left: 45px;
}
.owl-carousel .owl-stage {
 
    display: flex;
    flex-wrap: wrap;
    
    width: 60%;
    height: 300px;
    gap: 50px;
    margin-top: 40px;
    margin-right:20px;
    position: relative;
    -ms-touch-action: pan-Y;
    touch-action: manipulation;
    -moz-backface-visibility: hidden;
}
.owl-carousel .card {
    width: 200px; /* Adjust the width as needed */
    height: 250px;
    border-radius: 10px;
    box-shadow: 0px 15px 25px rgba(0, 0, 0, .2);
    background-color: #fff;
    margin: 0; /* Remove margin for individual cards */
    overflow: hidden;
    transition: .5s;
}
.owl-carousel .card .content a {
    position: relative;
    display: inline-block;
    background-color: #000;
    color: #fff;
    padding: 5px 10px;
    border-radius: 5px;
    margin-top: 5px;
    text-decoration: none;
    margin-bottom: 5px;
    margin-left: 5px;
}

.owl-carousel .card .content {
    padding: 20px;
    height: 110px;
    width: 90%; /* Adjust the width as needed */
    color: #000;
    margin-right: 20px;
    margin-top:50px;
    text-align: center; /* Center the text horizontally */
    
}
/* Custom styles for Owl Carousel next and prev buttons */
.owl-carousel.owl-loaded .owl-nav button.nextBtn,
.owl-carousel.owl-loaded .owl-nav button.prevBtn {
    display: none; /* Initially hide the buttons */
    background-color: transparent; /* Set the background to transparent */
    color: black; /* Set your desired text color */
    border: none; /* Remove default border */
    border-radius: 5px; /* Set border-radius if needed */
    padding: 10px 15px; /* Adjust padding as needed */
    font-size: 16px; /* Set your desired font size */
    position: absolute; /* Add this line to position the buttons */
    transition: background-color 0.3s, color 0.3s; /* Add a transition effect for smooth visibility */
}

/* Position the buttons */
.owl-carousel.owl-loaded .owl-nav button.nextBtn {
    right: 10px;
    top: 150px;
    margin-right:80px;
}

.owl-carousel.owl-loaded .owl-nav button.prevBtn {
    left: 10px;
    top: 150px;
    margin-left: 10px;
    
}

/* Display the buttons on hover */
.owl-carousel.owl-hovered .owl-nav button.nextBtn,
.owl-carousel.owl-hovered .owl-nav button.prevBtn {
    display: block;
}

.card-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-evenly;
    width: 100%;
  padding-left: 10px;
  margin-left:189px;
 
}
.sub-navbar {
     background-color: #0056b3; /* Dark blue background color */
     padding: 10px; /* Adjust padding as needed */
     text-align:left;
    margin-left:153px;
     width:100%;
     margin-top: 80px;
   
 }
 
 .sub-navbar h2 {
     margin: 0;
     margin-left:11px;
     color: #fff; /* Text color */
 }
 .owl-carousel {
    display: flex;
    width: 100%;
    margin-right:20px;
}
.card .content {
     position: absolute;
     bottom: 25px;
     text-align: center;
     padding: 20px;
     height: 110px;
     width:180px;
     color: #000; 
     margin-left:15px;
 }
 
</style>
    <script>
       
</script>
</head>

<body>
<div class="overlay" id="overlay" style="z-index: 1001;">
        <div class="popup">
            <span class="close-btn" onclick="closePopup()">&times;</span>

            <!-- Dynamically set the image source based on SIM name -->
            <?php
        
            $popupSimImage = "";
            $tableName = "jio_prepaid"; // Initialize tableName
            switch (strtolower($tableName)) {
                
                case "jio_prepaid":
                    $popupSimImage = "images/Jio_logo.png";
                    break;
                
                // Add more cases for other SIMs if needed
                default:
                    // Handle cases not covered above, if necessary
                    break;
            }
            ?>
            <img src="<?php echo $popupSimImage; ?>" width="200" height="150"
                alt="<?php echo $tableName; ?> Logo">

            <h1 id="popup-price-heading" style="text-align: left;"></h1>

            <hr />
            <div>
                <h2 style="padding: 10px; text-align: left;">Details</h2>

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
    

    <?php
    function displayCards($sql, $type, $tableName)
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "telecom";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $result = $conn->query($sql);
        
    if ($result->num_rows >0) {
        ?>
        <div class="sub-navbar">
            <h2><?php echo $type; ?></h2>
        </div>
        
        <div class="card-container">
            
            <?php
            while ($row = $result->fetch_assoc()) {
                $tableName = "jio_prepaid";
                $simImage = "images/Jio_logo.png";
                ?>
                <div class="card">
                   
                    <div class="circle">
                        <h2><?php echo "₹" . $row['price']; ?></h2>
                        <img src="<?php echo $simImage; ?>" alt="Sim Image">
                        <div class="type">
                            <p><?php echo $row['type']; ?></p>
                        </div>
                    </div>

                    <div class="content">
                        <hr>
                        <div class="grid-container">
                            <div class="grid-item">Validity</div>
                            <div class="grid-item">Data/Talktime</div>
                            <div class="grid-item data"><?php echo $row['validity']; ?></div>
                            <div class="grid-item data"><?php echo $row['dataperday']; ?></div>
                        </div>
                        <a href="#" class="vimoreew-"
                            onclick="openPopup('<?php echo $row['id']; ?>', '<?php echo $tableName; ?>')"
                            data-table="<?php echo $tableName; ?>" data-id="<?php echo $row['id']; ?>">More
                            Details</a>

                        <hr>
                        <input type="checkbox" class="compare-checkbox"
                            data-table="<?php echo $tableName; ?>" data-id="<?php echo $row['id']; ?>">
                        Add to Compare
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
        <?php
    } else {
        echo "<p>No data available</p>";
    }

    $conn->close();
}
?>

    
        <?php
        displayCards("SELECT * FROM jio_prepaid where type='Truly Unlimited'", "Truly Unlimited", "jio_prepaid");
        displayCards("SELECT * FROM jio_prepaid where type='Popular Plans'", "Popular Plans", "jio_prepaid");
        displayCards("SELECT * FROM jio_prepaid where type='Data'", "Data", "jio_prepaid");
        displayCards("SELECT * FROM jio_prepaid where type='JioPhone'", "JioPhone", "jio_prepaid");
        displayCards("SELECT * FROM jio_prepaid where type='Top-up'", "Top-up", "jio_prepaid");
        displayCards("SELECT * FROM jio_prepaid where type='International Roaming'", "International Roaming", "jio_prepaid");
        displayCards("SELECT * FROM jio_prepaid where type='JioSaavn Pro'", "JioSaavn Pro", "jio_prepaid");
        displayCards("SELECT * FROM jio_prepaid where type='Annual Plans'", "Annual Plans", "jio_prepaid");
        displayCards("SELECT * FROM jio_prepaid where type='In-Flight Packs'", "In-Flight Packs", "jio_prepaid");
        displayCards("SELECT * FROM jio_prepaid where type='JioLink'", "JioLink", "jio_prepaid");
        ?>
    
        <script src="index.js" async></script>
        <script>
          document.addEventListener("DOMContentLoaded", function () {
    const cardContainers = document.querySelectorAll('.card-container');
    let totalCards = 0;

    cardContainers.forEach(container => {
        const cards = container.querySelectorAll('.card');
        totalCards += cards.length;

        if (cards.length >=5) {
            container.classList.add('owl-carousel');
        }
    });

    if (totalCards >=5) {
        try {
            $('.owl-carousel').owlCarousel({
                loop: false,
                margin: 10,
                nav: true,
                stagePadding: 2,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 4
                    },
                    1000: {
                        items: 5
                    }
                },
                navText: ['<button class="prevBtn custom-nav-btn">❮ </button>',
                    '<button class="nextBtn custom-nav-btn"> ❯</button>']
            });
        } catch (error) {
            console.error('Owl Carousel initialization error:', error);
        }
    }
});

$(document).ready(function () {
    $('.owl-carousel').hover(
        function () {
            $(this).addClass('owl-hovered');
        },
        function () {
            $(this).removeClass('owl-hovered');
        }
    );

    // Other existing script...
});
function openPopup(planId, tableName) {
    console.log('Opening popup for plan ID:', planId, tableName);

    // Make an AJAX request to fetch detailed information
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'fetch_data.php?planId=' + planId + '&tableName=' + tableName, true);

    xhr.onload = function () {
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

            // Display the popup container
            document.getElementById('overlay').style.display = 'flex';
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
    // Listen for checkbox changes
    const checkboxes = document.querySelectorAll('.compare-checkbox');

    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', function () {
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
    async function fetchDataAndStore() {
        var allData = {};
        var tableNames = ['jio_prepaid'];
    
        for (const tableName of tableNames) {
            try {
                const responseData = await fetchData(tableName);
                allData[tableName] = responseData;
            } catch (error) {
                console.error('Failed to fetch data from ' + tableName, error);
            }
        }
    
        localStorage.setItem('tablesData', JSON.stringify(allData));
        console.log('Data stored in local storage:', allData);
    }
    
    function fetchData(tableName) {
        return new Promise((resolve, reject) => {
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'fetch_data.php?table=' + tableName, true);
            xhr.onload = function () {
                if (xhr.status === 200) {
                    resolve(JSON.parse(xhr.responseText));
                } else {
                    reject(new Error('Failed to fetch data from ' + tableName));
                }
            };
            xhr.send();
        });
    }
    


    // Call the function to fetch data and store it in local storage
    fetchDataAndStore();
        </script>
    </body>
    </html>
