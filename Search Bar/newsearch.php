<?php
    include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

</head>
<body>
    <div class="container my-5">
        <form method="post">
            <input type="text" placeholder="Search data" name="search">
            <button class="btn btn-dark btn-sm" name="submit">Search</button>
        </form>

    </div>
    <div class="container my-5">
        <table class="table">
        <?php
            if(isset($_POST['submit'])){
                $search =$_POST['search'];
                $sql="Select * from `airtel_prepaid` where id like '%$search%' or price like '%$search%' or validity like '%$search%' or type like '%$search%' ";
                $result= mysqli_query($connection, $sql);

                if($result){
                    if(mysqli_num_rows($result)>0){
                        echo  '<thead>
                    <tr>
                    <th>Sl_no</th>
                    <th>Price</th>
                    <th>Validity</th>
                    <th>Data</th>
                    <th>Type</th>
                    <th>Description</th>
                    </tr>
                    </thead>
                    ';
                    while ($row=mysqli_fetch_assoc($result)){                                    
                    echo '<tbody>
                    <tr>
                    <td>'.$row['id'].'</td>
                    <td>'.$row['price'].'</td>
                    <td>'.$row['validity'].'</td>
                    <td>'.$row['data/talktime'].'</td>
                    <td>'.$row['type'].'</td>
                    <td>'.$row['description'].'</td>
                    
                    </tr>
                    </tbody>';

                    }
                }

                    else{
                        echo '<h2 class=text-danger>Data Not Found </h2> '  ;
                    }

                }
               
            }

            ?>
         
        </table>
    </div>

</body>
</html>