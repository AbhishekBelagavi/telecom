<?php
$servername="localhost";
$username ="root";
$password="Kshivamili@2001";


$connection= mysqli_connect($servername,$username,$password,"tele");
if(!$connection)
    die("Could not connect".mysqli_connect_error());
// else
//     echo 'connection established';


?>