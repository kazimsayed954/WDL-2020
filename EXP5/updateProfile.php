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
    echo '<h3>Sorry, No user logged in Please Login again to update your profile...</h3>';
}
else{
    $userEmail = $_SESSION['email'];
    $sql = "SELECT * FROM USERS WHERE email= '$userEmail'";

    $result = mysqli_query($conn, $sql);
    $rows = mysqli_num_rows($result);
    $up_row = mysqli_fetch_assoc($result);
    $old_email =$up_row['email'];





   if($rows > 0){
    echo  '<div class="container mt-3 ">
                <ul class="list-group col-md-12 pr-0 rounded border border-info">
                    <li class="list-group-item"><strong>Name: </strong>' .$up_row['fullName'].'</li>
                    <li class="list-group-item"><strong>Email: </strong>' .$up_row['email'].'</li>
                    <li class="list-group-item"><strong>Address: </strong>' .$up_row['address'].'</li>
                    <li class="list-group-item"><strong>Mobile no: </strong>' .$up_row['Mob'].'</li>
                    <li class="list-group-item"><strong>AccountCreated_At: </strong>' .$up_row['dateCreated']. '</li>
                    
                    <li class="list-group-item"><strong>isUpdated: </strong>' .$up_row['isUpdated']. ' (Here, 1 refers to updated and 0 not updated.)</li>
                </ul>
            </div>';
        echo '<div class="container d-flex justify-content-center  mt-4">
                <div class="d-flex justify-content-center flex-column col-md-8">
                    <h3 class="text-info text-center pb-3">Update, Your User-Profile refering above user-info.</h3>
                    <form  action="updateProfile.php" method="post">
                        <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                        
                        </div>
                        <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="pass">
                        </div>
                        <div class="form-group">
                        <label for="Address">Address</label>
                        <input type="text" class="form-control" id="address" name="address">
                        </div>

                        <div class="form-group">
                        <label for="Mob">Mobile</label>
                        <input type="text" class="form-control" id="Mob" name="Mob">
                        </div>
                        
                        <button type="submit" class="btn btn-primary" value="btn_up">Submit</button>
                    </form>
                </div>
                </div>';

    if($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['email'] != "" && $_POST['pass'] != "" && $_POST['address'] != "" && $_POST['Mob'] != ""){
        $up_email = $_POST['email'];
        $up_pass = $_POST['pass'];
        $up_address = $_POST['address'];
        $up_Mob=$_POST['Mob'];
        
        $up_sql ="UPDATE `users` SET `email` = '$up_email' ,`pass` ='$up_pass' ,`address` ='$up_address', `Mob` ='$up_Mob', `isUpdated`= '1' WHERE `email` = '$old_email' ";
        $up_result = mysqli_query($conn, $up_sql);   
        echo '<div class="container mt-3">
            <div class="alert alert-success" role="alert">
               <p><strong> Update noted,</strong> it will reflect shortly. </p>
            </div>
        </div>';
    }
    else{
        echo '<p class="text-center mt-2">Please fill all your details correctly, Profile field cannot be empty!</p>';
    }

   
   }
   else{
       echo "<h2>Sorry, No records are found to be updated. Please Login</h2>";
   }



}



?>

    
</body>
</html>

