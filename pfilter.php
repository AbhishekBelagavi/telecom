<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtered Plans</title>
    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            display: ;
        }

        .sidebar {
            width: 300px;
            padding: 20px;
            background-color: #0f1a31;
            color: #ecf0f1;
            overflow-y: auto;
            position: fixed;
            height: 100%;
            margin-left: -10%;
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
            width: 200px;
            height: 250px;
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
            height: 90px;
            width: 160px;
        }

        .card .content a {
            position: relative;
            display: inline-block;
            background-color: #000;
            color: #fff;
            padding: 5px 10px;
            border-radius: 5px;
            margin-top: 5px;
            text-decoration: none;
            margin-bottom: 5px;
        }

        .grid-container {
            display: grid;
            font-size: 10px;
            font-weight: bold;
            text-align: left;
            grid-template-columns: repeat(2, 1fr);
            grid-template-rows: repeat(2, 1fr);
            gap: 8.5px;
        }

        grid-item {
            text-transform: capitalize;
        }

        .data {
            font-weight: lighter;
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
            right: 70px;
            text-align: center;
            z-index: 1001;
            /* Ensure a higher z-index than other elements */
        }

        /* Style for the compare button inside compare-container */
        .compare-button {
            background-color: #1fab9e;
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

        .back-button {
            background-color: #1fab9e;
            margin-top: 42px;
            margin-left: 18px;
            height: 49px;
            width: 200px;
            color: white;
            font-size: large;
            font-weight: bold;
            padding: 10px 20px;
            /* border: none; */
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="sidebar" id="sidebar">
        <!-- Add your sidebar content here -->
        <form method="POST" action="pfilter_result.php" class="filter-form">
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
           
            <!-- <input type="button" value="Compare" onclick="compareSelectedPlans()"> -->

        </form>
        <button class="back-button" onclick="goBack()">Back</button>

    </div>
    
    <div class="compare-container">
        
        <button class="compare-button" onclick="compareSelectedPlans()">Compare</button>
    </div>
    <script>
        function goBack() {
                    window.location.href = 'landing.php';
                    
                }
    </script>
</body>

</html>