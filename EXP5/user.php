<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background-color:#d3d3d3;">
    
<?php 
include 'navbar.php'; 
include 'connect.php';



if(!isset($_SESSION['email'])){
    echo "<h3>Sorry no user-profile found, Kindly login again..</h3>";
}
else{
    $userEmail  =$_SESSION['email'];
$sql = "SELECT * FROM USERS WHERE email= '$userEmail'";

$result = mysqli_query($conn, $sql);
$rows = mysqli_num_rows($result);

if($rows > 0){
   while($row= mysqli_fetch_assoc($result)){ 
    echo  '<div class="container mt-3 ">
                <ul class="list-group col-md-12 pr-0 rounded border border-info">
                    <li class="list-group-item"><strong>Name: </strong>' .$row['fullName'].'</li>
                    <li class="list-group-item"><strong>Email: </strong>' .$row['email'].'</li>
                    <li class="list-group-item"><strong>Address: </strong>' .$row['address'].'</li>
                    <li class="list-group-item"><strong>Mobile no: </strong>' .$row['Mob'].'</li>
                    <li class="list-group-item"><strong>AccountCreated_At: </strong>' .$row['dateCreated']. '</li>
                    
                </ul>
            </div>';
   }
   echo '<div class="col-md-4 mx-auto d-flex justify-content-center mt-3">
            <button class="btn btn-info text-light"><a class="text-light" href="./updateProfile.php">Edit Profile</a></button>
        </div>';
}
}

?>
<script>



</script>
    
</body>
</html>

