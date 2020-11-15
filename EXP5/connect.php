<?php 

$servername ="localhost";
$username = "root";
$password = "";
$database = "chachastore";

$conn = mysqli_connect($servername,$username,$password,$database);

if($conn){
    //COnnection is sucess..
}
else{
    echo "Connection is not established!";
}

?>