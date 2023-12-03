<?php
    include './config/connection.php';

    if(isset($_GET['search'])){
        $search = $_GET['search'];
        $sql = "SELECT * FROM `airtel_prepaid` 
        WHERE id LIKE '%$search%' OR price LIKE '%$search%' OR data_talktime LIKE '%$search%' OR validity LIKE '%$search%' OR type LIKE '%$search%'
        
        UNION
        
        SELECT * FROM `jio_prepaid` 
        WHERE id LIKE '%$search%' OR price LIKE '%$search%' OR data_talktime LIKE '%$search%' OR validity LIKE '%$search%' OR type LIKE '%$search%'
        
        UNION
        
        SELECT * FROM `bsnl_prepaid` 
        WHERE id LIKE '%$search%' OR price LIKE '%$search%' OR data_talktime LIKE '%$search%' OR validity LIKE '%$search%' OR type LIKE '%$search%'
        
        UNION
        
        SELECT * FROM `vi_prepaid` 
        WHERE id LIKE '%$search%' OR price LIKE '%$search%' OR data_talktime LIKE '%$search%' OR validity LIKE '%$search%' OR type LIKE '%$search%'";

        $result = mysqli_query($conn, $sql);

        if($result){
            if(mysqli_num_rows($result) > 0){
                echo '<div class="container my-5">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Sl_no</th>
                                    <th>Price</th>
                                    <th>Validity</th>
                                    <th>Data per Day</th>
                                    <th>Additional Data</th>
                                    <th>Data/Talktime</th>
                                    <th>Type</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>';

                while ($row = mysqli_fetch_assoc($result)){
                    echo '<tr>
                            <td>'.$row['id'].'</td>
                            <td>'.$row['price'].'</td>
                            <td>'.$row['validity'].'</td>
                            <td>'.$row['dataperday'].'</td>
                            <td>'.$row['additionaldata'].'</td>
                            <td>'.$row['data_talktime'].'</td>
                            <td>'.$row['type'].'</td>
                            <td>'.$row['description'].'</td>
                          </tr>';
                }

                echo '</tbody></table></div>';
            } else {
                echo '<div class="container my-5">
                        <h2 class="text-danger">Data Not Found</h2>
                      </div>';
            }
        }
    }
?>
